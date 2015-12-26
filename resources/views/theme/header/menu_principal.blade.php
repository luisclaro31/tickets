<a href="{{ url('/home') }}" class="logo"><b>Tickets</b>LTE</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('theme/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image"/>
                    <span class="hidden-xs">{{ Auth::user()->full_name }}</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="{{ asset('theme/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
                        <p>
                            {{ Auth::user()->full_name }}
                            <small>{{ Auth::user()->email }}</small>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                        <div class="col-xs-4 text-center">
                            <a href="{{ url('/') }}">Turnos</a>
                        </div>
                        <div class="col-xs-4 text-center">
                            <a href="{{ url('/ticket/report') }}">Reportes</a>
                        </div>
                        <div class="col-xs-4 text-center">
                            <a href="#">Friends</a>
                        </div>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('/auth/logout') }}" class="btn btn-default btn-flat">Cerrar Seccion</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>