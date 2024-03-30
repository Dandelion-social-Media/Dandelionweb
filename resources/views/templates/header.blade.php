<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/navbar.css')
    <title>Doc</title>
</head>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

<body class="font-Poppins justify-center items-center">
    <div class="relative">
        <div class="absolute inset-0 z-0">
            <img src="/images/bg_login_register.jpg" alt="Background" class="bg-cover w-screen h-screen blur-sm" />
        </div>

        {{-- navbar --}}
        <nav class="justify-between flex px-20 h-32 items-center z-10">
            <div class="font-sans font-semibold text-4xl text-white flex z-10">
                <img class="me-1" src="{{ asset('images/img-logo.png') }}" alt="">
                <h1 class="">Dandelion</h1>
            </div>
            <div>
                <a class="nav" href="#">Home</a>
                <a class="nav" href="/login">Sign In</a>
                <a class="nav" href="/register">Sign Up</a>
            </div>
        </nav>
    </div>
    </div>
    {{-- end navbar --}}
    @yield('login')
    @yield('register')
