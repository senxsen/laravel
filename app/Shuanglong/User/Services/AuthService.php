<?php

namespace App\Shuanglong\User\Services;


class AuthService
{
    protected $member;
    /**
     * 驗證是不是訪客
     *
     * @return      bool
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-08-05
     */
    public static function guest()
    {
        $isGuest = true;
        if(Session::has(MemberConstant::MEMBER_ID_SESSION_KEY)){
            return $isGuest = false;
        }
        return $isGuest;
    }

    /**
     * 取會員session裡的member id
     *
     * @return      bool|mixed
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-08-09
     */
    public static function getMemberId()
    {
        if(Session::has(MemberConstant::MEMBER_ID_SESSION_KEY)) {
            return Session::get(MemberConstant::MEMBER_ID_SESSION_KEY);
        }
        throw new \Exception(trans('member.not-login'), MemberExceptionCode::NOT_LOGIN);
    }

    /**
     * 登出
     * @return      bool
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-08-16
     */
    public static function logout()
    {
        if(Session::has(MemberConstant::MEMBER_ID_SESSION_KEY)){
            Session::forget(MemberConstant::MEMBER_ID_SESSION_KEY);
        }
        return true;
    }

    public static function login($member_id)
    {
        return Session::put(MemberConstant::MEMBER_ID_SESSION_KEY, $member_id);
    }
}