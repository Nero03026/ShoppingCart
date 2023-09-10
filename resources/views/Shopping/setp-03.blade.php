@extends('template.template-fontend')

@section('main')
<form action="{{route('order.store03')}}" method="POST">
    @csrf
    <section class="w-[100%] flex flex-col">
        <div class="w-[100%] p-[30px] flex flex-col gap-[25px] border-2">
            <div class="flex flex-col gap-[16px]">
                <label class="flex flex-col" for="paymothod1">
                    <div class="flex flex-row items-start gap-[8px]">
                        <input id="paymothod1" name="paymothod" value=""
                            class="mt-[5px] text-[theme(colors.Theme-Primart)] checked:outline-none checked:outline-[theme(colors.Theme-Primart)] focus:shadow-none"
                            type="radio">
                        <div class="flex flex-col">
                            <span class="text-[14px] font-bold">Payment with Paypal</span>
                            <span class="text-[14px]">You will be redirected to PayPal website to complete your purchase
                                securely.</span>
                        </div>
                    </div>
                </label>
                <label class="flex flex-col" for="paymothod2">
                    <div class="flex flex-row items-start gap-[8px]">
                        <input id="paymothod2" name="paymothod" value=""
                            class="mt-[5px] text-[theme(colors.Theme-Primart)] checked:outline-none checked:outline-[theme(colors.Theme-Primart)] focus:shadow-none"
                            type="radio">
                        <div class="flex flex-col">
                            <span class="text-[14px] font-bold">Credit / Debit Card</span>
                            <span class="text-[14px]">Safe money transfer using your bank accou k account. We support
                                Mastercard tercard,
                                Visa, Discover and Stripe.</span>
                        </div>
                    </div>
                </label>
                <label class="flex flex-col" for="paymothod3">
                    <div class="flex flex-row items-start gap-[8px]">
                        <input id="paymothod3" name="paymothod" value=""
                            class="mt-[5px] text-[theme(colors.Theme-Primart)] checked:outline-none checked:outline-[theme(colors.Theme-Primart)] focus:shadow-none"
                            type="radio">
                        <div class="flex flex-col">
                            <span class="text-[14px] font-bold">Pay with Payoneer</span>
                            <span class="text-[14px]">You will be redirected to Payoneer website to complete your
                                purchase
                                securely.</span>
                        </div>
                    </div>
                </label>
                <label class="flex flex-col" for="paymothod4">
                    <div class="flex flex-row items-start gap-[8px]">
                        <input id="paymothod4" name="paymothod" value=""
                            class="mt-[5px] text-[theme(colors.Theme-Primart)] checked:outline-none checked:outline-[theme(colors.Theme-Primart)] focus:shadow-none"
                            type="radio">
                        <div class="flex flex-col">
                            <span class="text-[14px] font-bold">Cash on Delivery</span>
                            <span class="text-[14px]">Pay with cash when your order is delivered.</span>
                        </div>
                    </div>
                </label>
            </div>
        </div>
        <div class="w-[100%] p-[30px] flex justify-between gap-[25px]">
            <a class="w-[150px] py-[15px] flex justify-center rounded-lg border-2 text-[theme(colors.Theme-Light)] bg-[theme(colors.Theme-Success)] hover:bg-[theme(colors.Theme-Primart)]"
                href="{{route('order.step02')}}">
                上一步
            </a>
            <button
                class="w-[150px] py-[15px] flex justify-center rounded-lg border-2 text-[theme(colors.Theme-Light)] bg-[theme(colors.Theme-Success)] hover:bg-[theme(colors.Theme-Primart)]">完成</button>
        </div>
    </section>
</form>

@endsection

@section('js')

@endsection
