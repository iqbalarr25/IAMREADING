<div class="fixed z-10 inset-0 ease-out duration-400">
    <div class=" w-full flex items-end justify-center min-h-screen text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-xl transform transition-all sm:my-6 sm:align-middle sm:max-w-3xl sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form enctype="multipart/form-data">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-10 sm:pb-4">
                    <div>
                        <div class="flex flex-row-reverse">
                            <button wire:click.prevent="closeResi">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11 w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="grey" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
                            </button>
                        </div>
                        <div class="text-2xl font-semibold">
                            No Resi
                        </div>
                        <div class="my-2">
                            <input type="text"
                                class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="isbn" placeholder="Enter ISBN" wire:model="isbn">
                            @error('isbn') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto justify-end">
                        <button wire:click.prevent="saveResi" type="button"
                            class="inline-flex  text-xl px-4 py-5 w-full justify-center button-blue rounded-full leading-6 font-semibold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-2xl sm:leading-5 sm:w-36">
                            OK
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>