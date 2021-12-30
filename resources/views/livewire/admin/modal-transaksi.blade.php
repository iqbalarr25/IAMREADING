<div class="fixed z-10 inset-0 ease-out duration-400">
    <div class=" w-full flex items-end justify-center min-h-screen text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-xl transform transition-all sm:my-6 sm:align-middle sm:max-w-6xl sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form enctype="multipart/form-data">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-14 sm:pb-4">
                    <div>
                        <div class="flex flex-row-reverse">
                            <button wire:click.prevent="closeModal()">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11 w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="grey" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
                            </button>
                        </div>
                        <div class="text-4xl font-bold">
                            Transaction Details
                        </div>
                        <div class="grid grid-cols-2 gap-20 overflow-y-auto" style="max-height: 700px">
                            <div>
                                <div class="font-bold text-3xl my-10">
                                    Shopping Detail
                                </div>
                                <div class="text-2xl my-7">
                                    <div>
                                        No. Invoice
                                    </div>
                                    <div class="font-medium mt-2">
                                        INV\20211128
                                    </div>
                                </div>
                                <div class="text-2xl my-7">
                                    <div>
                                        Purchase Date
                                    </div>
                                    <div class="font-medium mt-2">
                                        29 November 2021
                                    </div>
                                </div>
                                <div class="text-2xl my-7">
                                    <div>
                                        Payment Method
                                    </div>
                                    <div class="font-medium mt-2">
                                        DANA
                                    </div>
                                </div>
                                <div class="text-3xl font-bold my-7">
                                    Order Detail
                                </div>
                                <div class="grid grid-cols-5">
                                    <div class="w-24">
                                        <img src="{{ asset('cover/'.$view_transaksi->buku->image) }}">
                                    </div>
                                    <div class="relative col-start-2 col-end-6 py-2 px-2">
                                        <div class="text-xl font-semibold">
                                            Jujutsu Kaisen 01
                                        </div>
                                        <div class="absolute inset-x-0 bottom-0 left-1">
                                            <div class="text-xl font-medium my-4">
                                                1 item
                                            </div>
                                            <div class="text-xl font-base">
                                                @if($view_transaksi->buku->diskon == null)
                                                    Rp.32.000
                                                @else
                                                    Rp.32.000
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-10 text-2xl">
                                    <div class="flex justify-between my-4 font-medium">
                                        <div>
                                            Total Payment
                                        </div>
                                        <div class="font-semibold">
                                            Rp.42.000
                                        </div>
                                    </div>
                                    <div class="flex justify-between my-4">
                                        <div>
                                            Total Order
                                        </div>
                                        <div>
                                            Rp.32.000
                                        </div>
                                    </div>
                                    <div class="flex justify-between my-4">
                                        <div>
                                            Shipping
                                        </div>
                                        <div>
                                            Rp.10.000
                                        </div>
                                    </div>
                                    <div class="flex justify-between my-4">
                                        <div>
                                            Insurance
                                        </div>
                                        <div>
                                            Rp.0
                                        </div>
                                    </div>
                                    <div class="flex justify-between my-4">
                                        <div>
                                            Discount
                                        </div>
                                        <div>
                                            Rp.0
                                        </div>
                                    </div>
                                    <div class="flex justify-between my-4">
                                        <div>
                                            Shipping Discount
                                        </div>
                                        <div>
                                            Rp.0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="font-bold text-3xl my-10">
                                    Shipping Detail
                                </div>
                                <div class="text-2xl my-10">
                                    <div>
                                        Ekspedition
                                    </div>
                                    <div class="font-medium mt-2">
                                        J&T Express - Regular
                                    </div>
                                </div>
                                <div class="text-2xl my-7">
                                    <div>
                                        Address
                                    </div>
                                    <div>
                                        <div class="font-medium mt-2">
                                            Budi
                                        </div>
                                        <div class="font-medium mt-2">
                                            081212121212
                                        </div>
                                        <div class="font-medium mt-2">
                                            Jalan Bandung Lautan Api No. 10, Kel. Cipamokolan, Kec. Rancasari, Bandung, Jawa Barat 40401
                                        </div>
                                    </div>
                                </div>
                                <div class="text-2xl my-7">
                                    <div>
                                        Payment Method
                                    </div>
                                    <div class="font-medium mt-2">
                                        DANA
                                    </div>
                                </div>
                                <div class="font-bold text-3xl my-10">
                                    Customer Detail
                                </div>
                                <div class="text-2xl my-7">
                                    <div>
                                        Name
                                    </div>
                                    <div class="font-medium mt-2">
                                        Budi Santoso
                                    </div>
                                </div>
                                <div class="text-2xl my-7">
                                    <div>
                                        Email
                                    </div>
                                    <div class="font-medium mt-2">
                                        iqbalarrafi39@gmail.com
                                    </div>
                                </div>
                                <div class="text-2xl my-7">
                                    <div>
                                        Phone Number
                                    </div>
                                    <div class="font-medium mt-2">
                                        08211313733
                                    </div>
                                </div>
                                <button wire:click="viewInvoice()" class=" button-orange text-white w-full h-16 text-2xl font-semibold rounded-2xl">
                                    See Invoice
                                </button>
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