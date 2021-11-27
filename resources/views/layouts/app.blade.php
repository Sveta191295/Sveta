<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    </head>
    <body>
        @section('sidebar') 
        <!-- This is the master sidebar. -->
        @show
        <div class="container">
            @yield('content')
        </div>
        <div class="container">
            @yield('arr')
        </div>
    </body>
</html>