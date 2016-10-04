<?php
/**
 * Created by PhpStorm.
 * User: senxsen
 * Date: 2016/10/4
 * Time: 17:56
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
class DashboardController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function dashboard()
    {
        return view('auth.dashboard');
    }
}