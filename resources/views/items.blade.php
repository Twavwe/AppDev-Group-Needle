<!DOCTYPE html>
    <html>
    <head>
      <title>ToDo List</title>
      @include('components.navbar')
                @include('components.sidebar')
                <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    
        <link rel="stylesheet" type="text/css" href="/css/calendar.css" />
    <link rel="stylesheet" type="text/css" href="/css/custom.css" />
    </head>

    <body>
    <div id="app">
    <app></app>
    </div>
    </body>

    <script src="{{mix('js/app.js')}}"></script>
    </html>