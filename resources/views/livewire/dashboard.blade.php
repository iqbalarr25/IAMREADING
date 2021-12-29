<div>
    <livewire:navigation /> 
    @include('layouts.carousel')
    <div class="flex grid grid-cols-2">
            <button wire:click="novelpage">
                <div class="text-center text-white p-8 text-5xl font-bold button-blue">
                    Novel
                </div>
            </button>
            <button wire:click="komikpage">
                <div class="text-center text-white p-8 text-5xl font-bold button-orange">
                    Comics
                </div>
            </button>
        </div>
    <div class="mx-auto my-20 max-w-2xl">
        <button wire:click="semua" class="text-2xl font-semibold px-9 py-3 @if($reclist && $newlist && $disclist) bg-gray-300 @endif hover:bg-gray-300">All</button>
        <button wire:click="rekomendasi" class="text-2xl font-semibold px-9 py-3 @if($reclist && !$newlist && !$disclist) bg-gray-300 @endif hover:bg-gray-300">Recommended</button>
        <button wire:click="baru" class="text-2xl font-semibold px-9 py-3 @if(!$reclist && $newlist && !$disclist) bg-gray-300 @endif hover:bg-gray-300">New</button>
        <button wire:click="diskon" class="text-2xl font-semibold px-9 py-3 @if(!$reclist && !$newlist && $disclist) bg-gray-300 @endif hover:bg-gray-300">Discount</button>
    </div>
    <div class="mx-24">
        @if($reclist)
        <div class="py-16">
            <span class="text-4xl font-bold">
                Recommended
            </span>
        </div>
        <div class="flex grid grid-cols-5 gap-5">
            @foreach($bukusrec as $bukurec)
                <div class="w-full max-h-full rounded overflow-hidden shadow-lg relative flex flex-col shadow-2xl hover:bg-gray-100">
                    <a class="p-4" href="/show/{{$bukurec->id}}/">
                        <img class="object-cover h-100 w-full hover:opacity-90" src="{{ asset('cover/'.$bukurec->image) }}" alt="Sunset in the mountains">
                        <div class="pt-3 h-full">
                            <div class="text-lg">
                                {{$bukurec->penulis}}
                            </div>
                            <hr class="border-gray-400 my-2">
                            <p class="font-semibold my-1 text-lg">
                                {{$bukurec->judul}}
                            </p>
                            <div class="flex">
                                <p class="text-lg font-bold @if($bukurec->diskon != null) text-gray-300 line-through @else text-orange @endif">
                                    Rp.{{number_format($bukurec->harga,0,",",".")}}
                                </p>
                                @if($bukurec->diskon != null)
                                <p class="text-orange text-lg font-bold mx-3">
                                    Rp.{{number_format($bukurec->diskon,0,",",".")}}
                                </p>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="py-14"></div>
        @if($reclist && $newlist && $disclist)
        <hr class="border-gray-400 my-2">
        @endif
        @endif
        @if($newlist)
        <div class="py-14">
            <span class="text-4xl font-bold">
                New
            </span>
        </div>
        <div class="flex grid grid-cols-5 gap-5 ">
            @foreach($bukusnew as $bukunew)
            <div class="w-full max-h-full rounded overflow-hidden shadow-lg relative flex flex-col shadow-2xl hover:bg-gray-100">
                <a class="p-4" href="/show/{{$bukunew->id}}/">
                    <img class="object-cover h-100 w-full hover:opacity-90" src="{{ asset('cover/'.$bukunew->image) }}" alt="Sunset in the mountains">
                    <div class="pt-3 h-full">
                        <div class="text-lg">
                            {{$bukunew->penulis}}
                        </div>
                        <hr class="border-gray-400 my-2">
                        <p class="font-semibold my-1 text-lg">
                            {{$bukunew->judul}}
                        </p>
                        <div class="flex">
                            <p class="text-lg font-bold @if($bukunew->diskon != null) text-gray-300 line-through @else text-orange @endif">
                                Rp.{{number_format($bukunew->harga,0,",",".")}}
                            </p>
                            @if($bukunew->diskon != null)
                            <p class="text-orange text-lg font-bold mx-3">
                                Rp.{{number_format($bukunew->diskon,0,",",".")}}
                            </p>
                            @endif
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="py-14"></div>
        @if($reclist && $newlist && $disclist)
        <hr class="border-gray-400 my-2">
        @endif
        @endif
        @if($disclist)
        <div class="py-14">
            <span class="text-4xl font-bold">
                Discount
            </span>
        </div>
        <div class="flex grid grid-cols-5 gap-5 ">
            @foreach($bukusdisc as $bukudisc)
            <div class="w-full max-h-full rounded overflow-hidden shadow-lg relative flex flex-col shadow-2xl hover:bg-gray-100">
                <a class="p-4" href="/show/{{$bukudisc->id}}/">
                    <img class="object-cover h-100 w-full hover:opacity-90" src="{{ asset('cover/'.$bukudisc->image) }}" alt="Sunset in the mountains">
                    <div class="pt-3 h-full">
                        <div class="text-lg">
                            {{$bukudisc->penulis}}
                        </div>
                        <hr class="border-gray-400 my-2">
                        <p class="font-semibold my-1 text-lg">
                            {{$bukudisc->judul}}
                        </p>
                        <div class="flex">
                            <p class="text-lg font-bold @if($bukudisc->diskon != null) text-gray-300 line-through @else text-orange @endif">
                                Rp.{{number_format($bukudisc->harga,0,",",".")}}
                            </p>
                            @if($bukudisc->diskon != null)
                            <p class="text-orange text-lg font-bold mx-3">
                                Rp.{{number_format($bukudisc->diskon,0,",",".")}}
                            </p>
                            @endif
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="py-14"></div>
        @endif
    </div>
</div>