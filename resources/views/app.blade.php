<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <title>My shop Project</title>
    </head>

    <body>
    <nav class="navbar navbar-default">
        <div class="container">
            @include('inc.nav');
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" >
    </script>
    </body>
</html>