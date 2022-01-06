

<div>
    <livewire:navigation />
    <div class=" mx-28">
        <div class=" text-5xl font-bold my-12">
            Transaction Detail
        </div>
        @if($transaksis[0]->status=="order")
        <button class="bg-jenis text-orange px-8 py-3 text-3xl font-bold rounded-2xl my-5">
            Order
        </button>
        @elseif($transaksis[0]->status=="process")
        <button class="bg-jenis text-orange px-8 py-3 text-3xl font-bold rounded-2xl my-5">
            Process
        </button>
        @elseif($transaksis[0]->status=="delivery")
        <button class="bg-jenis text-orange px-8 py-3 text-3xl font-bold rounded-2xl my-5">
            Delivery
        </button>
        @elseif($transaksis[0]->status=="done")
        <button class=" bg-green-300 text-white px-8 py-3 text-3xl font-bold rounded-2xl my-5">
            Done
        </button>
        @endif
        <div class="grid grid-cols-2 gap-20 pb-10">
            <div>
                <div class="flex justify-between">
                    <div class="text-3xl font-semibold">
                        All Orders
                    </div>
                    <div class="text-orange text-3xl font-bold">
                        {{ $jumlah }}
                    </div>
                </div>
                @livewire('list-detail-transaksi', ['transaksis' => $transaksis])
                <div class="text-2xl">
                    <div class="flex justify-between my-3">
                        <div>
                            Shipping
                        </div>
                        <div>
                            <div>
                                Rp.{{number_format($transaksis[0]->ongkir,0,",",".")}}
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
                            Rp.{{number_format($transaksis[0]->ongkir + $total->sum,0,",",".")}}
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-white py-10 px-10 rounded-3xl shadow-xl my-10">
                    <div class="text-2xl font-bold">
                        Shopping Detail
                    </div>
                    <div class="my-5 text-2xl">
                        <div>
                            No Invoice
                        </div>
                        <div class="font-semibold my-1">
                            INV/{{$transaksis[0]->no_invoice}}
                        </div>
                    </div>
                    <div class="my-5 text-2xl">
                        <div>
                            Purchased Date
                        </div>
                        <div class="font-semibold">
                            {{$transaksis[0]->updated_at->format('d F Y')}}
                        </div>
                    </div>
                    <div class="text-2xl">
                        <div>
                            Payment Method
                        </div>
                        <div class="font-semibold">
                            {{strtoupper($transaksis[0]->metode_pembayaran)}}
                        </div>
                    </div>
                </div>
                <div class="bg-white py-10 px-10 rounded-3xl shadow-xl my-10">
                    <div class="text-2xl font-bold">
                        Shipping Detail
                    </div>
                    <div class="my-5 text-2xl">
                        <div>
                            Expedition
                        </div>
                        <div class="font-semibold my-1">
                            @if($transaksis[0]->ekspedisi == "anteraja")
                                Anteraja - Regular
                            @elseif($transaksis[0]->ekspedisi == "jnt")
                                J&T Express - Regular
                            @elseif($transaksis[0]->ekspedisi == "jne")
                                JNE Express - Regular
                            @elseif($transaksis[0]->ekspedisi == "sicepat")
                                Sicepat Ekpres - Regular
                            @endif
                        </div>
                    </div>
                    @if($transaksis[0]->no_resi!=null)
                    <div class="my-5 text-2xl">
                        <div>
                            No Resi
                        </div>
                        <div class="font-semibold my-1">
                            {{$transaksis[0]->no_resi}}
                        </div>
                    </div>
                    @endif
                    <div class="my-5 text-2xl">
                        <div>
                            Address
                        </div>
                        <div class="font-semibold leading-relaxed">
                            {{$alamat->penerima}}<br>
                            {{$alamat->no_hp}}<br>
                            {{$alamat->alamat_lengkap}}, {{$alamat->kabupaten}}, {{$alamat->kecamatan}} {{$alamat->kota}}, {{$alamat->provinsi}} {{$alamat->kode_pos}}
                        </div>
                    </div>
                </div>
                @if($transaksis[0]->status=="done")
                @elseif($transaksis[0]->status=="delivery")
                @elseif($transaksis[0]->status=="decline")
                @elseif($transaksis[0]->status!="cart")
                <button wire:click.prevent="cancel({{ $transaksis[0]->id }})" class="w-full h-16 button-blue text-white rounded-full text-2xl font-bold my-3">
                    Cancel order
                </button>
                @endif
                <form action="/">
                    <button class="w-full h-16 button-blue text-white rounded-full text-2xl font-bold my-3">
                        Back to shopping
                    </button>
                </form>
                @if($transaksis[0]->status=="delivery")
                <button wire:click.prevent="done({{ $transaksis[0]->id }})" class="w-full h-16 button-orange text-white rounded-full text-2xl font-bold my-3">
                    Done
                </button>
                @endif
            </div>
        </div>
    </div>
</div>
