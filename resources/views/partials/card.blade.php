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