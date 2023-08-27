<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <script src="https://kit.fontawesome.com/129d87356c.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="min-h-screen bg-gray-200">
        @yield('container')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

</body>
</html>