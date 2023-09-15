@extends('template.template-fontend')

@section('main')
<div class="w-[100%] max-w-7xl mx-auto px-5 flex flex-row">
    <div class="w-[280px] min-h-[100vh] border-r-2">
        @include('layouts.account')
    </div>
    <div class="w-[calc(100%-280px)]">
        <div class="p-10 text-[36px]">Order List</div>
        <div class="pl-10">
            <table class="w-[100%] border-collapse border border-slate-500">
                <thead class="bg-[theme(colors.Gary-200)]">
                    <tr>
                        <th class="p-2 border border-slate-600">Order</th>
                        <th class="p-2 border border-slate-600">Total</th>
                        <th class="p-2 border border-slate-600">Status</th>
                        <th class="p-2 border border-slate-600">Date</th>
                        <th class="p-2 border border-slate-600">Items</th>
                        <th class="p-2 border border-slate-600">Amount</th>
                        <th class="p-2 border border-slate-600"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($OrderDeatail as $item)
                    <tr>
                        <td class="p-2 border border-slate-700">
                            <div class="text-center">
                                <span>{{$item->order_name}}</span>
                            </div>
                        </td>
                        <td class="p-2 border border-slate-700">
                            <div class="text-center">
                                <span>{{$item->order_total}}</span>
                            </div>
                        </td>
                        <td class="p-2 border border-slate-700">
                            <div class="text-center">
                                <span>{{$item->pay_static}}</span>
                            </div>
                        </td>
                        <td class="p-2 border border-slate-700">
                            <div class="text-center">
                                <span>{{$item->created_at->toDateString()}}</span>
                            </div>
                        </td>
                        <td class="p-2 border border-slate-700">
                            <div class="text-center">
                                <span>{{$item->product->count()}}</span>
                            </div>
                        </td>
                        <td class="p-2 border border-slate-700">
                            <div class="text-center">
                                <span>${{$item->product->sum('product_sale')}}</span>
                            </div>
                        </td>
                        <td class="p-2 border border-slate-700">
                            <div class="text-center">
                                <span><i class="fa-solid fa-ellipsis-vertical"></i></span>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
