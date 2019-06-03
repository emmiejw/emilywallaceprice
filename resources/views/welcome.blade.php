@extends('layout')

@section('content')

<div class="position-relative overflow-hidden text-center bg-light title">
  <div class="  mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Developing a New Future</h1>
       <p class="lead font-weight-normal">Self taught Web Developer in Southampton</p>
       <span>
           <img src="images/undraw_programmer_imem.svg" height="200px;" style=" padding:10px;">
       </span>
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
<div class="container">
        <div class="jumbotron da text-center">
                <span>
                        <img class="img-fluid" src="images/undraw_code_typing_7jnv.svg" height="250px;" >
                    </span>
    </div>
</div>



@endsection