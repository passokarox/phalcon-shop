<!DOCTYPE html>
<html>
    <head>
        <title>Phalcon Shop</title>
        {{ get_title() }}
        {{ stylesheet_link('css/bootstrap.css') }}
        {{ stylesheet_link('css/main.css') }}
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        {{ content() }}
        {{ javascript_include('js/jquery-2.1.0.js') }}
        {{ javascript_include('js/bootstrap.js') }}
        
    </body>
</html>