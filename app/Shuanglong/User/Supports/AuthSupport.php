<?php

namespace App\Shuanglong\User\Supports;

use Session;

class AuthSupport
{
    protected $user;

    public static function guest()
    {
        $isGuest = true;
        if(Session::has('user_id')){
            return $isGuest = false;
        }
        return $isGuest;
    }

    public static function getUserId()
    {
        if(Session::has('user_id')) {
            return Session::get('user_id');
        }
        throw new \Exception(
            '未登入'
        );
    }

    public static function logout()
    {
        if(Session::has('user_id')){
            Session::forget('user_id');
        }
        return true;
    }

    public static function login($user_id)
    {
        return Session::put('user_id', $user_id);
    }
}