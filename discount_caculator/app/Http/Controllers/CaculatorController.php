<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaculatorController extends Controller
{
    public function caculator(Request $request)
    {
        $productDescription = $request->productDescription;
        $price = $request->price;
        $discountPercent = $request->discountPercent;
        $discountAmount = $price * $discountPercent * 0.01;
        $discountPrice = $price - $discountAmount;
        // $param=[
        //     "discountAmount" => $discountAmount
        // ];
        return view('show_discount_amount', compact('discountAmount','discountPrice'));
    }
}
