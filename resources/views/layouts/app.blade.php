<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Babouche travels' }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    {{-- <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png"> --}}

    <script src="{{ asset('assets/js/color-modes.js') }}"></script>

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/css/bootstrap.rtl.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> --}}

    <meta name="theme-color" content="#712cf9" />
    <link href="{{ asset('assets/css/carousel.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/css/carousel.rtl.css') }}" rel="stylesheet"> --}}
    
    {{-- <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet"> --}}
    {{-- <script src="{{ asset('assets/js/app.js') }}"></script> --}}
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" class="astro-vvvwv3sm"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> --}}
</body>
</html>
