@extends('template.template-fontend')

@section('main')
<form action="{{route('order.store02')}}" method="POST">
    @csrf
    <section class="w-[100%] flex flex-col">
        <div class="w-[100%] p-[30px] flex flex-col gap-[25px] border-2">
            <div class="flex flex-col gap-[16px]">
                <label class="flex flex-col" for="first_name">
                    <span>FirstName</span>
                    <input id="first_name" name="first_name" type="text" placeholder="First name"
                        value="{{old('first_name','')}}">
                </label>
                <label class="flex flex-col" for="last_name">
                    <span>LastName</span>
                    <input id="last_name" name="last_name" type="text" placeholder="Last name"
                        value="{{old('last_name','')}}">
                </label>
                <label class="flex flex-col" for="delivery_date">
                    <span>配送日期</span>
                    <input id="delivery_date" name="delivery_date" type="date" placeholder="年/月/日"
                        value="{{old('delivery_date','')}}">
                </label>
                <label class="flex flex-col" for="address_line1">
                    <span>AddressLine1</span>
                    <input id="address_line1" name="address_line1" type="text" placeholder="Address Line 1"
                        value="{{old('address_line1','')}}">
                </label>
                <label class="flex flex-col" for="address_line2">
                    <span>AddressLine2</span>
                    <input id="address_line2" name="address_line2" type="text" placeholder="Address Line 2"
                        value="{{old('address_line2','')}}">
                </label>
                <label class="flex flex-col" for="address_code">
                    <span>AddressCode</span>
                    <input id="address_code" name="address_code" type="text" placeholder="Address code"
                        value="{{old('address_code','')}}">
                </label>
                <label class="flex flex-col" for="address_name">
                    <span>AddressName</span>
                    <input id="address_name" name="address_name" type="text" placeholder="Address name"
                        value="{{old('address_name','')}}">
                </label>
                <label class="flex flex-col" for="order_remark">
                    <span>Remark</span>
                    <input id="order_remark" name="order_remark" type="text" placeholder="Address name"
                        value="{{old('order_remark','')}}">
                </label>
            </div>



        </div>
        <div class="w-[100%] p-[30px] flex justify-between gap-[25px]">
            <a href="{{route('order.step01')}}"
                class="w-[150px] py-[15px] flex justify-center rounded-lg border-2 text-[theme(colors.Theme-Light)] bg-[theme(colors.Theme-Success)] hover:bg-[theme(colors.Theme-Primart)]">
                上一步
            </a>
            <button
                class="w-[150px] py-[15px] flex justify-center rounded-lg border-2 text-[theme(colors.Theme-Light)] bg-[theme(colors.Theme-Success)] hover:bg-[theme(colors.Theme-Primart)]"
                type="submit">下一步</button>
        </div>
    </section>
</form>
@endsection

@section('js')
@if ($errors->count()>0)
<script>
    Swal.fire(`{{$errors->first()}}`)
</script>
@endif

@endsection
