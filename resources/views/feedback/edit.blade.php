@extends('layouts.app')

@section('content')
<br>
<div class="container ypd">
        <div class="panel-group">
          <div class="panel panel-danger">
            <div class="panel-heading">Feedback</div>
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
                                            {!! Form::submit('Un-approve', ['class'=>'btn btn-success']) !!}
                                        </div>
                                {!! Form::close() !!}
                        
                                @else
                    
                                {!! Form::open(['method'=>'PATCH', 'action'=> ['FeedbackController@update', $feedback->id]]) !!}
            
                                <input type="hidden" name="is_active" value="1">

                                <div class="form-group">
                                    {!! Form::submit('Approve', ['class'=>'btn btn-info']) !!}
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
            
            </div>
          </div>
        </div>
    

