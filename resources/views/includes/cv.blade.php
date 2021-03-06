@extends('layout')

@section('content')
<style>

        .emily {
          position:absolute
          text-align: center;
          opacity: 0.8;
        }
        .centered {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          background-color: aliceblue;
          opacity: 0.8;
        }

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
            <h1>     Emily Wallace - Price       </h1>
            <span>
                <img src="images/profile.svg" height="150px;">
            </span> <br><br>
            <center>
              <table>
                      <tr>
                          <td>
                              <i style="height:20px; width:20px;" class="fas fa-mobile-alt"></i>
                          </td>
                              <td style="padding-left:15px;">
                                      <a href="tel:+447722 466017">07722 466017</a> 
                              </td>
                      </tr>
                      <tr>
                          <td>
                                  <i  class="far fa-envelope"></i>
                          </td>
                          <td style="padding-left:15px;">
                                  <a href="mailto:emilywallacceprice@gmail.com"> emilyprice84@outlook.com </a>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <img style="height:20px; width:20px;" src="https://img.icons8.com/ios/50/000000/globe.png">
                          </td>
                          <td style="padding-left:15px;">
                              <a href="https://emilywallace-price.co.uk">emilywallace-price.co.uk </a>
                          </td>
                      </tr>
                      <tr>
                          <td>
                                  <i style="height:20px; width:20px;" class="fab fa-github-square"></i> 
                          </td>
                          <td style="padding-left:15px;">
                              <a href="https://github.com/emmiejw">https://github.com/emmiejw</a>
                          </td>
                      </tr>
                  </table>
              </center>
        </div>
      </div>
    <br>
    <div class="container">
      <div class="jumbotron da text-center">
          <h1>My CV</h1>
          <br>
          <embed src="images/Emily Wallace - Price CV.pdf" height="500px" width="100%">  
             </div>
        </div>
    </div>
        
        {{-- <a href="">EmilyWallacePrice.pdf</a> --}}
    </div>
    <div class="container">
        <div class="jumbotron ypd text-center aboutme">
        <h1>About Me</h1>
        <img src="images/me.jpg" style="height:150px; width:150px; border: 2px solid blueviolet;">
        <br>
        <br>
          <p>As you can already tell my name is Emily but I'm also known as Emmie. I've lived in Southampton all my life. 
          </p>
          <p>
              I have  had Type One Diabetes for 31 years this year (2019).
              I've got a Medical Detection Dog called Toby, who has been with me for 7 years, who is now retired. Toby has helped me beyond what I imagined possible. When I lost the ability to detect my low blood glucose levels I was partnered with Toby and he gave me back my independence. 
              In the last few years I've gained the confidence to do public speaking to raise money and awareness for the charity, this was something I would never have had the confidence to do before.
              Towards the end of 2014 I was blessed with the birth of my beautiful son Lewis, who is my driving force to make my life better for both myself and him.
          </p>
          <p>
              Prior to learning web development I worked within the care industry but due to health changes with my T1D I was no longer able to continue this line of work.
              Within a new role in Southampton's Community Nursing Services admin team I took on roles around educating staff how to use new technologies, such as blackberries and then notebooks to keep records online with SystemOne. I became a trainer for the SystemOne role out, which was a challenge because not all the staff embraced the new system so needed a bit more convincing and training that paperless records were the way forward. I also worked very closely with the Service Manager in creating a spreadsheet that worked out a daily alert system to define each community nursing teams capacity for new patients.This report was then escalated daily to senior management to liaise with  the Hospital Discharge Team. This process was to ensure patients are safely discharged home with a team that could accommodate their nursing needs.
          </p>
         
            <p>
            When I became a Mum in 2014 I decided I wanted a change in direction for my career. My influence and inspiration has been in my younger brother Seb, who works in the web development industry and has a keen fascination into Machine Learning. 
            It took me a number of months to get my head round how all the different technologies in development worked and as I've progressed I've found my passion lies more in back-end development and exploring how data can be manipulated and used. Diabetes technology has also come on leaps and bounds and I'm fascinated by it and now Machine Learning is now helping me have tighter controller over my condition on a minute by minute basis. 
            </p>
            <p>
           <b>I'm only starting on my web development journey and I'm exciting about the new skills I can learn and the projects I will take on and succeed at! </b> 
          </p>
        <img src="images/tl.JPG" style="height:150px; width:150px; border: 2px solid navy;">

        </div>

    </div>
</div>
      
        <br>
<div class="container">
        <div class="jumbotron ypd text-center">
        <h1>Course Completion Certificates</h1>
        <br>
        <div class="row">
                {{-- <div class="col-md-4">
                  <h4>Programming fundimentals</h4>
                  <div class="thumbnail">
                    <a href="images/prog.png">
                      <img src="images/prog.png" style="width:100%">
                    </a>
                    <div class="caption">
                        <p>My first course learning programming fundimentals</p>
                    </div>
                  </div>
                </div> --}}
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
