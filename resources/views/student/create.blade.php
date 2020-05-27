@extends('master')
@section('content')



<div class="row">
 <div class='col-md-12'>

  <br/>
  <h3 aling='center'>add data</h3>
  <br/>

  <form method='post' action='{{url("student")}}'>
  <div class="form-group">
   <input type='text' name='first_name' class='form-control' placeholder='enter first name' />
  
  </div>

  <div class="form-group">
   <input type='text' name='last_name' class='form-control' placeholder='enter last name' />
  
  </div>

  <div class="form-group">
   <input type='submit' name='last_name' class='btn btn-primary'  />
  
  </div>

  </form>

 </div>


</div>




@endsection('content')
