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
        <a href="/" class="my-12 text-xl font-semibold flex flex-row-reverse">
            More
        </a>
    </div>
</div>