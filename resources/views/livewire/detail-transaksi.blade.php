

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
                @livewire('list-detail-transaksi', ['transaksis' => $transaksis, 'id_transaksis' => $id_transaksis])
                <div class="text-2xl">
                    <div class="flex justify-between my-3">
                        <div>
                            Shipping
                        </div>
                        <div>
                            <div>
                                Rp.{{number_format($ongkir,0,",",".")}}
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between my-3">
                        <div>
                            Insurance
                        </div>
                        <div>
                            <div>
                                Rp.0
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between my-3">
                        <div>
                            Discount
                        </div>
                        <div>
                            <div>
                                Rp.0
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between my-3">
                        <div>
                            Shipping Discount
                        </div>
                        <div>
                            <div>
                                Rp.0
                            </div>
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
                            Rp.{{number_format($jumlah_harga + $ongkir,0,",",".")}}
                        </div>
                    </div>
                </div>
                <div class="my-24">
                    @if($ekspedisi!=null && $alamatSet!=null && $ongkir!=null && $payment!=null)
                    <button wire:click="pay" class="button-orange rounded-full text-white w-full h-16 text-2xl font-semibold">
                        Pay Now    
                    </button>
                    @else
                    <button disabled wire:click="pay" class="bg-gray-400 rounded-full text-white w-full h-16 text-2xl font-semibold">
                        Pay Now    
                    </button>
                    @endif
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
                    @if($alamats->isEmpty())
                    <div class="text-center text-gray-400 font-medium text-2xl my-4">
                        No address listed yet.
                    </div>
                    <div class="mx-6 mt-8">
                        <button class="text-primary-blue border rounded-full w-full h-14 text-2xl font-bold">
                            Add Shipping Address
                        </button>
                    </div>
                    @else
                    @foreach($alamats as $alamat)
                    <div class="px-12 my-3 text-2xl leading-loose">
                        {{$alamat->alamat_lengkap}}, {{$alamat->kabupaten}}, {{$alamat->kota}}, {{$alamat->provinsi}} {{$alamat->kode_pos}}
                    </div>
                    @endforeach
                    @endif
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
                    <hr class="border-gray-400 my-5">
                    <div class="grid grid-cols-2 grid-rows-2 gap-5">
                        <label class="flex items-center gap-4">
                            <input wire:model="payment"  type="radio" class="form-radio" name="payment" value="dana" checked>
                            <img src="{{ asset('img/dana.png') }}" alt="">
                        </label>
                        <label class="flex items-center gap-4">
                            <input wire:model="payment" type="radio" class="form-radio" name="payment" value="bri">
                            <img src="{{ asset('img/bri.png') }}" alt="">
                        </label>
                        <label class="flex items-center gap-4">
                            <input wire:model="payment" type="radio" class="form-radio" name="payment" value="bni">
                            <img src="{{ asset('img/bni.png') }}" alt="">
                        </label>
                        <label class="flex items-center gap-4">
                            <input wire:model="payment" type="radio" class="form-radio" name="payment" value="cod">
                            <div class="text-2xl">COD (Cash On Delivery)</div>
                        </label>    
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
                    <hr class="border-gray-400 my-5">
                    <div class="grid grid-cols-2 grid-rows-2 gap-5">
                        <label class="flex items-center gap-4">
                            <input wire:model="ekspedisi"  type="radio" class="form-radio" name="ekspedisi" value="jnt" checked>
                            <img src="{{ asset('img/jnt.png') }}" alt="">
                        </label>
                        <label class="flex items-center gap-4">
                            <input wire:model="ekspedisi" type="radio" class="form-radio" name="ekspedisi" value="jne">
                            <img src="{{ asset('img/jne.png') }}" alt="">
                        </label>
                        <label class="flex items-center gap-4">
                            <input wire:model="ekspedisi" type="radio" class="form-radio" name="ekspedisi" value="sicepat">
                            <img src="{{ asset('img/sicepat.png') }}" alt="">
                        </label>
                        <label class="flex items-center gap-4">
                            <input wire:model="ekspedisi" type="radio" class="form-radio" name="ekspedisi" value="anteraja">
                            <img src="{{ asset('img/anteraja.png') }}" alt="">
                        </label>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
