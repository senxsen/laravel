<?php
/**
 * Created by PhpStorm.
 * User: senxsen
 * Date: 2016/10/4
 * Time: 17:56
 */

namespace App\Http\Controllers\Auth;

use App\Bonus;
use App\Http\Controllers\Controller;
use App\User;
use UserAuth;

class DashboardController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function dashboard()
    {
        // 撈取幣值的資料
        $user_id = UserAuth::getUserId();
        $User = User::where('id', $user_id)->first();
        $binding = [
            'user' => $User,
        ];

        return view('auth.dashboard', $binding);
    }

    public function points()
    {
        // 撈取幣值的資料
        $user_id = UserAuth::getUserId();
        $User = User::where('id', $user_id)->first();
        switch($User->set_point)
        {
            case 1000:
                $User->level = '福龍';
                break;
            case 3000:
                $User->level = '翔龍';
                break;
            case 5000:
                $User->level = '銀龍';
                break;
            case 10000:
                $User->level = '金龍';
                break;
        }

        $binding = [
            'user' => $User,
        ];
        return view('auth.points', $binding);
    }

    public function realname()
    {
        // 撈取幣值的資料
        $user_id = UserAuth::getUserId();
        $User = User::where('id', $user_id)->first();
        switch($User->set_point)
        {
            case 1000:
                $User->level = '福龍';
                break;
            case 3000:
                $User->level = '翔龍';
                break;
            case 5000:
                $User->level = '銀龍';
                break;
            case 10000:
                $User->level = '金龍';
                break;
        }

        $binding = [
            'user' => $User,
        ];
        return view('auth.realname', $binding);
    }

    public function editpassword()
    {
        // 撈取幣值的資料
        $user_id = UserAuth::getUserId();
        $User = User::where('id', $user_id)->first();


        $binding = [
            'user' => $User,
        ];
        return view('auth.editpassword', $binding);
    }

    public function editsecondpassword()
    {
        // 撈取幣值的資料
        $user_id = UserAuth::getUserId();
        $User = User::where('id', $user_id)->first();
//        switch($User->set_point)
//        {
//            case 1000:
//                $User->level = '福龍';
//                break;
//            case 3000:
//                $User->level = '翔龍';
//                break;
//            case 5000:
//                $User->level = '銀龍';
//                break;
//            case 10000:
//                $User->level = '金龍';
//                break;
//        }

        $binding = [
            'user' => $User,
        ];
        return view('auth.editsecondpassword', $binding);
    }

    public function editmemberinfo()
    {
        // 撈取幣值的資料
        $user_id = UserAuth::getUserId();
        $User = User::where('id', $user_id)->first();
//        switch($User->set_point)
//        {
//            case 1000:
//                $User->level = '福龍';
//                break;
//            case 3000:
//                $User->level = '翔龍';
//                break;
//            case 5000:
//                $User->level = '銀龍';
//                break;
//            case 10000:
//                $User->level = '金龍';
//                break;
//        }

        $binding = [
            'user' => $User,
        ];
        return view('auth.editmemberinfo', $binding);
    }
}