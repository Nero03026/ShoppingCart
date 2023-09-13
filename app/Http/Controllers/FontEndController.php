<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FontEndController extends Controller
{
    //
    public function cart(Request $request)
    {
        $user_id  = Auth::id();

        $cart = Cart::where('user_id', $user_id)->where('products_id', $request->product)->count();
        if (!$cart) {
            Cart::create([
                'products_id' => $request->product,
                'user_id' => $user_id,
                'qty' => 0,
            ]);
        }
        return redirect(route('index'));
    }
}
