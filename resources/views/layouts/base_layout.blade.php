<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="antialiased">
    {{-- HEADER(NAVBAR) --}}
       @include('partials.header')
    {{-- MAIN(TABLE) --}}
       @include('partials.main') 
    </body>
</html>