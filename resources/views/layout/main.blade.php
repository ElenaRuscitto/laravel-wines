<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wines-Team</title>

    {{-- font Awesom --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Styles -->
    @vite('resources/js/app.js')




</head>
<body>


    <body>

        @include('partials.header')


    <main class="bg-dark">
        @yield('content')
    </main>


        @include('partials.footer')


</body>
</html>



<style>
    img{
        max-height: 500px;
        object-fit: contain
    }
</style>
