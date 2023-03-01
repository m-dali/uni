@extends('teachers.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Teacher Page</div>
  <div class="card-body">
      
      <form action="{{ url('teacher') }}" method="post">
        {!! csrf_field() !!}
        <label>Full name</label></br>
        <input type="text" name="fullname" id="fullname" class="form-control"></br>

        <label>Department</label></br>
        <input type="text" name="department" id="department" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop