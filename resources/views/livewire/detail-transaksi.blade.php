<div>
    @include('layouts.navigation')
    <div class=" mx-28">
        <div class=" text-5xl font-bold my-16">
            Checkout
        </div>
        <div class="grid grid-cols-2">
            <div>
                <div class="flex justify-between">
                    <div class="text-3xl font-semibold">
                        All Orders
                    </div>
                    <div class="text-orange text-3xl font-bold">
                        1
                    </div>
                </div>
                <hr class="border-gray-400 my-5">
                <div class="text-2xl font-semibold">
                    Item 1
                </div>
                <div class="grid grid-cols-3 my-5">
                    <div class="">
                        <img src="{{ asset('img/jujutsu.png') }}">
                    </div>
                    <div class="relative col-start-2 col-end-4 mx-auto my-3">
                        <div class="text-4xl font-medium">
                            Jujutsu Kaisen 01
                        </div>
                        <div class="absolute inset-x-0 bottom-0">
                            <div class="text-2xl font-medium my-4">
                                1 item
                            </div>
                            <div class="text-2xl font-bold text-gray-400">
                                Rp.32.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between py-4">
                    <div class="text-3xl font-medium">
                        Total Price Item 1
                    </div>
                    <div class="text-3xl font-medium">
                        Rp.32.000
                    </div>
                </div>
                <div class="text-3xl font-bold mt-12">
                    Order Details
                </div>
                <div class="bg-jenis flex justify-between py-2 px-8 my-3">
                    <div class="text-orange text-2xl font-semibold my-auto">
                        Total Price
                    </div>
                    <div class="text-orange text-3xl font-bold my-auto">
                        Rp.42.000
                    </div>
                </div>
                <hr class="border-orange my-4">
                <div class="flex justify-between text-2xl">
                    <div>
                        <div class="my-3">
                            Total Order
                        </div>
                        <div class="my-3">
                            Shipping
                        </div>
                        <div class="my-3">
                            Insurance
                        </div>
                        <div class="my-3">
                            Discount
                        </div>
                        <div class="my-3">
                            Shipping Discount
                        </div>
                    </div>
                    <div class="font-semibold">
                        <div class="my-3">
                            Rp.32.000 x 1
                        </div>
                        <div class="my-3">
                            Rp.10.000
                        </div>
                        <div class="my-3">
                            Rp.0
                        </div>
                        <div class="my-3">
                            Rp.0
                        </div>
                        <div class="my-3">
                            Rp.0
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
                            Rp.42.000<div class="invisible">1x1</div>
                        </div>
                    </div>
                </div>
                <div class="my-24">
                    <button class="button-orange rounded-full text-white w-full h-16 text-2xl font-semibold">
                        Pay Now    
                    </button>
                </div>
                
            </div>
        </div>
    </div>
</div>
