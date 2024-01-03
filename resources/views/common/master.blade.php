<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('common.header-link')
</head>
<body>
    @include('common.header')
    @yield('home-page')
    @yield('about-page')
    @include('common.footer')
    @include('common.footer-link')
</body>

</html>
