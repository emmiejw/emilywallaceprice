@extends('layout')

@section('content')

<div class="position-relative overflow-hidden text-center bg-light title">
  <div class="  mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Developing a New Future</h1>
       <p class="lead font-weight-normal">Self taught Web Developer in Southampton</p>
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>
<br>
    @include('hh')
<br>
    @include('ss')
<br>
    @include('wd&at')
<br>
    @include('laravelprojects')
<br>
    @include('djangoprojects')
<br>
    @include('aspnetprojects')
    <br>
    @include('reactprojects')
<br>
    {{-- @include('feedback')  --}}

@endsection