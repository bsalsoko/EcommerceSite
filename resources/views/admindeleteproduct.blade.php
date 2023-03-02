
<div class="container">
<h1> Delete and Update Product </h1>
<table border="1">
    <tr >
        <td>Id<td>
        <td>Name<td>
        <td>price<td>
        <td>category<td>
        <td>description<td>
        <td>gallery<td>
        <td>Operation1</td>  
        <td>Operation2</td>  

    </tr>
@foreach($products as $item)
    <tr >
        <td>{{$item['id']}}<td>
        <td>{{$item['name']}}<td>
        <td>{{$item['price']}}<td>
        <td>{{$item['category']}}<td>
        <td>{{$item['description']}}<td>
        <td><img class="trending-admin-image" style="height: 50px; width: 50px;"  src="{{asset('images/'.$item['gallery'])}}"><td>
        <td><a href={{"delete/".$item['id']}}>Delete</button></td>
        <td><a href={{"edit/".$item['id']}}>Edit</button></td>

    </tr>
@endforeach

</table>

<a href="/adminproductscontrol"> Go Back to Control product</a><br>


</div>