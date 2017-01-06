<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ticket | Inicio</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @include('home.head.style')
</head>
<body class="skin-blue layout-top-nav">
<div class="wrapper">
    <header class="main-header">
        @include('home.header.menu_principal')
    </header>
    <div class="content-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div><!-- /.container -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="container-fluid">
            @include('home.footer.footer')
        </div><!-- /.container -->
    </footer>
</div><!-- ./wrapper -->
@include('home.footer.script')
</body>
</html>