<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 
        <style>
            *{
                font-family: 'Baloo Bhaina 2', cursive;
            }
            .border-orange{
                border-color: #F87D09;
            }
            .bg-jenis{
                background-color: #FFFDD1;
            }
            .bg-footer{
                background-color: #171E2B;
            }
            .text-footer{
                color: #A7CDCC;
            }
            .button-orange{
                background-color: #F87D09;
            }
            .text-orange{
                color: #F87D09;
            }
            .button-orange:hover{
                background-color: #D76B06;  
            }
            .button-blue{
                background-color: #004A55;
            }
            .text-primary-blue{
                color: #004A55;
                border-color: #004A55;
            }
            .button-blue:hover{
                background-color: #003F48;
            }
            .carousel-open:checked + .carousel-item {
                position: static;
                opacity: 100;
            }
            .carousel-item {
                -webkit-transition: opacity 0.6s ease-out;
                transition: opacity 0.6s ease-out;
            }
            #carousel-1:checked ~ .control-1,
            #carousel-2:checked ~ .control-2,
            #carousel-3:checked ~ .control-3 {
                display: block;
            }
            .carousel-indicators {
                list-style: none;
                margin: 0;
                padding: 0;
                position: absolute;
                bottom: 2%;
                left: 0;
                right: 0;
                text-align: center;
                z-index: 10;
            }
            #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
            #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
            #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
                color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
            }
        </style>
        <livewire:styles/>
        
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-50">
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @include('layouts.footer')
        <livewire:scripts/>
    </body>
</html>
