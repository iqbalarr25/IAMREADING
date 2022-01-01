

<div>
    <livewire:navigation /> 
    <div class=" mx-28">
        <div class=" text-5xl font-bold my-16">
            Checkout
        </div>
        <div class="grid grid-cols-2 gap-20">
            <div>
                <div class="flex justify-between">
                    <div class="text-3xl font-semibold">
                        All Orders
                    </div>
                    <div class="text-orange text-3xl font-bold">
                        {{ $jumlah }}
                    </div>
                </div>
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
                <div class="flex justify-between text-2xl">
                    <div>
                        <div class="my-3">
                            Total Order
                        </div>
                        <div class="my-3">
                            Shipping
                        </div>
                        <div class="my-3">
                            Insurance
                        </div>
                        <div class="my-3">
                            Discount
                        </div>
                        <div class="my-3">
                            Shipping Discount
                        </div>
                    </div>
                    <div class="font-semibold">
                        <div class="my-3">
                            Rp.32.000 x 1
                        </div>
                        <div class="my-3">
                            Rp.10.000
                        </div>
                        <div class="my-3">
                            Rp.0
                        </div>
                        <div class="my-3">
                            Rp.0
                        </div>
                        <div class="my-3">
                            Rp.0
                        </div>
                    </div>
                </div>
                <hr class="border-gray-400 my-3">
                <div class="flex justify-between text-2xl">
                    <div>
                        <div class="my-3">
                            Total
                        </div>
                    </div>
                    <div class="font-semibold">
                        <div class="flex my-3">
                            Rp.42.000<div class="invisible">1x1</div>
                        </div>
                    </div>
                </div>
                <div class="my-24">
                    <button class="button-orange rounded-full text-white w-full h-16 text-2xl font-semibold">
                        Pay Now    
                    </button>
                </div>
            </div>
            <div>
                <div class="bg-white w-full rounded-2xl shadow-xl p-8">
                    <div class="flex">
                        <div class="w-16">
                            <img src="{{ asset('img/location.png') }}" alt="">
                        </div>
                        <div class="text-3xl font-semibold my-auto">
                            Shipping Address
                        </div>
                    </div>
                    <div class="text-center text-gray-400 font-medium text-2xl my-4">
                        No address listed yet.
                    </div>
                    <div class="mx-6 mt-8">
                        <button class="text-primary-blue border rounded-full w-full h-14 text-2xl font-bold">
                            Add Shipping Address
                        </button>
                    </div>
                </div>
                <div class="bg-white w-full rounded-2xl shadow-xl p-8 my-20">
                    <div class="flex mb-7">
                        <div class="w-16">
                            <img src="{{ asset('img/payment.png') }}" alt="">
                        </div>
                        <div class="text-3xl font-semibold my-auto">
                            Payments Method
                        </div>
                    </div>
                    <div class="mx-6">
                        <button class="text-primary-blue border rounded-full w-full h-14 text-2xl font-bold">
                            Select Payments Method
                        </button>
                    </div>
                    <hr class="border-gray-400 my-8">
                    <div class="text-center text-gray-400 font-medium text-2xl">
                        No payment yet.
                    </div>
                </div>
                <div class="bg-white w-full rounded-2xl shadow-xl p-8 my-20">
                    <div class="flex mb-7">
                        <div class="w-16">
                            <img src="{{ asset('img/shipping.png') }}" alt="">
                        </div>
                        <div class="text-3xl font-semibold my-auto">
                            Expedition
                        </div>
                    </div>
                    <div class="mx-6">
                        <button class="text-primary-blue border rounded-full w-full h-14 text-2xl font-bold">
                            Select Expedition
                        </button>
                    </div>
                    <hr class="border-gray-400 my-8">
                    <div class="text-center text-gray-400 font-medium text-2xl">
                        No expedition yet.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
