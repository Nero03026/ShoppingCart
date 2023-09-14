@extends('template.template-fontend')

@section('main')
<div class="w-[100%] max-w-7xl mx-auto px-5 flex flex-row">
    <div class="w-[280px] min-h-[100vh] border-r-2">
        @include('layouts.account')
    </div>
    <div class="w-[calc(100%-280px)]">
        <div class="p-10 text-[36px]">Order List</div>
        <table>
            <thead>
                <tr>
                    <th>Order</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Items</th>
                    <th></th>
                    <th>Amount</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($OrderDeatail as $item)
                <tr>
                    <td>
                        <div>
                            <span>{{$item->order_name}}</span>
                        </div>
                    </td>
                    <td>
                        <div>
                            <span>{{$item->order_total}}</span>
                        </div>
                    </td>
                    <td>
                        <div>
                            <span>{{$item->pay_static}}</span>
                        </div>
                    </td>
                    <td>
                        <div>
                            <span>{{$item->created_at->toDateString()}}</span>
                        </div>
                    </td>
                    <td>
                        <div>
                            <span>{{$item->product->count()}}</span>
                        </div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')

@endsection
