<div>
    @include('layouts.carousel')
    <div class="mx-auto my-20 max-w-2xl">
        <a href="" class="text-2xl font-semibold px-9 py-1 hover:bg-gray-300">All</a>
        <a href="" class="text-2xl font-semibold px-9 py-1 hover:bg-gray-300">Discount</a>
        <a href="" class="text-2xl font-semibold px-9 py-1 hover:bg-gray-300">Import</a>
        <a href="" class="text-2xl font-semibold px-9 py-1 hover:bg-gray-300">Recommended</a>
    </div>
    <div class="mx-24">
        <div class="my-16">
            <span class="text-4xl font-bold">
                Recommended
            </span>
        </div>
        <div class="flex grid grid-cols-5 gap-5 ">
            <div class="w-full max-h-full rounded overflow-hidden shadow-lg relative flex flex-col shadow-2xl hover:bg-gray-100">
                <a class="  p-4">
                    <img class="object-cover h-100 w-full hover:opacity-90" src="{{ asset('img/jujutsu.png') }}" alt="Sunset in the mountains">
                    <div class="pt-3 h-full">
                        <div class="text-lg">
                            Gege Akutami
                        </div>
                        <hr class="border-gray-400 my-2">
                        <p class="font-semibold my-1 text-lg">
                            Jujutsu Kaisen 01
                        </p>
                        <p class="object-none object-left-bottom text-orange text-lg font-bold">
                            Rp.32.000
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="my-20"></div>
        <hr class="border-gray-400 my-2">
        <div class="my-16">
            <span class="text-4xl font-bold">
                Import
            </span>
        </div>
        <div class="flex grid grid-cols-5 gap-5 ">
            <div class="w-full max-h-full rounded overflow-hidden shadow-lg relative flex flex-col shadow-2xl hover:bg-gray-100">
                <a class="  p-4">
                    <img class="object-cover h-100 w-full hover:opacity-90" src="{{ asset('img/jujutsu.png') }}" alt="Sunset in the mountains">
                    <div class="pt-3 h-full">
                        <div class="text-lg">
                            Gege Akutami
                        </div>
                        <hr class="border-gray-400 my-2">
                        <p class="font-semibold my-1 text-lg">
                            Jujutsu Kaisen 01
                        </p>
                        <p class="object-none object-left-bottom text-orange text-lg font-bold">
                            Rp.32.000
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="my-20"></div>
        <hr class="border-gray-400 my-2">
        <div class="my-16">
            <span class="text-4xl font-bold">
                Discount
            </span>
        </div>
        <div class="flex grid grid-cols-5 gap-5 ">
            <div class="w-full max-h-full rounded overflow-hidden shadow-lg relative flex flex-col shadow-2xl hover:bg-gray-100">
                <a class="  p-4">
                    <img class="object-cover h-100 w-full hover:opacity-90" src="{{ asset('img/jujutsu.png') }}" alt="Sunset in the mountains">
                    <div class="pt-3 h-full">
                        <div class="text-lg">
                            Gege Akutami
                        </div>
                        <hr class="border-gray-400 my-2">
                        <p class="font-semibold my-1 text-lg">
                            Jujutsu Kaisen 01
                        </p>
                        <p class="object-none object-left-bottom text-orange text-lg font-bold">
                            Rp.32.000
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="my-20"></div>
    </div>
    <div class="bg-footer max-h-screen">
        <div class="p-24 flex grid grid-cols-4 mx-auto">
            <div>
                <img src="{{ asset('img/logo-white.png') }}" alt="">
                <div class="text-white font-semibold text-3xl my-6">
                    IAM READING
                </div>
                <div class="text-footer font-base text-xl">
                    Best bookstore to best
                    <br>
                    comics or novel
                </div>
            </div>
            <div>
                <div class="text-white font-semibold text-2xl my-6">
                    About
                </div>
                <a href="#" class=" text-blue-300 font-base text-xl my-12">
                    Our Story
                </a><br>
                <a href="#" class=" text-blue-300 font-base text-xl">
                    About
                </a><br>
                <a href="#" class=" text-blue-300 font-base text-xl">
                    Empower Us
                </a><br>
                <a href="#" class=" text-blue-300 font-base text-xl">
                    How It Works
                </a><br>
                <a href="#" class=" text-blue-300 font-base text-xl">
                    Blog
                </a>
            </div>
            <div>
                <div class="text-white font-semibold text-2xl my-6">
                    Learning
                </div>
                <a href="#" class=" text-blue-300 font-base text-xl my-12">
                    Get App
                </a><br>
                <a href="#" class=" text-blue-300 font-base text-xl">
                    Testimonial
                </a><br>
                <a href="#" class=" text-blue-300 font-base text-xl">
                    FAQ
                </a><br>
                <a href="#" class=" text-blue-300 font-base text-xl">
                    Contact
                </a>
            </div>
            <div>
                <div class="text-white font-semibold text-2xl my-6">
                    More
                </div>
                <a href="#" class=" text-blue-300 font-base text-xl my-12">
                    Articles
                </a>
            </div>
        </div>
        <div class="bg-black max-h-screen">
            <div class="flex grid grid-cols-2 p-8 mx-14">
                <div class=" text-gray-400 text-xl my-auto">
                    ©2021 IAM TEAM  Telkom University
                </div>
                <div class="flex flex-row-reverse gap-7">
                    <a href="#">
                        <img src="{{ asset('img/whatsapp.png') }}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{ asset('img/facebook.png') }}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{ asset('img/line.png') }}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{ asset('img/instagram.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>