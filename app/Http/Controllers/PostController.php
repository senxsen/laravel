<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;


class PostController extends Controller// Remeber extends
{
    /**
     * PostController constructor.
     */
    public function __construct()
    {

    }

    public function index()
    {
        try {

            return view("welcome");
        } catch (Exception $exception) {
//            throw $exception;
        }
    }
}
