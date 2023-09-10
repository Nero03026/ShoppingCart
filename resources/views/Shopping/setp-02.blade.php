@extends('template.template-fontend')

@section('main')
<form action="{{route('order.store02')}}" method="POST">
    @csrf
    <section class="w-[100%] flex flex-col">
        <div class="w-[100%] p-[30px] flex flex-col gap-[25px] border-2">
            <div class="flex flex-col gap-[16px]">
                <label class="flex flex-col" for="">
                    <span>FirstName</span>
                    <input id="" name="" type="text" placeholder="First name">
                </label>
                <label class="flex flex-col" for="">
                    <span>LastName</span>
                    <input id="" name="" type="text" placeholder="Last name">
                </label>
                <label class="flex flex-col" for="">
                    <span>配送日期</span>
                    <input id="" name="" type="date" placeholder="年/月/日">
                </label>
                <label class="flex flex-col" for="">
                    <span>AddressLine1</span>
                    <input id="" name="" type="text" placeholder="Address Line 1">
                </label>
                <label class="flex flex-col" for="">
                    <span>AddressLine2</span>
                    <input id="" name="" type="text" placeholder="Address Line 2">
                </label>
                <label class="flex flex-col" for="">
                    <span>AddressCode</span>
                    <input id="" name="" type="text" placeholder="Address code">
                </label>
                <label class="flex flex-col" for="">
                    <span>AddressName</span>
                    <input id="" name="" type="text" placeholder="Address name">
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
<script>

</script>
@endsection
