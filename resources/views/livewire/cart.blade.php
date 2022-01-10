<div>
    <livewire:navigation>
    <div class="mx-32">
        <div class="text-5xl font-bold my-10">
            Cart
        </div>
        <div class="grid grid-cols-5 gap-10">
            <div class="col-start-1 col-end-4">
                @if(!$carts->isEmpty())
                <div class="flex gap-8 my-5">
                    <input class="p-3" type="checkbox" wire:click="updateSelectAll">
                    <div class="text-2xl font-semibold text-primary-blue my-auto">
                        Select All
                    </div>
                </div>
                @foreach($carts as $cart)
                <hr class="border-gray-400 my-10">
                <div class="flex gap-10 my-5">
                    <div class="grid grid-rows-4">
                        <input class="p-3" type="checkbox" wire:model="selectedBukus" value="{{ $cart->id }}">
                    </div>
                    <img src="{{ asset('cover/'.$cart->buku->image) }}" class=" w-28">
                    <div class="grid grid-rows-4">
                        <div class="my-auto text-2xl font-semibold">
                            {{$cart->buku->judul}}
                        </div>
                        <div class="my-auto text-lg">
                            {{$cart->buku->penulis}}
                        </div>
                        <div class="my-auto text-gray-400 text-lg">
                            {{$cart->jumlah}} item
                        </div>
                        <div class="my-auto text-2xl text-orange font-bold">
                            Rp.{{number_format($cart->jumlah_harga,0,",",".")}}
                        </div>
                    </div>
                    <div class="grid grid-rows-4 invisible">
                        <div class="flex row-start-4 col-end-5 my-auto">
                            <button>
                                <img src="{{ asset('img/plus-cart.png') }}" alt="">
                            </button>
                            <div class="w-16 mx-1">
                                <div wire:model="jumlah" class="w-full text-center text-2xl font-semibold">
                                    {{$cart->jumlah}}
                                </div>
                                <div>
                                    <hr class="border-gray-400">
                                </div>
                            </div>
                            <button>
                                <img src="{{ asset('img/minus-cart.png') }}" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="grid grid-rows-4">
                        <div class="row-start-4 col-end-5 my-auto">
                            <button wire:click="delete({{ $cart->id }})">
                                <img src="{{ asset('img/delete.png') }}" alt="">
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
            <div class="col-start-4 col-end-6">
                <div class="text-3xl font-bold">
                    Discount Coupon
                </div>
                <div class="relative my-6">
                    <input class="w-full h-16 rounded-2xl shadow-xl pl-8 pr-40" placeholder="Input Disc Code"></input>
                    <button class="w-32 h-16 rounded-2xl button-blue text-white text-2xl font-semibold absolute right-0">Reedem</button>
                </div>
                <div class="my-16 p-8 bg-white shadow rounded-2xl">
                    <div class="text-3xl font-bold my-3">
                        Shopping Summary
                    </div>
                    <div class="flex justify-between my-5">
                        <div class="text-2xl text-gray-500 font-base">
                            Total Price (item)
                        </div>
                        <div class="text-2xl text-gray-500 font-semibold">
                            Rp.{{number_format($jumlah_harga,0,",",".")}}
                        </div>
                    </div>
                    <div class="flex justify-between my-5">
                        <div class="text-2xl text-gray-500 font-base">
                            Total Discount (item)
                        </div>
                        <div class="text-2xl text-gray-500 font-semibold">
                            Rp.0
                        </div>
                    </div>
                    @if($selectedBukus != [])
                    <form  action=" /detailtransaksi/@foreach($selectedBukus as $selectedBuku)={{$selectedBuku}}@endforeach" >
                    @endif
                        <button class="w-full button-orange text-white h-14 text-2xl font-medium rounded-full">
                            Buy
                        </button>
                    </form>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
    