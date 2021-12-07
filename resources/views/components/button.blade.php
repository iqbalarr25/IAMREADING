<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Baloo Bhaina 2', cursive;
        }
        .button{
            background-color: #F87D09;
        }
        .button:hover{
            background-color: #D76B06;  
        }
    </style>
</head>
<body>
    <div class=" button  border border-transparent rounded-md active:bg-yellow-600 focus:border-transparent focus:ring ring-gray-300 tracking-widest hover:bg-yellow-600  focus:outline-none  disabled:opacity-25 transition ease-in-out duration-150 shadow-md">
        <button class=" text-2xl inline-flex px-14 py-4 items-center font-semibold text-xs text-white">{{ $slot }}</button>
    </div>
</body>
</html>