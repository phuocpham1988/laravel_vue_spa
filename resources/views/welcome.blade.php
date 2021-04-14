<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Vue SPA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Fontawesome -->
        <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome-free/css/all.min.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
      <div id="app"></div>
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
