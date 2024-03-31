<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/header.css')
    <title>navbar</title>
</head>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

<body>
    <div class="bg-gray-bg font-Poppins font-sans">
        <div class="absolute inset-0 z-10">
            <nav class="flex items-center justify-between px-7 py-5 tracking-[0.5px]">
                <div class="flex">
                    <img class="w-6 me-2" src="{{ asset('/images/img-logo-blue.png') }}" style="color:black"
                        alt="">
                    <h1 class="font-bold text-2xl text-dark-blue">Dandelion</h1>
                </div>
                <div class="">
                    <a class="nav" href="#">Home</a>
                    <a class="nav" href="#">About</a>
                    <a class="nav" href="#">Privacy&Policy</a>
                </div>
                <div class="">
                    <button
                        class="me-2 border border-2 p-2 w-28 h-fit border-dark-blue hover:bg-dark-blue hover:text-white">sign
                        in</button>
                    <button
                        class="me-2 border border-2 p-2 w-28 h-fit bg-dark-blue text-white hover:bg-transparent hover:text-dark-blue hover:border-dark-blue">sign
                        up</button>
                </div>
            </nav>
        </div>
    </div>
    @yield('home')
