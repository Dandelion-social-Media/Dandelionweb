@extends('templates.header')
<title>Home</title>
@section('home')
    <div class="flex h-screen 1-tampilan-nav px-20 justify-between items-center ">
        <div class=" text-dark-blue w-2/4 font-Poppins font-semibold">
            <h1 class="text-4xl py-5">Let’s try our Social Media</h1>
            <div class="flex align-middle items-center">
                <p class="me-3 font-Poppins align-middle text-xl font-semibold ">With</p>
                <div
                    class=" flex box-decoration-slice bg-gradient-to-r from-dark-blue from-30%  to-medium-blue to-70% text-white font-Poppins text-4xl py-1.5 px-6 rounded-sm items-center">
                    <img class="me-2 h-16" src="{{ '/images/img-logo.png' }}"alt="">
                    <p class=" font-Poppins font-sans ">Dandelion</p>
                </div>
            </div>
            <p class="mt-4 font-thin text-xl text-pretty">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                cupiditate doloremque provident nam atque necessitatibus saepe eius itaque quasi, veniam aperiam quisquam,
                officia quae suscipit voluptates quod illum molestiae incidunt alias dignissimos enim sapiente animi.
                Sapiente omnis consequatur repellat recusandae.</p>
            <button
                class="my-4 border-2 border-dark-blue p-1.5 w-2/6 text-xl font-bold hover:bg-dark-blue hover:text-white duration-300">try
                it now</button>
        </div>
        <img class="w-3/6" src="{{ asset('/images/landing_page.png') }}" alt="">
    </div>
    <div class="h-screen h-1-tampilan px-28 mt-20  font-Poppins font-sans justify-center">
        <h1 class="font-semibold text-5xl justify-center text-center text-dark-blue">Experience a more exciting experience
        </h1>
        <img class="mx-auto mt-4" src="{{ asset('/images/line-2.png') }}" alt="">

        <div class="flex py-4">
            <img class="w-1/2" src="{{ asset('/images/gbr-landing-page2.png') }}" alt="">
            <div class="w-1/2 mt-9 px-10">
                <p class="text-pretty font-normal text-[21px] h-1/3 overflow-y-scroll mb-5">Lorem ipsum, dolor sit amet
                    consectetur adipisicing elit. Asperiores quae ea ratione nostrum consequatur fuga enim, non accusantium
                    quidem, assumenda quo amet iste, similique illo dolor. Velit numquam corrupti dolores eligendi minima
                    aperiam adipisci accusantium natus labore. Dignissimos, dolores quaerat</p>
                <div
                    class="p-8 box-decoration-slice align-middle items-center bg-gradient-to-r from-dark-blue from-30%  to-medium-blue to-70%">
                    <div class="flex mb-5">
                        <p class="font-bold text-white text-5xl">4,0</p>
                        <div class="ms-7">
                            <div class="flex text-gold-rate text-3xl gap-2">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star text-gray-bg'></i>
                            </div>
                            <p class="text-white text-[20px] font-thin">Top of result</p>
                        </div>
                    </div>
                    <p class="text-white font-thin text-pretty text-[21px] ">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.
                        Pariatur nostrum similique cupiditate a sit! Earum a facilis quo velit accusamus.</p>
                </div>
            </div>
        </div>
        <div class="flex">
            <div class="px-10">
                <p class="text-lg">Dekstop</p>
                <div class="flex mt-3">
                    <div
                        class="px-2 rounded-[4px] box-decoration-slice  bg-gradient-to-r from-dark-blue from-30%  to-medium-blue to-70%">
                        <div class="flex align-middle items-center w-[18rem] h-[100px]">
                            <i class='bx bxl-windows text-6xl text-blue-windows'></i>
                            <div class="ms-3 my-2">
                                <p class="text-white text-[14px] font-semibold">Avaible on</p>
                                <p class="text-white text-2xl font-semibold">Windows 10+</p>
                                <p class="text-white text-end  font-medium ms-36">80,3 MB</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="ms-4 px-2 rounded-[4px] box-decoration-slice  bg-gradient-to-r from-dark-blue from-30%  to-medium-blue to-70%">
                        <div class="flex align-middle items-center w-[18rem] h-[100px]">
                            <i class='bx bxl-apple text-6xl text-white'></i>
                            <div class="ms-3 my-2">
                                <p class="text-white text-[14px] font-semibold">Download App for</p>
                                <p class="text-white text-3xl font-semibold">MacOs</p>
                                <p class="text-white text-end  font-medium ms-36">40,9 MB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ms-20">
                <p class="text-lg">Mobile</p>
                <div class="flex mt-3">
                    <div
                        class="w-[100px] h-[100px] p-3 text-center rounded-[4px] box-decoration-slice  bg-gradient-to-r from-dark-blue from-30%  to-medium-blue to-70%">
                        <i class='bx bxl-android  text-7xl text-green-android'></i>
                    </div>
                    <div
                        class="ms-3 w-[100px] h-[100px] p-3 text-center rounded-[4px] box-decoration-slice  bg-gradient-to-r from-dark-blue from-30%  to-medium-blue to-70%">
                        <i class='bx bxl-apple text-7xl text-white'></i>
                    </div>
                </div>
            </div>
            <div class="ms-14 ">
                <div>
                    <p class="text-lg">App Download</p>
                    <p class="mt-8 font-bold text-6xl">8M+</p>
                </div>
            </div>
        </div>
        <div class="h-1-tampilan mt-28 font-Poppins font-sans">
            <div class="px-[34%]">
                <p class="font-semibold text-5xl text-dark-blue">With a Million users
                    around the world...</p>
            </div>
            <div class="flex-nowrap flex-row">
                <div class="flex mt-36 transform rotate-6 ">
                    <div class="me-7 bg-gray-300 w-[25rem] h-[10rem]"></div>
                    <div class="me-7 bg-gray-300 w-[25rem] h-[10rem]"></div>
                    <div class="me-7 bg-gray-300 w-[25rem] h-[10rem]"></div>
                    <div class="me-7 bg-gray-300 w-[25rem] h-[10rem]"></div>
                    <div class="me-7 bg-gray-300 w-[25rem] h-[10rem]"></div>
                </div>
            </div>
            <div class="flex-nowrap flex-row">
                <div class="flex mt-10 transform rotate-6">
                    <div class="me-7 bg-gray-300 w-[25rem] h-[10rem]"></div>
                    <div class="me-7 bg-gray-300 w-[25rem] h-[10rem]"></div>
                    <div class="me-7 bg-gray-300 w-[25rem] h-[10rem]"></div>
                    <div class="me-7 bg-gray-300 w-[25rem] h-[10rem]"></div>
                </div>
            </div>
        </div>
    </div>


    @include('templates.footer')
@endsection
