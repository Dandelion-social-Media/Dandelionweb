@extends('templates.header')
<title>register</title>
@section('register')
    <div class="relative ">
        {{-- container form login --}}
        <div class="container w-1/4 pb-24  pt-12 bg-lightblue bg-opacity-50 m-auto p-10 rounded">
            <h1 class="font-sans text-center
font-bold text-white text-5xl pb-16 ">
                Sign Up
            </h1>
            {{-- form login --}}
            <form class="min-w-24 " action="#">
                <label for="email" class="text-white font-Poppinns font-semibold block my-2 ">Email</label>
                <input
                    class="border rounded w-full h-12 p-3 font-light text-sm focus:outline-none focus:ring-0 focus:border-blue-400"
                    type="text" name="email" placeholder="input email">
                <label for="password" class="text-white font-Poppins font-semibold block my-2 ">New Password</label>
                <input
                    class="border rounded w-full h-12 p-3 font-light text-sm focus:outline-none focus:ring-0 focus:border-blue-400 "
                    type="text" name="email" placeholder="input password">
                <label for="password" class="text-white font-Poppins font-semibold block my-2 ">Confirm New
                    Password</label>
                <input
                    class="border rounded w-full h-12 p-3 font-light text-sm focus:outline-none focus:ring-0 focus:border-blue-400 "
                    type="text" name="email" placeholder="input confirm new password">
                <div class="pt-14">
                    <button
                        class="border-2 h-12 text-center font-semibold text-base text-white bg-transparent w-full p-2 rounded-sm hover:bg-white hover:text-middleblue">
                        Register
                    </button>
                </div>

            </form>
            {{-- end form login --}}
        </div>
        {{-- end form container --}}
    </div>
    @include('templates.footer')
@endsection
