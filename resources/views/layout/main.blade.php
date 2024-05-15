<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wines-Team</title>


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
