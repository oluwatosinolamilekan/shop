<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/assets/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="{{ ('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ ('css/style.css' )}}">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

        
        

       @yield('style')
        
        
    </head>
    <body>
        
        @yield('content')


        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing-1.3.min.js"></script>
        <script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
        <script src="js/shop.js"></script>

            @yield('script')
    </body>
</html>