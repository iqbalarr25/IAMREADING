<div class="fixed z-10 inset-0 ease-out duration-400">
    <div class=" w-full flex items-end justify-center min-h-screen text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-xl transform transition-all sm:my-6 sm:align-middle sm:max-w-6xl sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form enctype="multipart/form-data">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-10 sm:pb-4">
                    <div>
                        <div class="flex flex-row-reverse">
                            <button wire:click="closeModal">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11 w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="grey" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
                            </button>
                        </div>
                        <div class="text-4xl font-bold">
                            Book Details
                        </div>
                        <div class="grid grid-cols-2 gap-10 overflow-y-auto" style="max-height: 700px">
                            <div>
                                <div class="my-8">
                                    <label for="isbn"
                                        class="block text-gray-700 text-2xl font-base my-2">ISBN</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="isbn" placeholder="Enter ISBN" wire:model="isbn">
                                    @error('isbn') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="my-8">
                                    <label for="penulis"
                                        class="block text-gray-700 text-2xl font-base mb-2">Author</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="penulis" wire:model="penulis"
                                        placeholder="Enter Author"></input>
                                    @error('penulis') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="my-8">
                                    <label for="judul"
                                        class="block text-gray-700 text-2xl font-base mb-2">Title</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="judul" wire:model="judul"
                                        placeholder="Enter Title"></input>
                                    @error('judul') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="my-8">
                                    <label for="penerbit"
                                        class="block text-gray-700 text-2xl font-base mb-2">Publisher</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="penerbit" wire:model="penerbit"
                                        placeholder="Enter Publisher"></input>
                                    @error('penerbit') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="my-8">
                                    <label for="tanggal"
                                        class="block text-gray-700 text-2xl font-base mb-2">Published Date</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="tanggal" wire:model="tanggal"
                                        placeholder="Enter Published Date"></input>
                                    @error('Published Date') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="my-8">
                                    <label for="bahasa"
                                        class="block text-gray-700 text-2xl font-base mb-2">Language</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="bahasa" wire:model="bahasa"
                                        placeholder="Enter Language"></input>
                                    @error('Language') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="flex gap-7 my-8">
                                    <div class="">
                                        <label for="berat"
                                            class="block text-gray-700 text-2xl font-base mb-2">Weight (kg)</label>
                                        <input type="number"
                                            class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="berat" wire:model="berat"
                                            placeholder="Enter Weight"></input>
                                        @error('Weight') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="">
                                        <label for="lebar"
                                            class="block text-gray-700 text-2xl font-base mb-2">Width (cm)</label>
                                        <input type="number"
                                            class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="lebar" wire:model="lebar"
                                            placeholder="Enter Width"></input>
                                        @error('Width') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="">
                                        <label for="tinggi"
                                            class="block text-gray-700 text-2xl font-base mb-2">Length (cm)</label>
                                        <input type="number"
                                            class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="tinggi" wire:model="tinggi"
                                            placeholder="Enter Length"></input>
                                        @error('Length') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="flex my-8 gap-7">
                                    <div class="w-full">
                                        <label for="stock"
                                            class="block text-gray-700 text-2xl font-base mb-2">Stock</label>
                                        <input type="number"
                                            class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="stock" wire:model="stock"
                                            placeholder="Enter Stock"></input>
                                        @error('Stock') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="w-full">
                                        <label for="halaman"
                                            class="block text-gray-700 text-2xl font-base mb-2">Total Pages</label>
                                        <input type="number"
                                            class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="halaman" wire:model="halaman"
                                            placeholder="Enter Page"></input>
                                        @error('Total Pages') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                
                                <div class="my-8">
                                    <label for="jenis"
                                        class="block text-gray-700 text-2xl font-base mb-2">Type</label>
                                    <select wire:model="jenis" class="form-select form-select-lg mb-3 appearance-none block w-full px-4 py-3 text-xl font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-lg example">
                                        <option selected>Choose</option>
                                        <option value="Novel">Novel</option>
                                        <option value="Komik">Comic</option>
                                    </select>
                                </div>
                                <div class="flex gap-7 my-8">
                                    <div class="w-full">
                                        <label for="harga"
                                            class="block text-gray-700 text-2xl font-base mb-2">Price</label>
                                        <input type="number"
                                            class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="harga" wire:model="harga"
                                            placeholder="Enter Price"></input>
                                        @error('Price') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="w-full">
                                        <label for="diskon"
                                            class="block text-gray-700 text-2xl font-base mb-2">Discount</label>
                                        <input type="number"
                                            class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="diskon" wire:model="diskon"
                                            placeholder="Enter Discount"></input>
                                        @error('Discount') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="my-8 mx-10">
                                    <label for="image"
                                        class="block text-gray-700 text-2xl font-base mb-2">Cover</label>
                                        <div class="bg-gray-100 rounded-3xl">
                                            <div class="w-2/3 mx-auto">
                                                @switch($image)
                                                    @case($temp_image)
                                                        <img src="{{  url('cover/'.$image) }}" alt="No Image Selected" class="mx-auto">
                                                        @break
                                                    @default
                                                        <img src="{{  $image->temporaryUrl() }}" alt="No Image Selected" class="mx-auto">
                                                @endswitch
                                            </div>
                                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                                <label class=" flex flex-col items-center button-orange rounded-full py-4 shadow-lg w-full tracking-wide border cursor-pointer">
                                                    <div class="text-white text-2xl font-bold">Select Image</div>
                                                    <input wire:model="image" type='file' class="hidden"/>
                                                </label>
                                            </div>
                                        </div>
                                    @error('image') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="my-8 mx-5">
                                    <label for="deskripsi"
                                        class="block text-gray-700 text-2xl font-base mb-2">Description</label>
                                    <textarea
                                        class=" h-80 shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="deskripsi" wire:model="deskripsi"
                                        placeholder="Enter Description"></textarea>
                                    @error('Description') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="save" type="button"
                            class="inline-flex justify-center text-xl w-full px-4 py-5 button-blue rounded-full leading-6 font-semibold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-2xl sm:leading-5">
                            Save
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>