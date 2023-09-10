@extends('template.template-fontend')

@section('main')
<section class="w-[100%] flex flex-col">
    <div class="w-[100%] p-[30px] flex flex-col gap-[25px] border-2">
        謝謝您
    </div>
    <div class="w-[100%] p-[30px] flex justify-between gap-[25px]">
        <a href="{{route('index')}}"
            class="w-[150px] py-[15px] flex justify-center rounded-lg border-2 text-[theme(colors.Theme-Light)] bg-[theme(colors.Theme-Success)] hover:bg-[theme(colors.Theme-Primart)]">回首頁</a>
        <button
            class="w-[150px] py-[15px] flex justify-center rounded-lg border-2 text-[theme(colors.Theme-Light)] bg-[theme(colors.Theme-Success)] hover:bg-[theme(colors.Theme-Primart)]">查看訂單</button>
    </div>
</section>

@endsection

@section('js')

@endsection
