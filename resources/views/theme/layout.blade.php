<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ticket @yield('tittle')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @include('theme.head.style')
  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <body class="skin-blue">
  <!-- Site wrapper -->
  <div class="wrapper">
    <header class="main-header">
      @include('theme.header.menu_principal')
    </header>
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      @include('theme.body.menu_left')
    </aside>
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content')
    </div><!-- /.content-wrapper -->
    @include('theme.footer.footer')
  </div><!-- ./wrapper -->
   @include('theme.footer.script')
  @yield('script')
  </body>
</html>