@extends('template.template-fontend')
@section('main')
<section>

</section>
<section>

</section>
<section>
    <div class="w-[100%] max-w-7xl mx-auto px-5">
        <div class="text-[24px] py-5">Popular Products</div>
        <div class="grid grid-cols-4 grid-flow-row gap-4">
            @foreach ($product as $item)
            <div class="p-5 flex flex-col border-2 rounded-md">
                {{-- 圖片 --}}
                <img src="{{asset($item->product_image)}}" alt="">
                {{-- 類別 --}}
                <div>{{$item->product_category}}</div>
                {{-- 產品名稱 --}}
                <div>{{$item->product_name}}</div>
                <form action="{{route('cart.add')}}" method="POST" class="flex items-center justify-between">
                    @csrf
                    <input type="text" name="product" value="{{$item->id}}" hidden>
                    <div>${{$item->price_sale}}</div>
                    <button type="submit" class="bg-[theme(colors.Theme-Primart)] py-2 px-3 rounded-md">
                        <i class="fa-thin fa-plus text-[theme(colors.Theme-Light)] mr-1"></i>
                        <span class="text-[theme(colors.Theme-Light)]">Add</span>
                    </button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</section>


<section>
    <div class="w-[100%] max-w-7xl mx-auto px-5 py-20 grid grid-cols-4 grid-flow-row gap-[32px]">
        <div class="flex flex-col gap-[16px]">
            <img class="w-[40px]" src="{{asset('image/icon/clock.svg')}}" alt="">
            <span class="text-[16px] font-bold">10 minute grocery now</span>
            <span class="text-left text-[14px]">Get your order delivered to your doorstep at the earliest from FreshCart
                pickup stores near
                you.</span>
        </div>
        <div class="flex flex-col gap-[16px]">
            <img class="w-[40px]" src="{{asset('image/icon/gift.svg')}}" alt="">
            <span class="text-[16px] font-bold">Best Prices & Offers</span>
            <span class="text-left text-[14px]">Cheaper prices than your local supermarket, great cashback offers to top
                it off. Get best pricess &
                offers.</span>
        </div>
        <div class="flex flex-col gap-[16px]">
            <img class="w-[40px]" src="{{asset('image/icon/package.svg')}}" alt="">
            <span class="text-[16px] font-bold">Wide Assortment</span>
            <span class="text-left text-[14px]">Choose from 5000+ products across food, personal care, household,
                bakery, veg and non-veg & other
                categories.</span>
        </div>
        <div class="flex flex-col gap-[16px]">
            <img class="w-[40px]" src="{{asset('image/icon/package.svg')}}" alt="">
            <span class="text-[16px] font-bold">Easy Returns</span>
            <span class="text-left text-[14px]">Not satisfied with a product? Return it at the doorstep & get a refund
                within hours. No questions
                asked policy.</span>
        </div>
    </div>
</section>

@endsection

@section('js')

@endsection
