@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Student Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Full name : {{ $students->fullname }}</h5>
        <p class="card-text">age : {{ $students->age }}</p>
        <p class="card-text">Phone : {{ $students->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>