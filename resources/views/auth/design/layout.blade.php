<!DOCTYPE html>
<html lang="es"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Luis App</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('theme_login/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset ('theme_login/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('theme_login/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset ('theme_login/css/login.css') }}">
</head>
<body>
    <div id="container">
        <div id="logo">
            <img src="{{ asset ('theme_login/img/logo.png') }}" alt="">
        </div>
        <div id="loginbox" class="wrapper">
            @yield('contents')
        </div>
        <span style="color:#FFF"><br/>
            <center>
                <p>Copyright &copy; 2015 construida con Laravel v5.1, Bootstrap v3 and jQuery v2.0.1</p>
                <p>Software Creado por <a href="#!">Hector Luis Claro y Hernando de la Hoz</a> </p>
                <!--<a class="btn btn-link" href="{{ url('/password/email') }}">
                    Forgot Your Password?
                <a>-->
            </center>
        </span>
    </div>
    <script src="{{ asset ('theme_login/js/jquery.js') }}"></script>
    <script src="{{ asset ('theme_login/js/jquery-ui.js') }}"></script>
    <script src="{{ asset ('theme_login/js/login.js') }}"></script>
    </body>
</html>