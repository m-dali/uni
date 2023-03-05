@extends('courses.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Course Page</div>
  <div class="card-body">
      
      <form action="{{ url('course') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Student id</label></br>
         {{Form::select('student_id', $students,null,['placeholder' => 'Pick an id...']) }}</br>
        <label>Teacher id</label></br>
         {{Form::select('teacher_id', $teachers,null,['placeholder' => 'Pick an id...']) }}</br>
        <input  type="submit"
         value="Save" class="btn btn-success"></br>
    </form>
    <div class="input-group mb-3">
  </div>
</div>
  </div>
</div>
@stop