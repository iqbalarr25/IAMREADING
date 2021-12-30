<div>
    <livewire:navigation/>
    <div class="mx-auto my-5 max-w-2xl">
        <button wire:click="semua" class="text-2xl font-semibold px-9 py-3 @if($alllist) bg-gray-200 @endif hover:bg-gray-200">All</button>
        <button wire:click="rekomendasi" class="text-2xl font-semibold px-9 py-3 @if($reclist && !$newlist && !$disclist) bg-gray-200 @endif hover:bg-gray-200">Recommended</button>
        <button wire:click="baru" class="text-2xl font-semibold px-9 py-3 @if(!$reclist && $newlist && !$disclist) bg-gray-200 @endif hover:bg-gray-200">New</button>
        <button wire:click="diskon" class="text-2xl font-semibold px-9 py-3 @if(!$reclist && !$newlist && $disclist) bg-gray-200 @endif hover:bg-gray-200">Discount</button>
    </div>
    <div class="mx-20 py-12">
        <div class="flex">
            <div>
                <div class="text-4xl font-bold">
                    Categories
                </div>
                <div class="my-5">
                    <div>
                        <button wire:click="allpage" class="w-full text-2xl font-semibold my-3 py-3 @if($allpage) bg-gray-200 @endif hover:bg-gray-200 rounded-full">
                            All
                        </button>
                    </div>
                    <div>
                        <button wire:click="novelpage" class="w-full text-2xl font-semibold my-3 py-3 @if($novelpage) bg-gray-200 @endif hover:bg-gray-200 rounded-full">
                            Novels
                        </button>
                    </div>
                    <div>
                        <button wire:click="komikpage" class="w-full text-2xl font-semibold my-3 py-3 @if($komikpage) bg-gray-200 @endif hover:bg-gray-200 rounded-full">
                            Comics
                        </button>
                    </div>
                </div>
                <div>
                    <img src="{{asset('img/poster1.png')}}" class="mx-auto py-5">
                </div>
                <div>
                    <img src="{{asset('img/poster2.png')}}" class="mx-auto py-5">
                </div>
                <div>
                    <img src="{{asset('img/poster3.png')}}" class="mx-auto py-5">
                </div>
            </div>
            <div class="mx-12">
                <div class="grid grid-cols-3 col-end-5 gap-6">
                @if($alllist)
                    @foreach($bukusall as $searchBuku)
                        <div class="rounded overflow-hidden shadow-lg flex flex-col shadow-2xl hover:bg-gray-100">
                            <a class="p-4" href="/show/{{$searchBuku->id}}/">
                                <img class="object-cover h-100 w-full hover:opacity-90" src="{{ asset('cover/'.$searchBuku->image) }}" alt="Sunset in the mountains">
                                <div class="pt-3 h-full">
                                    <div class="text-lg">
                                        {{$searchBuku->penulis}}
                                    </div>
                                    <hr class="border-gray-400 my-2">
                                    <p class="font-semibold my-1 text-lg">
                                        {{$searchBuku->judul}}
                                    </p>
                                    <div class="flex">
                                        <p class="text-lg font-bold @if($searchBuku->diskon != null) text-gray-300 line-through @else text-orange @endif">
                                            Rp.{{number_format($searchBuku->harga,0,",",".")}}
                                        </p>
                                        @if($searchBuku->diskon != null)
                                        <p class="text-orange text-lg font-bold mx-3">
                                            Rp.{{number_format($searchBuku->diskon,0,",",".")}}
                                        </p>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    {{ $bukusall->links() }}
                @endif
                @if($reclist)
                    @foreach($bukusrec as $searchBuku)
                        <div class="rounded overflow-hidden shadow-lg flex flex-col shadow-2xl hover:bg-gray-100">
                            <a class="p-4" href="/show/{{$searchBuku->id}}/">
                                <img class="object-cover h-100 w-full hover:opacity-90" src="{{ asset('cover/'.$searchBuku->image) }}" alt="Sunset in the mountains">
                                <div class="pt-3 h-full">
                                    <div class="text-lg">
                                        {{$searchBuku->penulis}}
                                    </div>
                                    <hr class="border-gray-400 my-2">
                                    <p class="font-semibold my-1 text-lg">
                                        {{$searchBuku->judul}}
                                    </p>
                                    <div class="flex">
                                        <p class="text-lg font-bold @if($searchBuku->diskon != null) text-gray-300 line-through @else text-orange @endif">
                                            Rp.{{number_format($searchBuku->harga,0,",",".")}}
                                        </p>
                                        @if($searchBuku->diskon != null)
                                        <p class="text-orange text-lg font-bold mx-3">
                                            Rp.{{number_format($searchBuku->diskon,0,",",".")}}
                                        </p>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    {{ $bukusrec->links() }}
                @endif
                @if($newlist)
                    @foreach($bukusnew as $searchBuku)
                        <div class="rounded overflow-hidden shadow-lg flex flex-col shadow-2xl hover:bg-gray-100">
                            <a class="p-4" href="/show/{{$searchBuku->id}}/">
                                <img class="object-cover h-100 w-full hover:opacity-90" src="{{ asset('cover/'.$searchBuku->image) }}" alt="Sunset in the mountains">
                                <div class="pt-3 h-full">
                                    <div class="text-lg">
                                        {{$searchBuku->penulis}}
                                    </div>
                                    <hr class="border-gray-400 my-2">
                                    <p class="font-semibold my-1 text-lg">
                                        {{$searchBuku->judul}}
                                    </p>
                                    <div class="flex">
                                        <p class="text-lg font-bold @if($searchBuku->diskon != null) text-gray-300 line-through @else text-orange @endif">
                                            Rp.{{number_format($searchBuku->harga,0,",",".")}}
                                        </p>
                                        @if($searchBuku->diskon != null)
                                        <p class="text-orange text-lg font-bold mx-3">
                                            Rp.{{number_format($searchBuku->diskon,0,",",".")}}
                                        </p>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    {{ $bukusnew->links() }}
                @endif
                @if($disclist)
                    @foreach($bukusdisc as $searchBuku)
                        <div class="rounded overflow-hidden shadow-lg flex flex-col shadow-2xl hover:bg-gray-100">
                            <a class="p-4" href="/show/{{$searchBuku->id}}/">
                                <img class="object-cover h-100 w-full hover:opacity-90" src="{{ asset('cover/'.$searchBuku->image) }}" alt="Sunset in the mountains">
                                <div class="pt-3 h-full">
                                    <div class="text-lg">
                                        {{$searchBuku->penulis}}
                                    </div>
                                    <hr class="border-gray-400 my-2">
                                    <p class="font-semibold my-1 text-lg">
                                        {{$searchBuku->judul}}
                                    </p>
                                    <div class="flex">
                                        <p class="text-lg font-bold @if($searchBuku->diskon != null) text-gray-300 line-through @else text-orange @endif">
                                            Rp.{{number_format($searchBuku->harga,0,",",".")}}
                                        </p>
                                        @if($searchBuku->diskon != null)
                                        <p class="text-orange text-lg font-bold mx-3">
                                            Rp.{{number_format($searchBuku->diskon,0,",",".")}}
                                        </p>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    {{ $bukusdisc->links() }}
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
