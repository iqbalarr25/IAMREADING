<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Baloo Bhaina 2', cursive;
        }
        .button-orange{
            background-color: #F87D09;
        }
        .button-orange:hover{
            background-color: #D76B06;  
        }
    </style>
</head>
<body>
    <div class="min-h-screen flex flex-col bg-white">
        @include('layouts.navigation-auth')

        <div class="flex mt-16">
            <div class=" w-full h-full">
                <div class="bg-gray-50 rounded-2xl py-16">
                    <div class="grid grid-cols-10 mt-12 flex">
                        <div class=" col-start-2 col-span-4">
                            <div class="text-4xl font-bold text-left min-w-min">Register to login!</div>
                            <div class="mt-14">
                                {{ $slot }}
                            </div>
                            </div>
                            <div class=" col-start-7 col-span-3 object-center justify-center">
                                <div class=" text-5xl font-black mb-2 mt-8">Invite</div></br>
                                <div class=" text-5xl font-black mb-2">Friends and</div></br>
                                <div class=" text-5xl font-black mb-12">Get Promo</div></br>
                                <div class=" text-7xl font-black text-red-700">UP TO</div></br> 
                                <div class=" text-8xl font-black text-red-700">80%</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="mt-32">
                    <img src="{{ asset('img/itsuki.png') }}" alt="" class=" max-w-max" >
                </div>
            </div>
        </div>
    </div>
</body>
</html>



