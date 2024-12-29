<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'LA VESTE')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('/css/variables.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/media.css') }}" type="text/css">

    @stack('styles')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

</head>
<body>

    <header>
        @include('components.navbar')
    </header>
    
    <main class='container'>
        @isset($slot)
            {{ $slot }}
        @endisset
    </main>

    <footer>
        @include('components.footer')
    </footer>
    
</body>
</html>
