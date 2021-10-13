<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin:0;
                padding:0;
            }
        </style>
    </head>
    <body>
           <div>
                 <div class="header sticky w-full bg-default top-0 h-auto">
               
                    <a href="/" class="h-full w-full bg-default">
                        <img src="{{asset('images/header_logo.png')}}" alt="" class="max-w-full h-auto"> 
                    </a>
               
                </div>
           </div>
    </body>
</html>
