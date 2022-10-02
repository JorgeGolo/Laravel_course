<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
    <style>
        .active {
            font-weight: bold;
            color: red
        }
    </style>

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

</head>
<body>
    <!-- header -->
    <!-- nav -->

    @include('layouts/partials/header')

    @yield('content')

    <!-- footer -->

    @include('layouts/partials/footer')

    <!-- script -->
</body>
</html>