<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'content' => '自由に入力してください',
        ];
        return view('hello.index', $data);
    }
    public function post(Request $request)
    {
        $contents = $request->content;
        $data = [
            'content' => $contents . 'と入力しましたね'
        ];
        return view('hello.index', $data);
    }
    public function time()
    {
        $now_date = 'y年m月d日';
        $data = ['now_date' => $now_date];
        view('hello.index', $data);
    }
}
