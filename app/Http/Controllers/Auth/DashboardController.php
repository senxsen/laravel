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


        $binding = [
            'user' => $User
        ];

        return view('auth.dashboard', $binding);
    }
}