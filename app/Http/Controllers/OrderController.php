<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    public function step01()
    {
        $user_id = Auth::id();
        $carts = Cart::with('product')->where('user_id', $user_id)->get();
        return view('Shopping.setp-01', compact('carts'));
    }
    public function store01(Request $request)
    {

        $data = $request->all();
        $user_id = Auth::id();
        foreach ($data as $key => $value) {
            if (str_contains($key, 'order')) {
                $item = explode('_', $key);
                $cart = Cart::where('products_id', $item[1])->where('user_id', $user_id)->first();
                $cart->update(['qty' => $value]);
            }
        }
        return redirect(route('order.step02'));
    }
    public function step02()
    {
        return view('Shopping.setp-02');
    }
    public function store02(Request $request)
    {
        return redirect(route('order.step03'));
    }
    public function step03()
    {
        return view('Shopping.setp-03');
    }
    public function store03(Request $request)
    {
        return redirect(route('order.step04'));
    }
    public function step04()
    {
        return view('Shopping.setp-04');
    }
}
