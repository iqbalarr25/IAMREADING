<div wire:ignore>
    @foreach($transaksis as $transaksi)
    @if($transaksi != null)
    <hr class="border-gray-400 my-5">   
    <div class="text-2xl font-semibold">
        Item {{$count}}
    </div>
    <div class="grid grid-cols-3 my-5">
        <div class="">
            <img src="{{ asset('cover/'.$transaksi->buku->image) }}">
        </div>
        <div class="relative col-start-2 col-end-4 mx-auto my-3">
            <div class="text-4xl font-medium">
                {{$transaksi->buku->judul}}
            </div>
            <div class="absolute inset-x-0 bottom-0">
                <div class="text-2xl font-medium my-4">
                    {{$transaksi->jumlah}} item
                </div>
                <div class="text-2xl font-bold text-gray-400">
                    @if($transaksi->buku->diskon == null)
                        Rp.{{number_format($transaksi->buku->harga,0,",",".")}}
                    @else
                        Rp.{{number_format($transaksi->buku->diskon,0,",",".")}}
                    @endif
                </div>
                
            </div>
        </div>
    </div>
    <div class="flex justify-between py-4">
        <div class="text-3xl font-medium">
            Total Price Item {{$count}}
        </div>
        <div class="text-3xl font-medium">
            Rp.{{number_format($transaksi->jumlah_harga,0,",",".")}}
        </div>
    </div>
    <div class="hidden">
        {{$count++;}}
    </div>
    @endif
    @endforeach
    <div class="text-3xl font-bold mt-12">
        Order Details
    </div>
    <div class="bg-jenis flex justify-between py-2 px-8 my-3">
        <div class="text-orange text-2xl font-semibold my-auto">
            Total Price
        </div>
        <div class="text-orange text-3xl font-bold my-auto">
            Rp.{{number_format($jumlah_harga,0,",",".")}}
        </div>
    </div>
    <hr class="border-orange my-4">
    <div class="text-2xl">
        <div class="flex justify-between my-3">
            <div>
                Total Order
            </div>
            <div>
                @foreach($transaksis as $transaksi)
                @if($transaksi != null)
                <div>
                    @if($transaksi->buku->diskon == null)
                        Rp.{{number_format($transaksi->buku->harga,0,",",".")}} x {{$transaksi->jumlah}}
                    @else
                        Rp.{{number_format($transaksi->buku->diskon,0,",",".")}} x {{$transaksi->jumlah}}
                    @endif
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
