<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OrderDeatail;
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
                'qty' => 1,
            ]);
        }
        return redirect(route('index'));
    }

    public function AccountIndex()
    {
        return view('account.index');
    }
    public function AccountOrder()
    {
        $user = Auth::user();
        $OrderDeatail = OrderDeatail::with('product')->where('user_id', $user->id)->get();
        return view('account.order', compact('OrderDeatail'));
    }
    public function AccountSetting()
    {
        return view('account.setting');
    }
    public function AccountAddress()
    {
        return view('account.address');
    }
    public function AccountPaymentMethod()
    {
        return view('account.paymethod');
    }
    public function AccountNotification()
    {
        return view('account.notification');
    }
}
