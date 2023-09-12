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
    <nav>
        <div class="w-[100%] bg-[theme(colors.Gary-200)] text-[theme(colors.Gary-600)]">
            <div class="w-[100%] max-w-screen-xl m-auto py-1">
                <span>Super Value Deals - Save more with coupons</span>
                <div></div>
            </div>
        </div>
        <div class="w-[100%] py-5 flex flex-col gap-5 border-2">
            <div class="w-[100%] max-w-screen-xl mx-auto py-1 flex items-center gap-[16px]">
                <img src="{{asset('image/freshcart-logo.svg')}}" alt="">
                <form class="mr-auto" action="" method="post">
                    <label for="">
                        <input type="text">
                    </label>
                    <label for="">
                        <button>location</button>
                    </label>
                </form>
                <div class="flex items-center gap-[16px] ">
                    <a href="" class="flex items-center"><i class="fa-regular fa-heart text-[20px]"></i></a>
                    <a href="" class="flex items-center"><i class="fa-regular fa-user text-[20px]"></i></a>
                    <a href="" class="flex items-center"><i class="fa-regular fa-cart-shopping text-[20px]"></i></a>
                </div>
            </div>
            <div class="w-[100%] max-w-screen-xl mx-auto py-1">
                <ul class="flex gap-x-[20px]">
                    <li class="flex items-center">
                        <div
                            class="cursor-pointer px-10 py-3 rounded-md bg-[theme(colors.Theme-Primart)] text-[theme(colors.Theme-Light)] hover:bg-[theme(colors.Theme-Success)]">
                            All
                            Departments</div>
                        <ul>
                            <li></li>
                        </ul>
                    </li>
                    <li class="flex items-center">
                        <div class="cursor-pointer hover:text-[theme(colors.Theme-Primart)]">Home</div>
                        <ul>
                            <li></li>
                        </ul>
                    </li>
                    <li class="flex items-center">
                        <div class="cursor-pointer hover:text-[theme(colors.Theme-Primart)]">Shop</div>
                        <ul>
                            <li></li>
                        </ul>
                    </li>
                    <li class="flex items-center">
                        <div class="cursor-pointer hover:text-[theme(colors.Theme-Primart)]">Store</div>
                        <ul>
                            <li></li>
                        </ul>
                    </li>
                    <li class="flex items-center">
                        <div class="cursor-pointer hover:text-[theme(colors.Theme-Primart)]">Mega meru</div>
                        <ul>
                            <li></li>
                        </ul>
                    </li>
                    <li class="flex items-center">
                        <div class="cursor-pointer hover:text-[theme(colors.Theme-Primart)]">Pages</div>
                        <ul>
                            <li></li>
                        </ul>
                    </li>
                    <li class="flex items-center">
                        <div class="cursor-pointer hover:text-[theme(colors.Theme-Primart)]">Account</div>
                        <ul>
                            <li></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        @yield('main')

    </section>
    @yield('js')
</body>

</html>
