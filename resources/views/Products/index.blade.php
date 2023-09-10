@extends('template.template-fontend')

@section('main')
<div>
    <a href="{{route('products.create')}}">
        <span class="inline-block p-5 bg-amber-400">
            新增產品
        </span>
    </a>
</div>
<div class="flex flex-wrap">
    <table class="w-[100%]">
        <thead>
            <tr class="bg-[theme(colors.Gary-300)]">
                <th><input type="checkbox" name="" id=""></th>
                <th>Image</th>
                <th>Proudct Name</th>
                <th>Category</th>
                <th>Status</th>
                <th>Price</th>
                <th>Create at</th>
                <th>功能</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr class="hover:bg-[theme(colors.Gary-300)] [&>*:nth-child(n)]:p-[5px]">
                <td class="text-center "><input type="checkbox" name="" id=""></td>
                <td class="text-center">
                    <div><img src="" alt=""></div>
                </td>
                <td class="text-center">{{$product->product_name}}</td>
                <td class="text-center">{{$product->product_category}}</td>
                <td class="text-center">{{$product->product_status}}</td>
                <td class="text-center">{{$product->price_regular}}</td>
                <td class="text-center">{{$product->created_at}}</td>
                <td class="text-center">
                    <div class="flex flex-row justify-center items-center w-[100%]">
                        <div>編輯</div>
                        <div>刪除</div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
<script>
    const aaa = document.querySelectorAll('flex');
        console.log(aaa);
</script>
@endsection
