@extends('template.template-fontend')
@extends('template.template-fontend')
@extends('template.template-fontend')
@extends('template.template-fontend')
@extends('template.template-fontend')
@extends('template.template-fontend')
@section('main')
<div class="w-[100%] max-w-7xl mx-auto px-5 py-5 flex flex-row">
    分夜闌
</div>
<div class="w-[100%] max-w-7xl mx-auto px-5 flex flex-row">
    <span class="text-[36px]">Shop Cart</span>
</div>
<div class="w-[100%] max-w-7xl mx-auto px-5 py-10 flex flex-row">
    <form class="w-[100%] flex flex-row" action="{{route('order.store01')}}" method="POST">
        @csrf
        <div class="w-[65%] pr-[30px] flex flex-col">
            <div class="w-[100%] py-2 px-3 mb-5 rounded-md bg-[theme(colors.Light-Danger)]">
                <span class="text-[theme(colors.Dark-Danger)]">
                    You’ve got FREE delivery.
                    <a class="hover:text-[theme(colors.Theme-Primart)]" href="">Start checkout now!</a>
                </span>
            </div>

            <table class="w-[100%]">
                <thead>
                    <tr>
                        <th class="p-3"></th>
                        <th class="p-3">商品圖片</th>
                        <th class="p-3">名稱</th>
                        <th class="p-3">數量</th>
                        <th class="p-3">金額</th>
                    </tr>
                </thead>
                <tbody class="border-spacing-x-5">
                    @foreach ($carts as $cart)
                    <tr class="border-b-2">
                        <td class="py-3 text-center">
                            <input name="products_active[]" @if($cart->products_active) checked @endif type="checkbox"
                            value="{{$cart->id}}" >
                        </td>
                        <td class="py-3 text-center">
                            <div class="w-[50px] h-[50px] mx-auto">
                                <img class="w-[100%]" src="{{asset($cart->product->product_image)}}" alt="">
                            </div>
                        </td>
                        <td class="py-3 text-center">
                            <div class="flex flex-col">
                                <span>{{$cart->product->product_name}}</span>
                                <span>.98 / lb</span>
                                <div>Remove</div>
                            </div>
                        </td>
                        <td class="py-3 text-center">
                            <div class="flex justify-center items-center">
                                <button
                                    class="w-[35px] h-[35px] flex justify-center items-center border-2 active:bg-[theme(colors.Theme-Primart)] active:text-[theme(colors.Theme-Light)]"
                                    type="button" data-operation="-">-</button>
                                <input data-inputoperation='{{$cart->product->id}}' type="number"
                                    name="order_{{$cart->product->id}}" min="0" value="{{$cart->qty}}"
                                    class="w-[70px] h-[35px] flex justify-center items-center text-center appearance-none">
                                <button
                                    class="w-[35px] h-[35px] flex justify-center items-center border-2 active:bg-[theme(colors.Theme-Primart)] active:text-[theme(colors.Theme-Light)]"
                                    type="button" data-operation="+">+</button>
                            </div>
                        </td>
                        <td class="py-3 text-center">
                            <div class="flex flex-col justify-center items-center">
                                <span class="text-[theme(colors.Theme-Danger)]">$20.00</span>
                                <span class="">${{$cart->product->price_sale}}</span>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="w-[35%] p-[30px] flex flex-col gap-[25px] border-2">
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
</div>
@endsection

@section('js')
<script>
    // 符號按鈕 + / -
    const operation = document.querySelectorAll('[data-operation]');
    operation.forEach(element => {
        element.addEventListener('click',()=>{
            if(element.dataset.operation == '-' && element.parentElement.children[1].value > 0){
                element.parentElement.children[1].value--;
            }

            if(element.dataset.operation == '+'){
                element.parentElement.children[1].value++;
            }
        });
    });

    // 待修改
    // const inputoperation = document.querySelectorAll('[data-inputoperation]');
    // inputoperation.forEach(element=>{
    //     console.log(element);
    //     element.addEventListener('change',()=>{
    //         if(parseFloat(element.value).toString() == "NaN"){
    //             Swal.fire(
    //                 'Good job!',
    //                 'You clicked the button!',
    //                 'success'
    //             )
    //         }
    //     });
    // });
</script>
@endsection
