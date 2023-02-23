<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

       

        
    </head>
    <body class="">
       <h1>welcome this is a test to check whether it is working or not</h1>
       <a href="">Login</a>
       <a href="{{route('register.index')}}">signup</a>
    </body>
</html>
