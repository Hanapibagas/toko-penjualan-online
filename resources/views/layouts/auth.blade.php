<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @include('includes.pages.style')
    @stack('addon-style')

</head>

<body>
    @include('includes.pages.navbar-auth')

    @yield('content')

    @include('includes.pages.footer')

    @include('includes.pages.script')
    @stack('addon-script')
</body>

</html>