<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>BULSU e-PROCUREMENT v1.1</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
        {{-- Will change this when login is ready --}}
        {{-- @if (auth()->check()) --}}
        <script>
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('{{ env("PUSHER_APP_KEY") }}', {
                cluster: '{{ env("PUSHER_APP_CLUSTER") }}',
            });

            var channel = pusher.subscribe('new-item-detail');
            channel.bind('App\\Events\\NewItemDetail', function(data) {
                const notifDiv = document.getElementById('for-notif');
                notifDiv.innerHTML = `
                    <div class="p-3 border border-gray-500 text-gray-500 fixed bottom-2 right-2 bg-white rounded-xl">
                        <span class="font-bold">Joenn Aquilino</span> from <span class="font-bold">College of Testing</span> submitted new item: <span class="font-bold">Paper</span>
                        <div class="font-bold"><a href="/admin/manage-item-details/unapproved" class="text-blue-600 no-underline hover:text-blue-500 transition-all ease-in-out">Click here to review.</a></div>
                        <div class="absolute -top-2 -right-2 cursor-pointer text-white bg-red-500 w-6 h-6 text-center rounded-full" onclick="parentNode.remove()">x</div>
                    </div>
                `;
            });
        </script>
        {{-- @endif --}}
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin:0;
                padding:0;
            }
            div#delete--modal {
                    background: rgba(0,0,0,.4);
            }
            .ItemCateg__editModal {
                background: rgba(0,0,0,.4);
            }
        </style>
</head>
<div id="for-notif"></div>