@extends('template.template-backend')

@section('main')
<main class="px-4">
    <div class="mb-10 flex flex-row flex-wrap justify-between items-center">
        <div class="flex flex-col">
            <div class="text-[36px]">Products</div>
            <ul class="flex gap-[32px] relative">
                <li class="after:content-['/'] after:absolute after:ml-[16px] after:translate-x-[-50%]">Products</li>
                <li>Products</li>
            </ul>
        </div>
        <a href="{{route('products.create')}}">
            <span
                class="inline-block px-4 py-3 rounded-lg bg-[theme(colors.Theme-Primart)] text-[theme(colors.Theme-Light)]">
                Add Product
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
</main>
@endsection

@section('js')
<script>
    const aaa = document.querySelectorAll('flex');
        console.log(aaa);
</script>
@endsection
