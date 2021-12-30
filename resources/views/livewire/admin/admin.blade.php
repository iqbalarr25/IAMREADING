<div >
    @include('layouts.navigation-auth')
    <div class="grid grid-cols-5">
        <div class="text-3xl text-primary-blue w-full px-10">
            @if($bukupage)
            <img src="{{ asset('img/here.png') }}" class="absolute left-0">
            @endif
            <div class="relative my-auto">
                <button wire:click.prevent="bukupage" class="my-5 font-bold h-14 w-full">
                    Books
                </button>
            </div>
            @if($transaksipage)
            <img src="{{ asset('img/here.png') }}" class="absolute left-0">
            @endif
            <div>
                <button wire:click.prevent="transaksipage" class="my-5 font-bold h-14 w-full">
                    Transaction
                </button>
            </div>
            @if($historypage)
            <img src="{{ asset('img/here.png') }}" class="absolute left-0">
            @endif
            <div>
                <button wire:click.prevent="historypage" class="my-5 font-bold h-14 w-full">
                    History
                </button>
            </div>
        </div>
        @if($bukupage)
        <livewire:admin-buku>
        @elseif($transaksipage)
        <livewire:admin-transaksi>
        @elseif($historypage)
        <livewire:admin-history>
        @endif
    </div>
</div>
