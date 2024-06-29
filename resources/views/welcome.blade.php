<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- Bootstrap --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="antialiased">

        <section class="container">

            <h1 class="text-center my-5" style="font-size: 80px;">Laravel Comics</h1>
                <table class="w-100 bg-transparent">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Comics</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>
                    @foreach ($film as $i => $datas)
                        <tbody>
                          <tr>
                            <th scope="row">#{{$i+1}}</th>
                            <td class="w-25"><img src="{{$datas['thumb']}}" class="card-img-top object-fit-fill border rounded" alt="..." style="height: 100px; width :100px"></td>
                            <td class="w-50">{{$datas['title']}}</td>
                            <td>{{$datas['price']}}</td>
                            <td>
                                <form action="/details" method="GET">
                                    <button type="submit" style="background-color: black; color: greenyellow" name="selected_details" value="<?= $i ?>">
                                        More details
                                    </button>
                                </form>
                            </td>
                          </tr>
                    @endforeach
                        </tbody>
                </table>
        </section>
    </body>
</html>
