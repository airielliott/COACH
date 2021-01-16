<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return "Hello";
    }

    public function index2()
    {
        return "Good Night World";
    }
}
