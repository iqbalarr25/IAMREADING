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
                            <button wire:click.prevent="closeModalInvoice">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11 w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="grey" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
                            </button>
                        </div>
                        <div class="text-4xl font-semibold">
                            Upload Invoice
                        </div>
                        <div class="overflow-y-auto appearance-none"style="max-height: 700px">
                            <div class="mx-5">
                                <div class="my-7">
                                    <label for="sender_number" class="text-2xl font-semibold">Sender's Number</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="sender_number" placeholder="Enter Sender's Number" wire:model="sender_number">
                                    @error('Senders Number') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="my-7">
                                    <label for="sender_name" class="text-2xl font-semibold">Sender's Name</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="sender_name" placeholder="Enter Sender's Name" wire:model="sender_name">
                                    @error('Senders Name') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                <div class="my-8 mx-10">
                                    <label for="image"
                                        class="block text-gray-700 text-2xl font-base mb-2 text-center">Upload Invoice</label>
                                        <div class="bg-gray-100 rounded-3xl">
                                            @if($image!=null)
                                            <div class="w-2/3 mx-auto">
                                                <img src="{{  $image->temporaryUrl() }}" alt="No Image Selected" class="mx-auto">
                                            </div>
                                            @endif
                                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                                <label class=" flex flex-col items-center button-orange rounded-full py-4 shadow-lg w-full tracking-wide border cursor-pointer">
                                                    <div class="text-white text-2xl font-bold">Select Image</div>
                                                    <input wire:model="image" type='file' class="hidden"/>
                                                </label>
                                            </div>
                                        </div>
                                    @error('image') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-full">
                        <button wire:click.prevent="sendInvoice" type="button"
                            class="inline-flex text-xl px-4 py-5 w-full justify-center button-blue rounded-full leading-6 font-semibold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-2xl sm:leading-5 sm:w-full">
                            Send Invoice
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>