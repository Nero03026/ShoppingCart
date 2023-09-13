<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex">
        @foreach ($product as $item)
        <div class="flex flex-col">
            <div>{{$item->product_name}}</div>
            <form action="{{route('cart.add')}}" method="POST" class="flex">
                @csrf
                <input type="text" name="product" value="{{$item->id}}" hidden>
                <button type="submit">加入購物車</button>
            </form>
        </div>
        @endforeach
    </div>

</body>

</html>
