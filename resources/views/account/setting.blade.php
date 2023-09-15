@extends('template.template-fontend')

@section('main')
<div class="w-[100%] max-w-7xl mx-auto px-5 flex flex-row">
    <div class="w-[280px] min-h-[100vh] border-r-2">
        @include('layouts.account')
    </div>
    <div class="w-[calc(100%-280px)]">
        <div class="p-10 text-[36px]">Account Setting</div>
        <div class="pl-10">
            <div class="mb-5">Account details</div>
            <form action="">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <label class="flex flex-col" for="name">
                        <span>name</span>
                        <input id="name" class="rounded-md" name="name" type="text">
                    </label>
                    <label class="flex flex-col" for="phone">
                        <span>phone</span>
                        <input id="phone" class="rounded-md" name="phone" type="tel">
                    </label>
                    <label class="flex flex-col" for="email">
                        <span>email</span>
                        <input id="email" class="rounded-md" name="email" type="email">
                    </label>
                </div>
                <button
                    class="px-5 py-3 rounded-md bg-[theme(colors.Theme-Primart)] text-[theme(colors.Theme-Light)]">Save
                    Details</button>
            </form>
            <div class="pb-20 border-b-2"></div>
        </div>
        <div class="pl-10 py-20">
            <div class="mb-5">Password</div>
            <form action="">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <label class="flex flex-col" for="newpassword">
                        <span>New Password</span>
                        <input id="newpassword" class="rounded-md" name="newpassword" type="password">
                    </label>
                    <label class="flex flex-col" for="currentpassword">
                        <span>Current Password</span>
                        <input id="currentpassword" class="rounded-md" name="currentpassword" type="password">
                    </label>
                </div>
                <div class="mb-5">Can’t remember your current password?
                    <a class="text-[theme(colors.Theme-Primart)]" href="http://">Reset your password.</a>
                </div>
                <button
                    class="px-5 py-3 rounded-md bg-[theme(colors.Theme-Primart)] text-[theme(colors.Theme-Light)]">Save
                    Password</button>
            </form>
        </div>
        <div></div>
    </div>
</div>
@endsection

@section('js')

@endsection
