@extends('layouts.app')

@section('content')
<br>
<div class="container ypd">
        <div class="panel-group">
          <div class="panel panel-danger">
              <br>
            <div class="panel-heading  text-center"><h1>Feedback</h1></div>
            <br>
            <div class="panel-body">
                    @if(Session::has('updated'))
                    <div class="alert alert-warning alert-dismissible session">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong>Feedback has been Approved/Unapproved successfully!
                    </div>
                @endif
                @if(Session::has('deleted'))
            <div class="alert alert-danger alert-dismissible session">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Feedback has been deleted successfully!
            </div>
        @endif
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <thead>
                        <th>Name</th>
                        <th>Website</th>
                        <th>Feedback</th>
                        <th>Action</th>
                        <th>Delete</th>
                    </thead>
                </tr>
                <tr>
                <tbody>
                    @foreach ($feedbacks as $feedback)
                        <td>{{$feedback->name}}</td>
                        <td>{{$feedback->website}}</td>
                        <td>{{$feedback->feedback}}</td>

                        <td>
                            @if($feedback->is_active == 1)
        
                                {!! Form::open(['method'=>'PATCH', 'action'=> ['FeedbackController@update', $feedback->id]]) !!}

                                <input type="hidden" name="is_active" value="0">
        
                                        <div class="form-group">
                                            {!! Form::submit('Hide', ['class'=>'btn btn-success']) !!}
                                        </div>
                                {!! Form::close() !!}
                        
                                @else
                    
                                {!! Form::open(['method'=>'PATCH', 'action'=> ['FeedbackController@update', $feedback->id]]) !!}
            
                                <input type="hidden" name="is_active" value="1">

                                <div class="form-group">
                                    {!! Form::submit('Show', ['class'=>'btn btn-info']) !!}
                                </div>
                                {!! Form::close() !!}
        
                            @endif
                        </td>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=> ['FeedbackController@destroy', $feedback->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach   
                </tbody> 
              </table>
            </div>
            
            </div>
            <center>
                <button><a href="/feedback">Return to Feedback Page</a></button>
                <br><br>
                <button><a href="/home">Home</a></button>
            </center>
            </div>
            <br>
          </div>
        </div>
    

