<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('layouts.partials.links')

    <title>@yield('title')</title>
</head>

<body>
    <div class="container">

        @include('layouts.partials.header')

        @yield('content')

    </div>

    @include('layouts.partials.scripts')

</body>

</html>
