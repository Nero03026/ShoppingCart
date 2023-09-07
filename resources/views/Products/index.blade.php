@extends('layout.template-fontend')

@section('main')
<div>
    <a href="{{route('products.create')}}">
        <span class="inline-block p-5 bg-amber-400">
            新增產品
        </span>
    </a>
</div>
<div class="flex flex-wrap">
    表格
</div>
@endsection

@section('js')
<script>
    const aaa = document.querySelectorAll('flex');
        console.log(aaa);
</script>
@endsection
