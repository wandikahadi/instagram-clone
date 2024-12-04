<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 py-10">
     @include('layouts.sidebar')
     <div class="p-4 sm:ml-64">
        @yield('content')
     </div>
</body>
</html>