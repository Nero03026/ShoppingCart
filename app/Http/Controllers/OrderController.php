<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\OrderDeatail;
use App\Models\OrderProduct;

class OrderController extends Controller
{
    //
    public function step01()
    {
        $user_id = Auth::id();
        $carts = Cart::with('product')->where('user_id', $user_id)->get();
        return view('shopping.setp-01', compact('carts'));
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
        session([
            'products_active' => $request->products_active,
        ]);

        return redirect(route('order.step02'));
    }
    public function step02()
    {
        return view('shopping.setp-02');
    }
    public function store02(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'first_name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'delivery_date' => 'required|date',
                'address_line1' => 'required|max:255',
                'address_code' => 'required|max:255',
                'address_name' => 'required|max:255',
                'order_remark' => 'required|max:255',
            ],
            [
                'required' => ':attribute 不能留空',
                'size' => ':attribute 不能超過 :size',
                'date' => ':attribute 請輸入正確日期格式',
            ]
        );
        if ($validator->fails()) {
            return redirect(route('order.step02'))
                ->withErrors($validator)
                ->withInput();
        }

        session([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'delivery_date' => $request->delivery_date,
            'address_line1' => $request->address_line1,
            'address_line2' => $request->address_line2,
            'address_code' => $request->address_code,
            'address_name' => $request->address_name,
            'order_remark' => $request->order_remark,
        ]);
        return redirect(route('order.step03'));
    }
    public function step03()
    {
        return view('shopping.setp-03');
    }
    public function store03(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            ['pay_mothod' => 'required'],
            ['required' => ':attribute 必填',]
        );

        if ($validator->fails()) {
            return redirect(route('order.step02'))
                ->withErrors($validator)
                ->withInput();
        }

        $noworder = OrderDeatail::whereDate('created_at', now())->count() + 1;
        $myRandStr = '' . join(range('a', 'z')) . '' . join(range('A', 'Z'));
        $order_name = 'QT' . date('Ymd') . str_pad($noworder, 3, '0', STR_PAD_LEFT) . substr(str_shuffle($myRandStr), 0, 3);

        // 新增訂單
        $orderDeatail = OrderDeatail::create([
            'user_id' => Auth::id(),
            'order_name' => $order_name,
            'first_name' => session()->get('first_name'),
            'last_name' => session()->get('last_name'),
            'order_delivery' => date(session()->get('delivery_date')),
            'address_first' => session()->get('address_line1'),
            'address_last' => session()->get('address_line2'),
            'address_code' => session()->get('address_code'),
            'address_name' => session()->get('address_name'),
            'order_remark' => session()->get('order_remark'),
            'order_static' => 1,
            'order_total' => 0,
            'pay_mothod' => $request->pay_mothod,
            'pay_static' => 2,
        ]);

        // 轉移購物車勾選商品至訂單內
        foreach (session()->get('products_active') as $item) {
            $cart = Cart::with('product')->find($item);
            OrderProduct::create([
                'order_id'  => $orderDeatail->id,
                'product_id'  => $cart->products_id,
                'product_qty'  => $cart->qty,
                'product_name'  => $cart->product->product_name,
                'product_category'  => $cart->product->product_category,
                'product_image'  => $cart->product->product_image,
                'product_sale'  => $cart->product->price_sale,
            ]);

            $cart->delete();
        }

        $request->session()->forget([
            'products_active', 'first_name', 'last_name',
            'delivery_date', 'address_line1', 'address_line2',
            'address_code', 'address_name', 'order_remark',
        ]);

        return redirect(route('order.step04'));
    }
    public function step04()
    {
        return view('shopping.setp-04');
    }
}
