@extends('template.template-fontend')
@section('main')
<div class="flex">
    @foreach ($product as $item)
    <div class="flex flex-col">
        <div>{{$item->product_name}}</div>
        <form action="{{route('cart.add')}}" method="POST" class="flex">
            @csrf
            <input type="text" name="product" value="{{$item->id}}" hidden>
            <button type="submit">加入購物車</button>
        </form>
    </div>
    @endforeach
</div>
@endsection

@section('js')

@endsection
