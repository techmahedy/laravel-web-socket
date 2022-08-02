<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
    </head>
    <body class="antialiased">
    <div>
        <p id="notify">ABCD</p>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            Echo.channel('events')
                .listen('RealTimeMessage', (e) => {
                    let notify = document.getElementById('notify');
                    notify.innerHTML = e.message;
                });
        });
    </script>
    </body>
</html>
