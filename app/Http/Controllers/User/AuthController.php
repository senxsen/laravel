<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Shuanglong\Core\Supports\RandomStringSupports;
use Illuminate\Support\MessageBag;
use UserAuth;
use App\User;
use Exception;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        return view('auth.login');
    }

    /**
     * @return string
     */
    // 接 POST FORM
    public function loginPost(Request $request)
    {
        try {
            // 撈取使用者
            $User = User::where('email', $request->email)->first();

            if( is_null($User) ){
                // 找不到使用者
                throw new Exception(
                    '找不到 email',
                    234
                );
            }
            // 判斷密碼是否正確
            if(! Hash::check($request->password, $User->password)){
                // 密碼不正確
                throw new Exception(
                    '密碼不正確',
                    123
                );
            }
            // 登入
            UserAuth::login($User->id);
            // 註冊後進入到會員首頁
            return redirect()->route('dashboard');

        } catch (Exception $exception) {
            $MessageBag = new MessageBag();
            $MessageBag->add("own", $exception->getMessage());
            return redirect()->route('login')->withInput()->with(
                'errors',
                $MessageBag
            );
        }


    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $this->validate($request, [
            'full_name' => "max:50|required",
            'nickname'  => "max:20|required",
            'email'     => "email|max:255|required|unique:users",
            'mobile'    => "required|unique:users",
            'password'  => "max:255|required",
            'password_confirmation' => "same:password",
            'status'    => "Y",                                     // 允許
        ]);
        // 已經驗證好了
        try {
            // 抓取使用者的輸入資料
            $inputs = $request->all();
            // 驗證是否有重複 email
            // 我上面驗證已經加了unique:user 所以這邊其實上可以不用加
            $FindUserByEmail = User::where("email", $inputs['email'])->first();
            if(!is_null($FindUserByEmail)){
                // Email 重複
                throw new Exception(
                    'Email 重複'
                );
            }
            // 驗證是否有重複 mobile
            $FindUserByMobile = User::where("mobile", $inputs['mobile'])->first();
            if(!is_null($FindUserByMobile)){
                // Mobile 重複
                throw new Exception(
                    'Mobile 重複'
                );
            }
            // 新增一個使用者
            $User = new User();
            $User->id           = RandomStringSupports::generate(8, '1234567890');
            $User->full_name    = $inputs['full_name'];
            $User->nickname     = $inputs['nickname'];
            $User->email        = $inputs['email'];
            $User->mobile       = $inputs['mobile'];
            $User->password     = Hash::make($inputs['password']);
            $User->save();
            // TODO: 因為 id 欄位有 Unique 所以不能有重複的，但因為目前沒有判斷是否重複，就直接寫入，雖然碰撞率很低，但還是有可能發生。目前如果出錯的話，他會跳到 Exception 去。

            // 註冊完成都沒問題就直接登入

            // 登入
            UserAuth::login($User->id);

            // 註冊後進入到會員首頁
            return redirect()->route('dashboard');


        } catch (Exception $exception) {
            // new 一個 laravel 的 Message Bag 用它來存我們的錯誤資訊
            $MessageBag = new MessageBag();
            // 隨便給一個 key
            $MessageBag->add("own", $exception->getMessage());
            return redirect()->route('register')->withInput()->with(
                'errors',
                $MessageBag
            );
        }
    }
}