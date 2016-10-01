<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
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

            return redirect()->route('dashboard');

        } catch (Exception $exception) {
            return redirect()->route('login')->with(
                'error',
                $exception->getMessage()
            );
        }


    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        try {
            // 抓取使用者的輸入資料
            $inputs = $request->all();
            $this->validate($request, [
                'full_name' => "max:2|required",
                'email'     => "email|max:2|required"
            ]);

            return "success";

        } catch (Exception $exception) {
            return redirect()->route('register')->with(
                'error',
                $exception->validator->errors()->all()
            );
        }
    }
}