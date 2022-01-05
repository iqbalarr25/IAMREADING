<div>
    <livewire:navigation>
    <div class="px-32 py-8">
        <div class="text-5xl font-bold my-10">
            History
        </div>
        <div class="relative text-gray-600 w-96 my-10">
                <input wire:model="search" class=" w-96 p-6 border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-md-center"
                type="search" name="search" placeholder="Search">
                    <button wire:click="search" class="absolute right-0 top-0 mt-4 mr-4">
                        <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                        width="512px" height="512px">
                        <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </button>
        </div>
        @foreach($histories as $history)
        @if($history->status!="cart")
        <div class="w-full bg-white py-7 px-8 rounded-3xl my-16 shadow-xl relative overflow-hidden">
            <div class="flex gap-4 z-10">
                <img src="{{ asset('img/bag.png') }}" alt="">
                <div class="text-xl font-bold my-auto pt-1">
                    Shopping
                </div>
                <div class="text-xl my-auto pt-1">
                    {{$history->updated_at->format('d')}} {{  $history->updated_at->format('F')}} {{  $history->updated_at->format('Y')}}
                </div>
                @if($history->status=="done")
                <button class="cursor-default bg-green-200 px-5 rounded-full">
                    Done
                </button>
                @elseif($history->status=="delivery")
                <button class="cursor-default bg-jenis text-orange px-5 rounded-full">
                    Delivery
                </button>
                @elseif($history->status=="process")
                <button class="cursor-default bg-jenis text-orange px-5 rounded-full">
                    Process
                </button>
                @elseif($history->status=="order")
                <button class="cursor-default bg-jenis text-orange px-5 rounded-full">
                    Order
                </button>
                @elseif($history->status=="payment")
                <button class="cursor-default bg-jenis text-orange px-5 rounded-full">
                    Payment
                </button>
                @elseif($history->status=="decline")
                <button class="cursor-default bg-red-500 text-white px-5 rounded-full">
                    Decline
                </button>
                @endif
            </div>
            <div class="grid grid-cols-5 relative z-10">
                <div class="col-start-1 col-end-4 flex relative">
                    <img src="{{ asset('img/jujutsu.png') }}" class="w-32 my-7 mx-10">
                    <div class="w-full my-10">
                        <div class="text-2xl font-bold">
                            {{$history->buku->judul}}
                        </div>
                        <hr class="border-gray-400 my-5">
                        <div class="text-lg text-gray-400">
                            {{$history->jumlah}} x Rp.{{number_format($history->jumlah_harga/$history->jumlah,0,",",".")}}
                        </div>
                        <div class=" absolute bottom-8 flex gap-3">
                            <div class="text-lg font-semibold my-auto">Total Shopping</div> 
                            <div class="text-2xl font-bold text-orange">Rp.{{number_format($history->sum,0,",",".")}}</div> 
                        </div>
                    </div>
                </div>
                <div class="flex gap-5 col-start-4 col-end-6 justify-end">
                    <a href="@if($history->status=="payment") /complete-payment/{{ $history->no_invoice }} @else /transaksidetail/{{ $history->no_invoice }} @endif">
                        <button class="mt-48 border text-primary-blue rounded-full px-6 py-1 font-semibold">Transaction Details</button>
                    </a>
                    @if($history->status=="done")
                    <div>
                        <button class="mt-48 button-blue rounded-full px-6 text-white py-1 font-semibold">Complain</button>
                    </div>
                    @endif
                </div>
            </div>
            <div class="absolute right-0 top-0 z-0">
                <img src="{{ asset('img/img-history1.png') }}" >
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
