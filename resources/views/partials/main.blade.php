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
        <tbody>
            @foreach ($comics as $indice => $datas)
            @include('partials.card')
            @endforeach
        </tbody>
    </table>
</section>