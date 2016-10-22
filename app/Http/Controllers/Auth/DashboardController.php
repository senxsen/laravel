<?php
/**
 * Created by PhpStorm.
 * User: senxsen
 * Date: 2016/10/4
 * Time: 17:56
 */

namespace App\Http\Controllers\Auth;

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
        switch($User->set_point)
        {
            case 1000:
                $level = '福龍';
            case 3000:
                $level = '翔龍';
            case 5000:
                $level = '銀龍';
            case 10000:
                $level = '金龍';
        }

        $binding = [
            'user' => $User,
            'level' => $level,
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
                $level = '福龍';
            case 3000:
                $level = '翔龍';
            case 5000:
                $level = '銀龍';
            case 10000:
                $level = '金龍';
        }

        $binding = [
            'user' => $User,
            'level' => $level,
        ];
        return view('auth.points', $binding);
    }
}