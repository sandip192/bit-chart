<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Chart | {{$title ??''}}</title>  
      </head>
      <body class="antialiased"> 
      <div class="container jumbotron text-center">
           @yield('body')
        
        </div>
        <script src="{{asset('js/Chart.js')}}"></script>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src = "{{asset('js/jquery-ui.js')}}"></script>
         <link href = "{{asset('css/jquery-ui.css')}}" rel = "stylesheet">
         <script src="{{asset('js/moment.min.js')}}"></script> 
         
        @yield('javascript')
      </body>
</html>