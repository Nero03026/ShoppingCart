@extends('template.template-fontend')

@section('main')
<section class="w-[100%]">
    <form class="w-[100%] flex flex-row" action="{{route('order.store01')}}" method="POST">
        @csrf
        <div class="w-[60%] flex flex-col">
            @foreach ($carts as $cart)
            <div class="w-[100%] flex flex-row items-center">
                <div class="flex flex-col">
                    <input type="checkbox" name="products_active[]" value="{{$cart->id}}" @if ($cart->products_active) checked
                    @endif>
                </div>
                <div class="w-[50px] h-[50px]">
                    <img src="{{asset($cart->product->product_image)}}" alt="">
                </div>
                <div class="flex flex-col">
                    <span>{{$cart->product->product_name}}</span>
                    <span>.98 / lb</span>
                    <div>Remove</div>
                </div>
                <div class="flex justify-center items-center">
                    <div class="w-[35px] h-[35px] flex justify-center items-center cursor-pointer border-2">-</div>
                    <input class="w-[35px] h-[35px] flex justify-center items-center text-center" type="number"
                        name="order_{{$cart->product->id}}" value="{{$cart->qty}}">
                    <div class="w-[35px] h-[35px] flex justify-center items-center cursor-pointer border-2">+</div>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <span class="text-[theme(colors.Theme-Danger)]">$20.00</span>
                    <span class="">${{$cart->product->price_sale}}</span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="w-[40%] p-[30px] flex flex-col gap-[25px] border-2">
            <div class="">
                <div class="mb-[15px] text-[20px]">Summary</div>
                <div class="flex flex-col border-2 rounded-lg mb-[20px]">
                    <div class="flex justify-between px-[20px] py-[15px] border-b-2">
                        <span>Item Subtotal</span>
                        <span>$70.00</span>
                    </div>
                    <div class="flex justify-between px-[20px] py-[15px] border-b-2">
                        <span>Service Fee</span>
                        <span>$3.00</span>
                    </div>
                    <div class="flex justify-between px-[20px] py-[15px]">
                        <span class="">Subtotal</span>
                        <span class="">$67.00</span>
                    </div>
                </div>
                <div class="mb-[10px]">
                    <button
                        class="w-[100%] flex justify-between py-[10px] px-[20px] rounded-lg bg-[theme(colors.Theme-Primart)] text-[theme(colors.Theme-Light)]"
                        type="submit">
                        <span>Go to Checkout</span>
                        <span>$67.00</span>
                    </button>
                </div>
                <div>
                    <span class="text-[16px]">By placing your order, you agree to be bound by the Freshcart
                        <a class="text-[theme(colors.Theme-Primart)]" href="http://">Terms of Service</a> and
                        <a class="text-[theme(colors.Theme-Primart)]" href="http://">Privacy Policy</a>.</span>
                </div>
            </div>
            <div>
                <div class="mb-[15px] text-[20px]">Add Promo or Gift Card</div>
                <div class="mb-[5px]">Email address</div>
                <div class="mb-[5px] flex flex-col gap-[8px]">
                    <input class="w-[100%] flex justify-between py-[10px] px-[20px] rounded-lg border-2" type="text"
                        placeholder="Promo or Gift Card">
                    <button class="w-[100%] flex justify-center py-[10px] px-[20px] rounded-lg border-2"
                        type="button">Redeem</button>
                </div>
                <div class="text-[12px] text-[theme(colors.Gary-700)]">Terms & Conditions apply</div>
            </div>
        </div>
    </form>
</section>
@endsection

@section('js')

@endsection
