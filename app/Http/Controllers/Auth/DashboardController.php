<?php

namespace App\Http\Controllers\Auth;

use App\Bonus;
use App\Http\Controllers\Controller;
use App\User;
use DB;
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


//        dd(DB::getQueryLog()); //check sql way
        //已加到User.php Model裡頭
//        if($User->created_at > '2016-08-01')
//            $User->type = 'B';
//        else $User->type = 'A';
        $binding = [

        ];

        return view('auth.dashboard', $binding);
    }

    public function realname()
    {
        // 撈取幣值的資料
        $binding = [
        ];
        return view('auth.realname', $binding);
    }

    public function editpassword()
    {
        // 撈取幣值的資料
        $binding = [
        ];
        return view('auth.editpassword', $binding);
    }

    public function editsecondpassword()
    {
        // 撈取幣值的資料
        $binding = [
        ];
        return view('auth.editsecondpassword', $binding);
    }

    public function editmemberinfo()
    {
        // 撈取幣值的資料
        $binding = [
        ];
        return view('auth.editmemberinfo', $binding);
    }

    public function pointexchange()
    {
        // 撈取幣值的資料
        $binding = [
        ];
        return view('auth.pointexchange', $binding);
    }

    public function pointtransfer()
    {
        // 撈取幣值的資料
        $binding = [
        ];
        return view('auth.pointtransfer', $binding);
    }

    public function pointpurchase()
    {
        // 撈取幣值的資料
        $binding = [
        ];
        return view('auth.pointpurchase', $binding);
    }

    public function sponsorlist()
    {
        // 撈取幣值的資料
        $binding = [
        ];
        return view('auth.sponsorlist', $binding);
    }

    public function listmap()
    {
        // 撈取幣值的資料
        $binding = [
        ];
        return view('auth.listmap', $binding);
    }
}