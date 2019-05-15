<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
          body {
          background: linear-gradient(to top left, #003366 0%, #ff66ff 100%);
          background-repeat: no-repeat;
          background-size: cover;
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
    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
