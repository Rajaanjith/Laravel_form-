<h1>List</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>first_name</td>
        <td>last_name</td>
        <td>gender</td>
        <td>qualifications</td>
        <td>email</td>
        <td>Operation</td>
</tr>
@foreach($cruds as $crud)
<tr>
    <td>{{$crud['id']}}</td>
    <td>{{$crud['first_name']}}</td>
    <td>{{$crud['last_name']}}</td>
    <td>{{$crud['gender']}}</td>
    <td>{{$crud['qualifications']}}</td>
    <td>{{$crud['email']}}</td>
    <td><a href={{"delete/".$crud['id']}}>Delete</a>
    <a href={{"edit/".$crud['id']}}>Edit</a></td>
</tr>
@endforeach
</table>
