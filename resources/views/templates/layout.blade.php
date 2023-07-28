<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    @yield('page_css')
    @yield('head_js')

</head>

<body>
    @yield('header')
    @yield('content')
    @yield('footer')
    @yield('page_js')
</body>

</html>