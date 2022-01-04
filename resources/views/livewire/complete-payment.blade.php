<div>
    
    <livewire:navigation>
    <div class="px-32 py-8">
        <div class="text-5xl font-bold text-center">
            Completing Payment
        </div>
        <div class="text-3xl my-7 text-gray-400 font-semibold text-center">
            Payment Deadline
        </div>
        <div class="text-3xl text-primary-blue font-bold text-center">
            {{$payment->updated_at->addDays(1)->format('l')}}, {{$payment->updated_at->addDays(1)->format('d F Y')}} | 23.59 WIB
        </div>
        <div class="mx-36 my-16 border border-gray-400 rounded-3xl">
            <div class="px-12 py-6 flex justify-between">
                <div class="text-2xl font-semibold my-auto">
                    Transfer E-Wallet
                </div>
                @if($payment->metode_pembayaran == "dana")
                <div>
                    <img src="{{ asset('img/dana.png') }}" alt="">
                </div>
                @elseif($payment->metode_pembayaran == "bni")
                <div>
                    <img src="{{ asset('img/bni.png') }}" alt="">
                </div>
                @elseif($payment->metode_pembayaran == "bri")
                <div>
                    <img src="{{ asset('img/bri.png') }}" alt="">
                </div>
                @elseif($payment->metode_pembayaran == "cod")
                <div>
                    <img src="{{ asset('img/cod.png') }}" alt="">
                </div>
                @endif
            </div>
            <hr class="border-gray-400">
            <div class="px-12 py-6">
                <div class="text-xl text-gray-500 font-semibold">
                    Number Phone
                </div>
                <div class="flex justify-between mb-10">
                    <div class="text-2xl font-semibold">
                        082113313733
                    </div>
                    <div class="text-2xl font-semibold object-bottom">
                        a.n. Iqbal Arrafi
                    </div>
                </div>
                <div class="text-2xl">
                    Total Payment
                </div>
                <div class="shadow-xl my-5 rounded-2xl">
                    <div class="bg-white text-2xl font-bold text-primary-blue px-10 py-5 rounded-t-2xl">
                        Rp.{{number_format($payment->sum+$payment->ongkir,0,",",".")}}
                    </div>
                    <div>
                        <div class="text-xl font-medium flex justify-between px-10 py-5">
                            <div>
                                Total Order
                            </div>
                            <div>
                                Rp.{{number_format($payment->sum,0,",",".")}}
                            </div>
                        </div>
                        <div class="text-xl font-medium flex justify-between px-10 py-5">
                            <div>
                                Shipping
                            </div>
                            <div>
                                Rp.{{number_format($payment->ongkir,0,",",".")}}
                            </div>
                        </div>
                        <div class="text-xl font-medium flex justify-between px-10 py-5">
                            <div>
                                Insurance
                            </div>
                            <div>
                                Rp.0
                            </div>
                        </div>
                        <div class="text-xl font-medium flex justify-between px-10 py-5">
                            <div>
                                Discount
                            </div>
                            <div>
                                Rp.0
                            </div>
                        </div>
                        <div class="text-xl font-medium flex justify-between px-10 py-5">
                            <div>
                                Shipping Discount
                            </div>
                            <div>
                                Rp.0
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" mx-36 my-8">
            <button wire:click.prevent="openModalInvoice" class="w-full h-16 button-orange rounded-full font-bold text-white text-2xl">
                Upload Invoice
            </button>
        </div>
    </div>
    @if($openModal)
    @include('livewire.modal-invoice')
    @endif
</div>
