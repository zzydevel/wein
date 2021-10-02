<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/styles.css">
        @yield('css')
    </head>
    <body class="flex justify-center items-center bg-gray-50">
        <div class="max-w-screen-xl w-full">
            <header class="flex flex-wrap items-center justify-between bg-gray-50 px-5 md:px-0 sticky top-0 z-50 " style="height: 11vh !important">
                <a class="font-medium text-lg md:text-xl no-underline" href="/">{{ env('APP_NAME') }}</a>
                <img class="h-10 w-10" src="/assets/img/tulip.svg" alt="">
                <a class="" href="/login">Login</a>
            </header>  
            <div class="px-5 md:px-0">
                @yield('content')
            </div>
        </div>
    </body>
</html>