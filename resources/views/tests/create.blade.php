@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dexcom & Blood Glucose Comparison</div>                  
                    <div class="card-body">
                            {!! Form::open(['method'=>'POST', 'action' => 'testController@store', 'files'=>true ])!!}
                            <div class="form-group">
                                {!! Form::label('date', 'Date:') !!}
                                {!! Form::date('date', null, ['class'=>'form-control'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('time', 'Time:') !!}
                                {!! Form::time('time', null, ['class'=>'form-control'])!!}
                            </div>
                            <div class="form-group">
                                  {!! Form::label('bg', 'BG value:') !!}
                                  {!! Form::number('bg', null, ['class'=>'form-control','step'=>'0.1'])!!}
                              </div>
                            <div class="form-group">
                                {!! Form::label('dexcom', 'Dexcom Reading:') !!}
                                {!! Form::number('dexcom', null, ['class'=>'form-control','step'=>'0.1'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('bg_photo', 'BG Photo:') !!}
                                {!! Form::file('bg_photo', null, ['class'=>'form-control'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('dexcom_photo', 'Dexcom Photo:') !!}
                                {!! Form::file('dexcom_photo', null, ['class'=>'form-control'])!!}
                            </div>    
                            <div class="form-group ">
                                {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
                            </div>
                       {!! Form::close() !!}
                            
                    </div>
            </div>
        </div>
    </div>
</div>

@stop
