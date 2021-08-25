@if(Session::get('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif

@if(Session::get('fail'))
<div class="alert alert-danger">
    {{Session::get('fail')}}
</div>
@endif
/*
 1. Normal HTML FORM is made, form-group -> proper gruoping of labels,validation,span-> popup when user doesnt enter any fields. 
 */
<form  method="post" action="add" > 
   @csrf     
   
          <div class="form-group">   
              <h1>FORMS</h1>   
              <label for="first_name">First Name:</label><br/><br/>  
              <input type="text" class="form-control" name="first_name" placeholder="enter first_name" value="{{old('first_name')}}"/>
              <span style="color:red">@error('first_name'){{ $message}} @enderror</span><br/><br/>  
          </div>  
<div class="form-group">      
<label for="first_name">Last Name:</label><br/><br/>  
              <input type="text" class="form-control" name="last_name" placeholder="enter last_name" value="{{old('last_name')}}"/>
              <span style="color:red">@error('last_name'){{ $message}} @enderror</span><br/><br/>  
          </div>  
<div class="form-group">      
              <label for="gender">Gender:</label><br/><br/>  
              <input type="text" class="form-control" name="gender" placeholder="enter gender" value="{{old('gender')}}">
              <span style="color:red">@error('gender'){{ $message}} @enderror</span><br/><br/>  
          </div>  
<div class="form-group">      
              <label for="qualifications">Qualifications:</label><br/><br/>  
              <input type="text" class="form-control" name="qualifications" placeholder="enter qualifications" value="{{old('qualifications')}}"/>
              <span style="color:red">@error('qualifications'){{ $message}} @enderror</span><br/><br/>  
          </div>  

<div class="form-group">      
              <label for="email">email:</label><br/><br/>  
              <input type="text" class="form-control" name="email" placeholder="enter email" value="{{old('email')}}"/>
              <span style="color:red">@error('email'){{ $message}} @enderror</span><br/><br/>  
          </div>  
          
          <div class="form-group">
          <input type="file" name="file"> <br> <br>
          <button type="submit"> Upload File</button>

</br></br>
<button type="submit" class="btn-btn" >Insert</button>  
</form>  
  