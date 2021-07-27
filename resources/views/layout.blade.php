
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Emily Wallace - Price</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Damion|Fredericka+the+Great|Lobster+Two|Pacifico|Roboto+Condensed|Satisfy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Caveat+Brush" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charm|Marck+Script|Tangerine" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <style>

      body {
          background: linear-gradient(to top left, #003366 0%, #ff66ff 100%);
          border:solid silver;
          font-family: 'Roboto Condensed', sans-serif;
          font-size: 20px;
      }

      nav{
          border:solid silver;
      }

      .title{
        border: solid #c4c4c4;
        border-width: 6px;
      }

      .footer{
        border: solid violet;
      }

      .ypd{
            background-color:whitesmoke;
            border:7px solid #c5d6ff;
      }

      .ss , .cv{
            background-color:whitesmoke;
            border: 5px solid #a76cff;
      }
      .da{
        background-color:whitesmoke;
        border: 5px solid blue;
      }

      .laravel{
        background-color:whitesmoke;
        border: 5px solid #5499C7;
      }

      .django{
        background-color:whitesmoke;
        border: 5px solid teal;
      }
      .aspnet{
        background-color:whitesmoke;
        border: 5px solid purple;
      }

      .react{
        background-color:whitesmoke;
        border: 5px solid lightblue;
      }

      .feedbk, .aboutme{
        background-color:whitesmoke;
        border: 7px solid #e400e4;
      }
      .feedbk1{
        background-color:whitesmoke;
        border: 7px solid mediumslateblue;
      }

      .writing{
        font-family: 'Bad Script', cursive;

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

        .contact{
          background-image: url('images/undraw_contact_us_15o2.svg');
          background-size: cover;
        }


      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
        .photos{

        }
      }
    </style>

  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark justify-content-center fixed-top">
            <a class="navbar-brand" href="/" style="font-family: 'Roboto Condensed', sans-serif;"><img
                    src="https://img.icons8.com/nolan/64/source-code.png" style="height: 50px;"/> Emily Wallace -
                                                                                                   Price</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link" href="https://github.com/emmiejw"><img src="https://img.icons8.com/nolan/64/github.png"/>My Github<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/cv"><img src="https://img.icons8.com/nolan/64/resume.png"/> My CV</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="/feedback"><img src="https://img.icons8.com/nolan/64/comments.png"/> Customer Feedback</a>
                  </li> --}}
                <li class="nav-item">
                <a class="nav-link" href="mailto:emilyprice84@outlook.com"><img src="https://img.icons8.com/nolan/64/filled-message.png"/>Email me</a>
                </li>
            </ul>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <main class="py-4">
                @yield('content')
            </main>


<footer>
    <div class="jumbotron footer">
        <div class="container text-center">

        <h4> <i class="far fa-copyright"></i> Emily Wallace - Price {{  date('Y')}}</h4>
                Icons by:
                <br>
                <a href="https://icons8.com/icon/43999/email">Email icon by Icons8</a>
                <a href="https://icons8.com/icon/52539/github">GitHub icon by Icons8</a>
                <a href="https://icons8.com/icon/43615/documents">Documents icon by Icons8</a>
                <a href="https://icons8.com/icon/19896/get-quote">Get Quote icon by Icons8</a>
                <a href="https://pngtree.com/free-icons/net">free net icons</a>
                <a href="https://pngtree.com/free-icons/bootstrap">free bootstrap icons</a>
                <a href="https://pngtree.com/">Graphics from pngtree.com</a>
        </div>
        <br>
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
    </div>
</footer>
<script>
  $('.expand-button').on('click', function(){
  $('.special-text').toggleClass('-expanded');

  if ($('.special-text').hasClass('-expanded')) {
    $('.expand-button').html('Collapse Content');
  } else {
    $('.expand-button').html('Continue Reading');
  }
});
    function hhFunction() {
        document.getElementById("hh").innerHTML = "To make the website more dynamic and secure  I created an admin area, which only authenticated staff members could access. The team could then view individual client diaries (clients are only able to view their own diary for confidentiality). This helps with continuous assessment as and when it is needed. Within the admin area I also created a separate section for the team to hold clinical trial records. Due to this being a new method of data collection for the clients I produced 'How to use guide' with descriptions and screenshots and for those who prefer a video I added a demonstration video using my mobile phone.";
    }
    function ssFunction() {
        document.getElementById("ss").innerHTML = "The Manager wanted to be able to authorise feedback posts before they appeared on the site, so I added an authorisation functionality within the admin panel, therefore posts could be easily read and then a click of a button authorised or deleted. I used Laravel email notifications so the Manager receives an email alerting her of any new testimonial awaiting approval. I enjoyed designing the frontend of the website. I utilised the logo they already had, which is rainbow footprints with 'Stepping Stones' and  I decided to go with a rainbow colour wash to compliment the logo and support the artistic talents within the pre-school.";
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
<script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
</script>
</body>
</html>
