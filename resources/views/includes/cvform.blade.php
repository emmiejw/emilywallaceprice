<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emily Wallace - Price CV</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Damion|Fredericka+the+Great|Lobster+Two|Pacifico|Roboto+Condensed|Satisfy" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
        html{
            /* border: 3px solid black; */
        }
        body{
            /* border: 2px solid gray; */
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 19px;
            margin: 5px;
            padding: 5px;
        }
        em{
            color: grey;
        }

        .workHistory{
            border: 2px solid lightslategray;
            background-color: #F4F6F8;
            padding: 1em;
        }
    </style>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-12 text-center" >
        <h1 class="text-center">Emily Wallace - Price </h1> 
            <br>
                <h5><i style="height:20px; width:20px;" class="fas fa-mobile-alt"></i> <a href="tel:+447722 466017">07722 466017</a> 
              <br> <i  class="far fa-envelope"></i> <a href="mailto:emilywallacceprice@gmail.com"> emilyprice84@outlook.com </a> 
                <br>
                <img style="height:20px; width:20px;" src="https://img.icons8.com/ios/50/000000/globe.png"> <a href="https://emilywallace-price.co.uk">emilywallace-price.co.uk </a>
                <br>
                <i style="height:20px; width:20px;" class="fab fa-github-square"></i> <a href="https://github.com/emmiejw">https://github.com/emmiejw</a></h5>
    </div>
</div>
<hr>
@include('includes/profSum')
<hr>
@include('includes/coreSkills')
<hr>
<div class="row">
    <h2>Work History</h2> 
        <section>
                @include('includes/wdat')
            <br>
        
                @include('includes/ss')
            <br> 
                @include('includes/hh')
            <br>
                @include('includes/admin')
            <br>
                @include('includes/hca')
            <br>
        </section>
<hr>
<div class="row">
        <h2>Education</h2>
        <section>
               @include('includes/udemy')
              <br>
        <h2>Apprenticeship in Business and Administration Advanced Diploma.</h2>
        @include('includes/diploma')

    <h2>Totton College</h2>
            @include('includes/college')
        
            @include('includes/school')

        </section>
    </div>
    <hr>
    @include('includes/personal')


    
</body>
</html>