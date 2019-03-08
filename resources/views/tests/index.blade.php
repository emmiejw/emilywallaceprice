@extends('layouts.app')

@section('content')
@if(Session::has('success'))

        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> BG & Dexcom record has been added successfully!
        </div>
    @endif
    @if(Session::has('deleted'))

        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> BG & Dexcom record has been deleted successfully!
        </div>
    @endif
    @if(count($errors) > 0)
    <ul class="list-group">
        @foreach ($errors->all() as $error)
          <li class="list-group-item text-danger">
              {{ $error }}
          </li>  
        @endforeach
    </ul>
    @endif    
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" >Dexcom & Blood Glucose Comparison</div>                  
                    <div class="card-body">
                            <a href="{{ URL::route('tests.create') }}" class="btn btn-info" style="margin: 10px;"> Add Entry</a>
                            {{-- <a href="{{ URL::to('/tests/pdf') }}">Export PDF</a> --}}
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
                                                <td>{{number_format($test->bg, 1)}}</td>
                                                <td>{{number_format($test->dexcom, 1)}}</td>
                                                <td>
                                                    <img  width="200" height="300" src="{{$test->bg_photo}}" alt="" class="bg_photo"></td>
                                                <td>
                                                    <img  width="200" height="300" src="{{$test->dexcom_photo}}" alt="" class="dexcom_photo"></td>                                            
                                                <td>
                                                    {!! Form::open(['method'=>'DELETE', 'action'=> ['testController@destroy', $test->id]]) !!}
                                                    <br>
                                                    <div class="form-group">
                                                        {!! Form::submit('Delete', ['class'=>'btn btn-danger ']) !!}
                                                    </div>
                                                    {!! Form::close() !!}
                                                </td>
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
                            <div class="pagination justify-content-center">
                                {{ $tests->links() }}
                            </div>
                    </div>
            </div>
           
        </div>
    </div>
</div>
@endsection
