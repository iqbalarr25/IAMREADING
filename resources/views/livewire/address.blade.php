<div>
    <livewire:navigation>
    <div class="mx-32 py-6 h-full">
        <div class="text-5xl font-bold">
            Shipping Address
        </div>
        <button wire:click.prevent="openModal" class="flex button-blue text-white gap-5 py-3 rounded-full px-8 my-16"> 
            <img src="{{ asset('img/add.png') }}" class="my-auto">
            <div class="text-2xl font-semibold my-auto">
                Add Address
            </div>
        </button>
        @if($alamats->isEmpty())
        <div class="text-2xl text-center text-gray-400 font-semibold">
            No address listed yet.
        </div>
        @else
        @foreach($alamats as $alamat)
        <div class="w-full bg-white rounded-3xl shadow-lg my-10">
            <div class="py-8 px-12">
                <div class="flex justify-between">
                    <div class="flex gap-6">
                        <div class="text-2xl font-bold my-auto">
                            {{$alamat->label}}
                        </div>
                        @if($alamat->status=="set")
                        <div class="text-2xl font-semibold text-orange bg-jenis px-12 rounded-full py-2">
                            Main
                        </div>
                        @endif
                    </div>
                    <div class="flex gap-5">
                        <button wire:click.prevent="edit({{ $alamat->id }})">
                            <img src="{{ asset('img/edit.png') }}" class="h-8 my-auto">
                        </button>
                        <button wire:click.prevent="delete({{ $alamat->id }})">
                            <img src="{{ asset('img/delete.png') }}" class="h-8 my-auto">
                        </button>
                    </div>
                </div>
                <div class="text-2xl my-5 font-medium">
                    {{$alamat->penerima}} | {{$alamat->no_hp}}
                </div>
                <div class="text-2xl my-3 text-gray-600">
                    {{$alamat->alamat_lengkap}}, {{$alamat->kabupaten}}, {{$alamat->kota}}, {{$alamat->provinsi}} {{$alamat->kode_pos}}
                </div>
                @if($alamat->status!="set")
                <button wire:click="main({{ $alamat->id }})" class="button-orange text-white rounded-full px-4 py-2">
                    Set As Main Address
                </button>
                @endif
            </div>
        </div>
        @endforeach
        @endif
    </div>
    @if($openModal)
    @include('livewire.modal-address')
    @endif
</div>
