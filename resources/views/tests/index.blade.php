@extends('layouts.app')

@section('content')
@if(Session::has('success'))

        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> BG & Dexcom record has been added successfully!
        </div>
    @endif
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" >Dexcom & Blood Glucose Comparison</div>                  
                    <div class="card-body">
                            <a href="{{ URL::route('tests.create') }}" class="btn btn-info" style="margin: 10px;"> Add Entry</a>
                            <div class="row" style="margin:20px;">
                                <table class="table table-responsive table-hover table-striped table-bordered">
                                    <thead>
                                        
                                        <tr>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Blood Glucose reading</th>
                                            <th>Dexcom Reading</th>
                                            <th>BG Photo</th>
                                            <th>Dexcom Photo</th>
                                            <th>Delete</th>
                                        </tr>
                                        
                                    </thead>
                                    @if($tests->count() > 0)  
                                    <tbody>
                                        @foreach ($tests as $test)
                                            <tr>                                            
                                                <td>{{$test->date}}</td>
                                                <td>{{$test->time}}</td>
                                                <td>{{$test->bg}}</td>
                                                <td>{{$test->dexcom}}</td>
                                                <td><img height="200" width="250" src="{{$test->bg_photo}}" alt="" class="bg_photo"></td>
                                                <td><img height="200" width="250" src="{{$test->dexcom_photo}}" alt="" class="dexcom_photo"></td>                                            
                                                <td><a href="{{ URL::route('tests.destroy', $test->id) }}" class="btn btn-danger" style="margin: 10px;"> Delete</a></td>
                                            </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                          <th class="text-center display-3" colspan="8" style="color:cornflowerblue"> No Current Entries!</th>
                                        </tr>     
                                      @endif  
                                    </tbody>
                                </table>
                            </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
