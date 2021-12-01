<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/tailwind.min.css') }}">
    {{-- @yield('head_title') --}}
</head>
<body>
    @include('inc.sidebar')
    @yield('page_content')

</body>
</html>