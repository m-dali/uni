@extends('courses.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">course Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $courses->fullname }}</h5>
        <p class="card-text">Student ID : {{ $courses->student_id }}</p>
        <p class="card-text">Teacher ID : {{ $courses->teacher_id }}</p>
  </div>
       
    </hr>
  
  </div>
</div>