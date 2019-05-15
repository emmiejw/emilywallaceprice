@extends('layout')

@section('content')
@if(Session::has('success'))

<div class="alert alert-success alert-dismissible session">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Thank you!! Your feedback has been submitted successfully! 
</div>
@endif  
<div class="container ">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 feedbk1 borders">
            <center>
                    <h1>Customer Feedback</h1>
                    <br>
                    <p>I really appreciate you taking the time to leave me feedback or comments , this helps me to develop my skills aswell as my customer service. <br>
                    <h3>Many thanks for taking your time to post and read my feedback</h3>
                    </p>
            </center>
        </div>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 feedbk borders">
        
    <br>
        @foreach ($feedbacks as $feedback)
            <h3><a href="{{$feedback->website}}">{{$feedback->website}}</a></h3>
            
                <blockquote>    
                             
                    <p class="text-center writing" style="margin:4%;"><img style="height:13px; margin-bottom:22px; margin-right:22px"src="https://img.icons8.com/color/48/000000/quote-left.png">{{$feedback->feedback}}<img src="https://img.icons8.com/color/50/000000/quote-right.png" style="height:13px; margin-bottom:22px; margin-left:22px;"></p>    
                    <footer> <b style="">-  {{$feedback->name}} </b></footer>
                    <p>Posted on: {{$feedback->created_at}}</p>
                </blockquote>
        @endforeach
<br>
<h1 class="text-center" style="color:blueviolet; font-family: 'Caveat Brush', cursive;">I would love to hear what you think!</h1>
<br>
{!! Form::open(['method'=>'POST', 'action' => 'FeedbackController@store'])!!}
          <div class="form-group">
              {!! Form::label('name', 'Your name or Company Name:') !!}
              {!! Form::text('name', null, ['class'=>'form-control'])!!}
          </div>
          <div class="form-group">
                {!! Form::label('website', 'Your website:') !!}
                {!! Form::text('website', null, ['class'=>'form-control'])!!}
            </div>
          <div class="form-group">
              {!! Form::label('feedback', 'Your message:') !!}
              {!! Form::textarea('feedback', null, ['class'=>'form-control'])!!}
          </div>
          <div class="form-group ">
              {!! Form::submit('Submit Feedback', ['class'=>'btn btn-primary']) !!}
          </div>
     {!! Form::close() !!}
</div>
        @endsection