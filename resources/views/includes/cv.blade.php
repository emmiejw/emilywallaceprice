@extends('layout')

@section('content')
<style>
        div.gallery {
          margin: 5px;
          border: 1px solid #ccc;
          float: left;
          width: 180px;
        }
        
        div.gallery:hover {
          border: 1px solid #777;
        }
        
        div.gallery img {
          width: 100%;
          height: auto;
        }
        
        div.desc {
          padding: 15px;
          text-align: center;
        }
        .comingsoon {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
            }
        </style>
<div class="container">
    <div class="jumbotron cv text-center">
        <h1>Emily Wallace - Price</h1>
        <address><i class="fas fa-home"></i> 52 Cadland Park, Holbury, Southampton SO45 2PF</address>
        <h5><i style="height:20px; width:20px;" class="fas fa-mobile-alt"></i> <a href="tel:+447722 466017">07722 466017</a>  <i  class="far fa-envelope"></i> <a href="mailto:emilywallacceprice@gmail.com"> emilywallacceprice@gmail.com </a> 
            <br><br>
            <img style="height:20px; width:20px;" src="https://img.icons8.com/ios/50/000000/globe.png"> <a href="http://www.emilywallaceprice.co.uk">www.emilywallaceprice.co.uk </a><i style="height:20px; width:20px;" class="fab fa-github-square"></i> <a href="https://github.com/emmiejw">https://github.com/emmiejw</a></h5>
    </div>
    <br>
    <div class="container">
    <div class="jumbotron da text-center">
        <h1>My CV</h1>
        <br>
        <div class="row">
             <div class="col-md-4">
                <img src="images/comingsoon.png" class="comingsoon" style="width:90%;">
             </div>
        </div>
    </div>
        
        {{-- <a href="">EmilyWallacePrice.pdf</a> --}}
    </div>
      
        <br>
<div class="container">
        <div class="jumbotron ypd text-center">
        <h1>Course Completion Certificates</h1>
        <br>
        <div class="row">
                <div class="col-md-4">
                  <h4>Programming fundimentals</h4>
                  <div class="thumbnail">
                    <a href="images/prog.png">
                      <img src="images/prog.png" style="width:100%">
                    </a>
                    <div class="caption">
                        <p>My first course learning programming fundimentals</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <h4>Object Orientated programming</h4>
                    <div class="thumbnail">
                        <a href="images/ord.png">
                        <img src="images/ord.png" style="width:100%">
                        </a>
                        <div class="caption">
                            <p>Object Orientated programming</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                  <h4>Python</h4>
                    <div class="thumbnail">
                        <a href="images/python.png">
                        <img src="images/python.png" style="width:100%">
                        </a>
                        <div class="caption">
                            <p>This was the first course I began to learn programming in a language with console command line</p>
                        </div>
                    </div>
                </div>
              </div>
                <div class="row">
                        <div class="col-md-4">
                           <h4>Fullstack Web Development</h4>
                            <div class="thumbnail">
                                <a href="images/fullstack.png">
                                <img src="images/fullstack.png" style="width:100%">
                                </a>
                                <div class="caption">
                                    <p>I decided I needed to learning HTMl5, CSS, Php, Mysql and Javascript and how all these technologies work together</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                          <h4>Laravel Php Framework</h4>
                            <div class="thumbnail">
                                <a href="images/laravel.png">
                                <img src="images/laravel.png" style="width:100%">
                                </a>
                                <div class="caption">
                                    <p>My confidence grow after completing the fullstack course but after researching I learnt about frameworks and how this is the way forward for web development and love the logic of Laravel's MVC</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                          <h4>Bootstrap 4</h4>
                            <div class="thumbnail">
                                <a href="images/bootstrap4.png">
                                <img src="images/bootstrap4.png" style="width:100%">
                                </a>
                                <div class="caption">
                                    <p>I love using Bootstrap as a front-end design framework</p>
                                </div>
                            </div>
                        </div>
                    </div>         
                    <div class="row">
                            <div class="col-md-4">
                              <h4>Laravel Chat App</h4>
                                <div class="thumbnail">
                                    <a href="images/laravelrealtime.png">
                                    <img src="images/laravelrealtime.png" style="width:100%">
                                    </a>
                                    <div class="caption">
                                        <p>I enjoyed this course and building a app like whatsApp to send messages and see when the other person types using Broadcast and Pusher</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                              <h4>Django Python Framework</h4>
                                <div class="thumbnail">
                                    <a href="images/django.png">
                                    <img src="images/django.png" style="width:100%">
                                    </a>
                                    <div class="caption">
                                        <p>I really like the ease of programming with a Model View Controller framework and wanted to see what it was like in a different language to Php</p>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
</div>
@endsection
