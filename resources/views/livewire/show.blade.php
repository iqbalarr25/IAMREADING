<div>
    @include('layouts.navigation')
    <div class="grid grid-cols-3 mx-24 my-10">
        <div>
            <img src="{{ asset('img/jujutsu.png') }}" alt="" class="w-80 ml-16 shadow-2xl">
        </div>
        <div class="mt-4 col-start-2 col-end-4 ml-28">
            <div class="flex justify-between">
                <div class=" text-5xl font-bold my-auto">
                    {{$buku->judul}}
                </div>
                <button class="bg-jenis text-orange text-center w-32 h-12 cursor-default text-2xl font-semibold rounded-md">
                    {{$buku->jenis}}
                </button>
            </div>
            <div class="flex  my-5">
                <div class="font-bold @if($buku->diskon != null) text-gray-300 line-through @else text-orange @endif text-4xl">
                    Rp.{{number_format($buku->harga,0,",",".")}}
                </div>
                @if($buku->diskon != null)
                    <p class="font-bold text-orange text-4xl mx-3">
                        Rp.{{number_format($buku->diskon,0,",",".")}}
                    </p>
                @endif
            </div>
            <hr class="border-gray-400 my-2">
            <div class="font-semibold text-4xl my-10">
                Description
            </div>
            <div class="text-2xl font-base mb-10 leading-loose">
                {{$buku->deskripsi}}
            </div>
            <hr class="border-gray-400 my-2">
        </div>
    </div>
</div>