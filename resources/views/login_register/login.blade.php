    @extends('templates.header')
    <title>login</title>
    @section('login')
        <div class="relative ">
            {{-- container form login --}}
            <div class="container w-1/4 pb-24  pt-12 bg-lightblue bg-opacity-50 m-auto p-10 rounded">
                <h1 class="font-sans text-center
        font-bold text-white text-5xl pb-16 ">
                    Sign In
                </h1>
                {{-- form login --}}
                <form class="min-w-24 pb-2" action="#">
                    <label for="email" class="text-white font-Poppinns font-semibold block my-2 ">Email</label>
                    <input
                        class="border rounded w-full h-12 p-3 font-light text-sm focus:outline-none focus:ring-0 focus:border-blue-400"
                        type="text" name="email" placeholder="input email">
                    <label for="password" class="text-white font-Poppins font-semibold block my-2 ">Password</label>
                    <input
                        class="border rounded w-full h-12 p-3 font-light text-sm focus:outline-none focus:ring-0 focus:border-blue-400 "
                        type="text" name="email" placeholder="input password">
                    <div class="text-end mt-2">
                        <a class="text-white font-semibold text-sm" href="#">Forgot password?</a>
                    </div>
                    <div class="mt-5">
                        <button
                            class="border-2 h-12 text-center font-semibold text-base text-white bg-transparent w-full p-2 rounded-sm hover:bg-white hover:text-middleblue">
                            Login
                        </button>
                    </div>
                    <div class="flex justify-center p-2">
                        <img class="" src="/images/line.png" alt="">
                    </div>

                    <div class="">
                        <button
                            class=" flex h-12 text-center justify-center font-semibold text-base text-white bg-middleblue w-full p-2 rounded-sm hover:bg-white hover:text-sky-800">
                            <img class="h-5 w-5 me-4" src="/images/logo-google.png" alt="logo-google">Login with
                            Google
                        </button>
                    </div>
                </form>
                {{-- end form login --}}
            </div>
            {{-- end form container --}}
        </div>
        @include('templates.footer')
    @endsection
