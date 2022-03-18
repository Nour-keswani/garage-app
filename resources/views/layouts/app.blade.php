<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Jeff en Pettey</title>
</head>
<body>
    {{-- Start Header --}}
    {{-- <header> --}}
        @include('layouts.header')
    {{-- </header> --}}
    {{-- End Header --}}

    @yield('content')

    {{-- Start Fotter --}}
    @include('layouts.footer')
    {{-- End Fotter --}}
</body>
</html>


