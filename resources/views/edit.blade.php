@extends('layouts.app')

@section('content')
<div class="panel-group">
        <div class="panel panel-danger">
          <div class="panel-heading">Feedback</div>
          <div class="panel-body">
                  @if(Session::has('updated'))
                  <div class="alert alert-warning alert-dismissible session">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong>Testimonial has been Approved successfully!
                  </div>
              @endif
              @if(Session::has('deleted'))
          <div class="alert alert-danger alert-dismissible session">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> Testimonial has deleted successfully!
          </div>
      @endif
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <thead>
                      <td>Created</td>
                      <th>Name</th>
                      <th>Website</th>
                      <th>Feedback</th>
                  </thead>
              </tr>
              <tr>
              <tbody>
                  @foreach ($feedbacks as $feedback)
              <td>{{$feedbacks->created_at}}</td>
                  <td>{{$feedbacks->name}}</td>
                      <td>{{$feedbacks->website}}</td>
                      <td>{{$feedbacks->feedback}}</td>
                      <td>
                          @if($feedbacks->is_active == 1)
      
                              {!! Form::open(['method'=>'PATCH', 'action'=> ['FeedbackController@update', $feedbacks->id]]) !!}
  
                              <input type="hidden" name="is_active" value="0">
      
                                      <div class="form-group">
                                          {!! Form::submit('Un-approve', ['class'=>'btn btn-success']) !!}
                                      </div>
                              {!! Form::close() !!}
                      
                              @else
                  
                              {!! Form::open(['method'=>'PATCH', 'action'=> ['FeedbackController@update', $feedbacks->id]]) !!}
          
                              <input type="hidden" name="is_active" value="1">
  
                              <div class="form-group">
                                  {!! Form::submit('Approve', ['class'=>'btn btn-info']) !!}
                              </div>
                              {!! Form::close() !!}
      
                          @endif
                      </td>
                      <td>
                          {!! Form::open(['method'=>'DELETE', 'action'=> ['FeedbackController@destroy', $feedbacks->id]]) !!}
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
@stop
