<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaculateController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function caculate(Request $request)
    {
        $val1 = $request->input('val1');
        $operator = $request->input('operator');
        $val2 = $request->input('val2');
        if ($operator == '+') {
            $sum = $val1 + $val2;
            return $sum;
        }
        if ($operator == '-') {
            $sub = $val1 - $val2;
            return $sub;
        }
        if ($operator == '*') {
            $mul = $val1 * $val2;
            return $mul;
        }
        if ($operator == '/') {
            $divine = $val1 / $val2;
            return $divine;
        }
    }
}
