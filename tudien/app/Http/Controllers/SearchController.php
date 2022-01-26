<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {
        $vocab = $request->vocab;
        $arr = [
            "hello" => "xin chào",
            "bye"   => "tạm biệt"
        ];
        if (isset($arr[$vocab])) {
            $kq =  $arr[$vocab];
        } else {
            $kq = 'Not found';
        }
        return view('result', compact('kq'));
    }
}
