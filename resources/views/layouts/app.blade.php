<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Midwestern Interactive</title>

        <!-- Import fonts: -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    
        <!-- Import External Stylesheets -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        
        <!-- Import External Javascript: -->
        <script src="{{ URL::asset('js/mwi.js') }}"></script>
    
    </head>
    <body>
        <div class="mwi-full-layout">
            <div class="mwi-full-content"mwi-full-width-content>
                @include('components/navigation')
                @yield('content')
            </div>
        </div>
    </body>
</html>