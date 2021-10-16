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
           <div id="app" class="max-w-full">
    
                 <div class="header-bottom sticky w-full bg-default top-0 h-auto">
                    <a href="/" class="h-full w-full bg-default">
                        <img src="{{asset('images/header_logo.png')}}" alt="" class="w-3/5 h-auto"> 
                    </a>
                </div>
                <dashboard-carousel></dashboard-carousel>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 xl:gap-8 ">
                    <div class="content p-2 mt-4">
                            <div class="content-title">
                               <h2 class="color-default text-3xl font-bold">The BulSU Transparent Seal</h2>
                            </div>
                            <div class="content-body">
                            A pearl buried inside a tightly-shut shell is practically worthless. Government information is a pearl, meant to be shared with the public in order to maximize its inherent value.The Transparency Seal, depicted by a pearl shining out of an open shell, is a symbol of a policy shift towards openness in access to government information. On the one hand, it hopes to inspire Filipinos in the civil service to be more open to citizen engagement; on the other, to invite the Filipino citizenry to exercise their right to participate in governance…
                            <br>
                            <a href="bulsu.edu.ph/transparency-seal/" class="color-default-link text-xl">Read more...</a>
                            </div>
                    </div>
                    <div class="content p-2 mt-4">
                        <div class="content-title">
                                <h2 class="color-default text-3xl font-bold">About BulSU</h2>
                                </div>
                                <div class="content-body">
                                Bulacan State University (BulSU) is a state-funded institution of higher learning established in 1904 and converted into a university in 1993 by virtue of Republic Act 7665.The University in mandated to provide higher professional/technical and special instruction for special purpose and to promote research and extension services, advanced studies and extension services, advanced studies and progressive leadership in Engineering, Architecture, Education, Art and Science, Fine Arts, Information Technology, Technical courses, Commerce…
                                </div>
                        </div>
                    <div class="content">

                    
                    </div>
                </div>
                

           </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
