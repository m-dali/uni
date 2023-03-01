@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Student Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="fullname" id="fullname" value="{{$students->fullname}}" class="form-control"></br>
        <label>age</label></br>
        <input type="number" name="age" id="age" value="{{$students->age}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop