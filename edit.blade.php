<h1>Update Form</h1>
<form action="/edit" method="POST">
@csrf
<input type="hidden" name="id" value={{$data['id']}} >
<input type="text" name=first_name" value="{{$data['first_name']}}" > <br> <br>
<input type="text" name=last_name" value="{{$data['last_name']}}"> <br> <br>
<input type="text" name=gender" value="{{$data['gender']}}"> <br> <br>
<input type="text" name=qualifications" value="{{$data['qualifications']}}" > <br> <br>
<input type="text" name=email" value="{{$data['email']}}" > <br> <br>
<Button type="submit"> Update</Button>
</form>