<ul class="w-[100%] pt-10 pr-10 flex flex-col gap-1">
    <li class=" cursor-pointer">
        <a href="{{route('account.index')}}">
            <div @if (Route::currentRouteName()=='account.index' )
                class="py-3 px-4 rounded-md bg-[theme(colors.Theme-Dark)] text-[theme(colors.Theme-Light)]" @else
                class="py-3 px-4 rounded-md hover:bg-[theme(colors.Theme-Light)]" @endif>
                <img src="" alt="">
                <span>{{Auth::user()->name}}</span>
            </div>
        </a>
    </li>

    <li class=" cursor-pointer">
        <a href="{{route('account.order')}}">
            <div @if (Route::currentRouteName()=='account.order' )
                class="py-3 px-4 rounded-md bg-[theme(colors.Theme-Dark)] text-[theme(colors.Theme-Light)]" @else
                class="py-3 px-4 rounded-md hover:bg-[theme(colors.Theme-Light)]" @endif>
                <img src="" alt="">
                <span>Order</span>
            </div>
        </a>
    </li>
    <li class=" cursor-pointer">
        <a href="{{route('account.setting')}}">
            <div @if (Route::currentRouteName()=='account.setting' )
                class="py-3 px-4 rounded-md bg-[theme(colors.Theme-Dark)] text-[theme(colors.Theme-Light)]" @else
                class="py-3 px-4 rounded-md hover:bg-[theme(colors.Theme-Light)]" @endif>
                <img src="" alt="">
                <span>Settings</span>
            </div>
        </a>
    </li>
    <li class=" cursor-pointer">
        <a href="{{route('account.address')}}">
            <div @if (Route::currentRouteName()=='account.address' )
                class="py-3 px-4 rounded-md bg-[theme(colors.Theme-Dark)] text-[theme(colors.Theme-Light)]" @else
                class="py-3 px-4 rounded-md hover:bg-[theme(colors.Theme-Light)]" @endif>
                <img src="" alt="">
                <span>Address</span>
            </div>
        </a>
    </li>
    <li class=" cursor-pointer">
        <a href="{{route('account.pay')}}">
            <div @if (Route::currentRouteName()=='account.pay' )
                class="py-3 px-4 rounded-md bg-[theme(colors.Theme-Dark)] text-[theme(colors.Theme-Light)]" @else
                class="py-3 px-4 rounded-md hover:bg-[theme(colors.Theme-Light)]" @endif>
                <img src="" alt="">
                <span>Payment Mothod</span>
            </div>
        </a>
    </li>
    <li class=" cursor-pointer">
        <a href="{{route('account.notification')}}">
            <div @if (Route::currentRouteName()=='account.notification' )
                class="py-3 px-4 rounded-md bg-[theme(colors.Theme-Dark)] text-[theme(colors.Theme-Light)]" @else
                class="py-3 px-4 rounded-md hover:bg-[theme(colors.Theme-Light)]" @endif>
                <img src="" alt="">
                <span>Notification</span>
            </div>
        </a>
    </li>
</ul>
