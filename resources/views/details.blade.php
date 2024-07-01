<?php
// $comic_selected = array_key_exist('selected_details', $_GET) ? $_GET['selected_details'] : '';

?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" src="{{URL::to('fav-icon.ico')}}">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/style.css">
</head>

<body class="antialiased">
    @include('partials.header')
    <section class="container d-flex flex-wrap">
        <h1 class="col-12 text-center p-1">
            {{$film['title']}}
        </h1>
        <h3 class="col-12 text-center p-1">SERIES : {{$film['series']}}</h3>
        <h5 class="col-12 text-center p-1">
            {{$film['type']}}
        </h5>
        <div class="col-5 p-1">
            <img src="{{$film['thumb']}}" style="object-fit: contain; width:100%;" alt="">
        </div>
        <div class="col-7 align-self-center p-5 " style="font-size: 27px;">
            <p>
                {{$film['description']}}
            </p>
        </div>
        <div class="col-12 d-flex p-1">
            <h4 class="col-8">
                Sale Date :
                {{$film['sale_date']}}
            </h4>
            <h5 class="col-4 text-end p-1" style="font-size: 35px;">
                {{$film['price']}}
            </h5>
        </div>
    </section>
</body>

</html>