@extends('teachers.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Teacher Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Full name : {{ $teachers->fullname }}</h5>
        <p class="card-text">Department : {{ $teachers->department }}</p>
  </div>
       
    </hr>
  
  </div>
</div>