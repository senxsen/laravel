<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Shuanglong\Manager\Services\AuthService;

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function dashboard()
    {
        return 'dashboard';
    }
}