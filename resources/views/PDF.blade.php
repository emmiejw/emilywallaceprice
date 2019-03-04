
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
                                                <td><img height="150" width="200" src="{{$test->bg_photo}}" alt="" class="bg_photo"></td>
                                                <td><img height="150" width="200" src="{{$test->dexcom_photo}}" alt="" class="dexcom_photo"></td>                                            
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


   
    
