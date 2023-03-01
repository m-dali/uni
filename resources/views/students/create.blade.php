@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contact Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Full name</label></br>
        <input type="text" name="fullname" id="fullname" class="form-control"></br>
        <label>Age</label></br>
        <input type="number" name="age" id="age" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop