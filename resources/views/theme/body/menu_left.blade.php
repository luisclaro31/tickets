<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('theme/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
            <p>{{ Auth::user()->full_name }}</p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">Menu Principal</li>
        <li class="treeview">
            <li><a href="{{ url('/home') }}"><i class="fa fa-home"></i> Inicio</a></li>
            <li>
            <a href="#">
                <i class="fa fa-user-plus"></i> <span> Registrador</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu" style="display: block;">
                <li id="home"><a href="{{ url('/ticket/student') }}"><i class="fa fa-circle-o"></i> Inicio</a></li>
                <li><a href="{{ url('/ticket/student/create') }}"><i class="fa fa-circle-o"></i> Crear Ticket</a></li>
            </ul>
            </li>
            <li>
            <a href="#">
                <i class="fa fa-ticket"></i> <span> Ticket</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu" style="display: block;">
                <li><a href="{{ url('/ticket/call') }}"><i class="fa fa-circle-o"></i> Todo los Ticket</a></li>
                <li><a href="{{ url('/ticket/frills') }}"><i class="fa fa-circle-o"></i> Volantes - Cuotas<span class="label label-primary pull-right">{{ $vm->total() }}</span></a></li>
                <li><a href="{{ url('/ticket/credit') }}"><i class="fa fa-circle-o"></i> Creditos - Icetex<span class="label label-primary pull-right">{{ $ic_cr->total() }}</span></a></li>
                <li><a href="{{ url('/ticket/certified') }}"><i class="fa fa-circle-o"></i> Est. Credito - Certificados<span class="label label-primary pull-right">{{ $ec_cn->total() }}</span></a></li>
                <li><a href="{{ url('/ticket/registrations') }}"><i class="fa fa-circle-o"></i> Inscripciones T-R-E<span class="label label-primary pull-right">{{ $in_aet_re_tr->total() }}</span></a></li>
                <li><a href="{{ url('/ticket/others') }}"><i class="fa fa-circle-o"></i> Semina. - Der. Grado<span class="label label-primary pull-right">{{ $sd_dg->total() }}</span></a></li>
                <li><a href="{{ url('/ticket/dr') }}"><i class="fa fa-circle-o"></i> Dir. Admisiones<span class="label label-primary pull-right">{{ $dr->total() }}</span></a></li>
                <li><a href="{{ url('/ticket/called') }}"><i class="fa fa-circle-o"></i> No Atendidos<span class="label label-primary pull-right"></span></a></li>
            </ul>
            </li>
            </li>
    </ul>
</section>