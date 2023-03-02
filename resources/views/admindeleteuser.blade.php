
<div class="container">
<h1> Delete User </h1>
<table border="1">
    <tr >
        <td>Id<td>
        <td>Name<td>
        <td>Email<td>
        <td>Operation</td>  
    </tr>
@foreach($users as $item)
    <tr >
        <td>{{$item['id']}}<td>
        <td>{{$item['name']}}<td>
        <td>{{$item['email']}}<td>
        <td><a href={{"deleteuser/".$item['id']}}>Delete</button></td>
    </tr>
@endforeach

</table>

<a href="/adminuserscontrol"> Go Back to Control Users</a><br>


</div>