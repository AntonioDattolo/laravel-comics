<section class="container d-flex justify-content-center flex-wrap">
    <h1 class="text-center my-5 col-12" style="font-size: 80px;">Laravel Comics</h1>
    <table class="w-100 bg-transparent col-12 text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Comics</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        @foreach ($film as $indice => $datas)
        <tbody>
            <tr>
                <th scope="row">#{{$indice+1}}</th>
                <td class="w-25"><img src="{{$datas['thumb']}}" class="card-img-top object-fit-fill border rounded"
                        alt="..." style="height: 100px; width :100px"></td>
                <td class="w-50">{{$datas['title']}}</td>
                <td>{{$datas['price']}}</td>
                <td>
                   <a href='/details/{{$indice}}' style="color: greenyellow; text-style:none;">
                        <button type="submit" style="background-color: black; color: greenyellow">
                            More details
                        </button>
                    </a> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>