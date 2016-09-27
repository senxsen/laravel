<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
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
        dd($request->all());
    }
}