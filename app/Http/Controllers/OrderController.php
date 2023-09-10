<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function step01()
    {
        return view('Shopping.setp-01');
    }
    public function store01(Request $request)
    {
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
