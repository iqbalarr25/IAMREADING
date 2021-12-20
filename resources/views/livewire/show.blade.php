<div>
    @include('layouts.navigation')
    <div class="mx-24 mt-10">
        <div class="grid grid-cols-3">
            <div class="mx-auto">
                <img src="{{ asset('img/jujutsu.png') }}" alt="" class="w-80 shadow-2xl">
                <div class="my-16 bg-white h-auto rounded rounded-xl shadow-xl">
                    <div class="p-6">
                        <div class="text-gray-400 text-xl font-medium">
                            Berapa Banyak ?
                        </div>
                        <div class="font-medium">
                            Total Items
                        </div>
                        <div class="flex">
                            <button wire:click="minus" class="my-auto">
                                <img src="{{ asset('img/minus.png') }}" alt="">
                            </button>
                            <div class="mt-1 mx-3">
                                {{$jumlahBeli}}
                            </div>
                            <button wire:click="plus" class="my-auto">
                                <img src="{{ asset('img/plus.png') }}" alt="">
                            </button>
                            <div class="mt-1 ml-3 text-gray-400 font-medium">
                                Stock {{$buku->stock}}
                            </div>
                        </div>
                        <hr class="border-gray-400 my-2">
                        <div class="flex justify-between">
                            <div class="text-gray-400 font-medium">
                                Total
                            </div>
                            <div class="font-bold text-orange text-xl">
                                @if($buku->diskon == null)
                                    Rp.{{number_format(($buku->harga  * $jumlahBeli),0,",",".")}}
                                @else
                                    Rp.{{number_format(($buku->diskon  * $jumlahBeli),0,",",".")}}
                                @endif
                            </div>
                        </div>
                        <div>
                            <button class="my-3 h-12 w-full border-2 rounded-3xl font-medium text-primary-blue flex items-center">
                                <div class="mx-auto flex justify-between">
                                    <img src="{{ asset('img/store.png') }}" alt="" class=" w-6 my-auto mr-1">
                                    <div class="my-auto">
                                        Add to Cart
                                    </div>
                                </div>
                            </button>
                            <button class=" h-12 w-full rounded-3xl font-medium button-blue text-white">
                                <div class="my-auto mx-auto">
                                    Buy Now
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
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
                <div class="font-semibold text-4xl my-10">
                    Detail Information
                </div>
                <div class=" grid grid-cols-2">
                    <div>
                        <div class="text-xl font-base">
                            Total Pages
                        </div>
                        <div class="text-xl font-semibold mb-8">
                            {{$buku->halaman}}
                        </div>
                        <div class="text-xl font-base">
                            Published Date
                        </div>
                        <div class="text-xl font-semibold mb-8">
                            {{$buku->halaman}}
                        </div>
                        <div class="text-xl font-base">
                            ISBN
                        </div>
                        <div class="text-xl font-semibold mb-8">
                            {{$buku->ISBN}}
                        </div>
                        <div class="text-xl font-base">
                            Language
                        </div>
                        <div class="text-xl font-semibold mb-8">
                            {{$buku->bahasa}}
                        </div>
                    </div>
                    <div>
                        <div class="text-xl font-base">
                            Publisher
                        </div>
                        <div class="text-xl font-semibold mb-8">
                            {{$buku->penerbit}}
                        </div>
                        <div class="text-xl font-base">
                            Weight
                        </div>
                        <div class="text-xl font-semibold mb-8">
                            {{$buku->berat}} kg
                        </div>
                        <div class="text-xl font-base">
                            Width
                        </div>
                        <div class="text-xl font-semibold mb-8">
                            {{$buku->lebar}} cm
                        </div>
                        <div class="text-xl font-base">
                            Length
                        </div>
                        <div class="text-xl font-semibold mb-8">
                            {{$buku->tinggi}} cm
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-10">
            <div class="text-4xl font-bold">
                Other Similar {{$buku->jenis}}
            </div>
            <div class="flex grid grid-cols-5 gap-5 my-12">
                @foreach($similarBukus as $similarBuku)
                    <div class="w-full max-h-full rounded overflow-hidden shadow-lg relative flex flex-col shadow-2xl hover:bg-gray-100">
                        <a class="p-4" href="/show/{{$similarBuku->id}}/">
                            <img class="object-cover h-100 w-full hover:opacity-90" src="{{ asset('img/'.$similarBuku->image) }}" alt="Sunset in the mountains">
                            <div class="pt-3 h-full">
                                <div class="text-lg">
                                    {{$similarBuku->penulis}}
                                </div>
                                <hr class="border-gray-400 my-2">
                                <p class="font-semibold my-1 text-lg">
                                    {{$similarBuku->judul}}
                                </p>
                                <div class="flex">
                                    <p class="text-lg font-bold @if($similarBuku->diskon != null) text-gray-300 line-through @else text-orange @endif">
                                        Rp.{{number_format($similarBuku->harga,0,",",".")}}
                                    </p>
                                    @if($similarBuku->diskon != null)
                                    <p class="text-orange text-lg font-bold mx-3">
                                        Rp.{{number_format($similarBuku->diskon,0,",",".")}}
                                    </p>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>  
                @endforeach
            </div>
        </div>
    </div>
</div>