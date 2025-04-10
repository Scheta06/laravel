<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/desktop/main-elements.css', 'resources/css/mobile/mobile-main-elements.css'])
</head>

<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
</body>

</html>
