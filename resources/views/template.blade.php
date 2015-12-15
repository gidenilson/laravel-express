<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>MiniBlog</title>

        <!-- Bootstrap -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">MiniBlog</a>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{route('home')}}">home</a>
                    </li>
                    <li>
                        <a href="{{route('admin.posts.index')}}">admin</a>
                    </li>                    
                </ul>
                
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @yield('posts')
                    @yield('admin-posts')
                    @yield('auth-login')
                </div>
            </div>

        </div>

        <nav class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
                www.gidenilson.com.br
            </div>
        </nav>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>