@extends('template.template-fontend')

@section('main')
<div class="w-[100%] max-w-7xl mx-auto px-5 flex flex-row">
    <div class="w-[280px] min-h-[100vh] border-r-2">
        @include('layouts.account')
    </div>
    <div class="w-[calc(100%-280px)]">
        <div class="p-10 text-[128px]">
            歡迎
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
