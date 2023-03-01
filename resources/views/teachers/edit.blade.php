@extends('teachers.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Teacher Page</div>
  <div class="card-body">
      
      <form action="{{ url('teacher/' .$teachers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="fullname" id="fullname" value="{{$teachers->fullname}}" class="form-control"></br>
        <label>Department</label></br>
        <input type="text" name="department" id="department" value="{{$teachers->department}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop