<div class="fixed z-10 inset-0 ease-out duration-400">
    <div class=" w-full flex items-end justify-center min-h-screen text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-xl transform transition-all sm:my-6 sm:align-middle sm:max-w-2xl sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form enctype="multipart/form-data">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-10 sm:pb-4">
                    <div>
                        <div class="flex flex-row-reverse">
                            <button wire:click.prevent="closeModal">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11 w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="grey" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
                            </button>
                        </div>
                        <div class="text-4xl font-semibold">
                            Add Address
                        </div>
                        <div class="overflow-y-auto appearance-none"style="max-height: 700px">
                            <div class="mx-5">
                                <div class="my-7">
                                    <label for="label" class="text-2xl font-semibold">Label</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="label" placeholder="Enter Label" wire:model="label">
                                    @error('label') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="my-7">
                                    <label for="no_hp" class="text-2xl font-semibold">No HP</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="no_hp" placeholder="Enter No HP" wire:model="no_hp">
                                    @error('no hp') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="my-7">
                                    <label for="penerima" class="text-2xl font-semibold">Reciever</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="penerima" placeholder="Enter Reciever" wire:model="penerima">
                                    @error('penerima') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="my-7">
                                    <label for="provinsi"
                                        class="block text-2xl font-semibold mb-2">Province</label>
                                    <select wire:model="provinsi" class="appearance-none form-select form-select-lg mb-3 block w-full px-4 py-3 text-xl font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-black rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-lg example">
                                        <option selected></option>
                                        @foreach($provinsislist as $provinsilist)
                                            <option value="{{$provinsilist->provinsi}}">{{$provinsilist->provinsi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="my-7">
                                    <label for="kota"
                                        class="block text-2xl font-semibold mb-2">City/District</label>
                                    <select wire:model="kota" class="appearance-none form-select form-select-lg mb-3 block w-full px-4 py-3 text-xl font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-black rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-lg example">
                                        <option selected></option>
                                        @if($provinsi!=null)
                                        @foreach($kotaslist as $kotalist)
                                            <option value="{{$kotalist->kota}}">{{$kotalist->kota}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="my-7">
                                    <label for="kabupaten"
                                        class="block text-2xl font-semibold mb-2">Sub-District</label>
                                    <select wire:model="kabupaten" class="appearance-none form-select form-select-lg mb-3 block w-full px-4 py-3 text-xl font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-black rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-lg example">
                                        <option selected></option>
                                        @if($kota!=null)
                                        @foreach($kabupatenslist as $kabupatenlist)
                                            <option value="{{$kabupatenlist->kabupaten}}">{{$kabupatenlist->kabupaten}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="my-7">
                                    <label for="kode_pos" class="text-2xl font-semibold">Postal Code</label>
                                    <input type="text"
                                        class="shadow py-4 appearance-none border rounded w-full px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="kode_pos" placeholder="Enter Postal Code" wire:model="kode_pos">
                                    @error('postal code') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="my-7">
                                    <label for="alamat_lengkap" class="text-2xl font-semibold">Full Address</label>
                                    <input type="text"
                                        class="shadow py-4 appearance-none border rounded w-full px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="alamat_lengkap" placeholder="Enter Full Address" wire:model="alamat_lengkap">
                                    @error('full address') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-full">
                        <button wire:click.prevent="saveAddress" type="button"
                            class="inline-flex text-xl px-4 py-5 w-full justify-center button-blue rounded-full leading-6 font-semibold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-2xl sm:leading-5 sm:w-full">
                            Save Address
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>