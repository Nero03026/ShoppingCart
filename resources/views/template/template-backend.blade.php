<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="w-[calc(100%-280px)] fixed top-0 right-0 p-5">
        <div class="flex justify-between px-4">
            <div></div>
            <div class="flex gap-[16px]">
                <div class="">
                    <div class="rounded-full overflow-hidden hover:bg-[theme(colors.Gary-100)]">
                        <i class="w-[40px] h-[40px] flex justify-center items-center fa-thin fa-bell"></i>
                    </div>
                    <div></div>
                </div>
                <div class="">
                    <div class="rounded-full overflow-hidden">
                        <img class="w-[40px] h-[40px] object-cover" src="{{asset('upload/user_photos/Akita-dog.jpg')}}"
                            alt="">
                    </div>
                    <div></div>
                </div>
            </div>
        </div>
    </nav>
    <div class="flex flex-row">
        <div class="w-[280px] min-h-[100vh] border-r-2">
            <div class="p-5">
                <img class="w-[160px]" src="{{asset('image/freshcart-logo.svg')}}" alt="">
            </div>
            <ul class="w-[280px] px-5">
                <li>
                    <ul>
                        <li>
                            <a class="bg-[theme(colors.Light-Primary)] px-4 py-4 rounded-md flex items-center gap-[8px] hover:bg-[theme(colors.Gary-200)]"
                                href="http://">
                                <i class="fa-thin fa-house"></i>
                                <span class="">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li>
                            <div class="px-4 pt-6 pb-2 text-[12px]">
                                <span>Store Managements</span>
                            </div>
                        </li>
                        <li>
                            <a class=" px-4 py-4 rounded-md flex items-center gap-[8px] hover:bg-[theme(colors.Gary-200)]"
                                href="{{route('products.index')}}">
                                <i class="fa-thin fa-cart-shopping"></i>
                                <span class="">Products</span>
                            </a>
                        </li>
                        <li>
                            <a class=" px-4 py-4 rounded-md flex items-center gap-[8px] hover:bg-[theme(colors.Gary-200)]"
                                href="http://">
                                <i class="fa-thin fa-list-check"></i>
                                <span class="">Categories</span>
                            </a>
                        </li>
                        <li>
                            <a class=" px-4 py-4 rounded-md flex items-center gap-[8px] hover:bg-[theme(colors.Gary-200)]"
                                href="http://">
                                <i class="fa-thin fa-bag-shopping"></i>
                                <span class="">Orders</span>
                            </a>
                        </li>
                        <li>
                            <a class=" px-4 py-4 rounded-md flex items-center gap-[8px] hover:bg-[theme(colors.Gary-200)]"
                                href="http://">
                                <i class="fa-thin fa-shop"></i>
                                <span class="">Sellers/Vendors</span>
                            </a>
                        </li>
                        <li>
                            <a class=" px-4 py-4 rounded-md flex items-center gap-[8px] hover:bg-[theme(colors.Gary-200)]"
                                href="http://">
                                <i class="fa-thin fa-users"></i>
                                <span class="">Customers</span>
                            </a>
                        </li>
                        <li>
                            <a class=" px-4 py-4 rounded-md flex items-center gap-[8px] hover:bg-[theme(colors.Gary-200)]"
                                href="http://">
                                <i class="fa-thin fa-star"></i>
                                <span class="">Reviews</span>
                            </a>
                        </li>
                        <li>
                            <a class=" px-4 py-4 rounded-md flex items-center gap-[8px] hover:bg-[theme(colors.Gary-200)]"
                                href="http://">
                                <i class="fa-regular fa-house "></i>
                                <span class="">Menu Level</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <section class="w-[calc(100%-280px)] min-h-[100vh] px-4 py-[100px]">
            @yield('main')
        </section>
    </div>
    
    <script src="{{asset('js/cdn.jsdelivr.net_npm_sweetalert2@11')}}"></script>
    @yield('js')
</body>

</html>
