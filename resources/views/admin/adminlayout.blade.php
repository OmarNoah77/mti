<!DOCTYPE html>
<html>
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <title> {{ config('app.name') }} | Inicio</title> -->
    <title> MTI | Inicio</title>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/select2.min.css" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @if (! config('app.debug', true))
        <link rel="stylesheet" href="{{ asset('css/admin-all.css') }}">
    @else
        <!-- Vendors -->
        <link rel="stylesheet" href="{{ asset('css/admin-vendor.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin-custom.css') }}">
    @endif

    @yield('css')



</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="js/select2.min.js"></script>
        @yield('scripts')
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="{{ url(ADMIN . '/') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>MTI</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Infraestructura </b> MTI</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <ul class="nav navbar-nav">
                          <li class="active"><a href="#">TEST <span class="sr-only">(current)</span></a></li>
                          <li><a href="#">TEST</a></li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">TEST <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">TEST</a></li>
                              <li><a href="#">Another TEST</a></li>
                              <li><a href="#">Something TEST here</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Separated TEST</a></li>
                              <li class="divider"></li>
                              <li><a href="#">One more separated TEST</a></li>
                            </ul>
                          </li>
                        </ul>
            



                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar -->
                                <img src="{{ auth()->user()->avatar }}" width="160" height="160" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs" >{{ auth()->user()->name }}</span>&nbsp
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="{{ auth()->user()->avatar }}" width="160" height="160" class="img-circle" alt="User Image">
                                    <p>
                                        {{ auth()->user()->email }} <br/>
                                        <small >Role : {{ auth()->user()->rolename() }}</small>
                                    </p>
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer" style="height:75px;padding-top:20px;">
                                    <div class="pull-left">
                                        <a href="{{ url('admin\profileedit', auth()->id()) }}" class="btn btn-info btn-flat" style="width:90px">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        {!! Form::open(['url'=>'logout']) !!}
                                            <button type="submit" class="btn btn-danger btn-flat"  style="width:90px">Salir</button>
                                        {!! Form::close() !!}
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->

                <div class="user-panel">
                  <div class="pull-left image">
                      <img src="{{ auth()->user()->avatar }}" width="160" height="160" class="img-circle" alt="User Image">
                  </div>
                  <div class="pull-left info">
                    <p class="user-panel-name">{{ Auth::user()->name }} </p>
                    <p>
                      <small ><a href="{{ route('logout', auth()->id()) }}"><i class="fa fa-sign-out"></i> <span>Salir</span></a></small>
                    </p>

                  </div>
                </div>

                @include('admin.commun.menu')

            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    @yield('page-header', 'pageheader')
                </h1>
                {{-- <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                    <li class="active">Here</li>
                </ol> --}}
            </section>

            <!-- Main content -->
            <section class="content">

                @include('admin.commun.flash-message')

                @yield('content')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                ver 1.0.0 
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; {{ date('Y') }} <a href="#">Thomas MTI</a>.</strong> Todos los derechos reservados.
        </footer>

    </div>
    <!-- ./wrapper -->

    @if (config('app.debug', true))
        <!-- Vendors -->
        <script src="{{ asset('js/admin-vendor.js') }} "></script>
        <script src="{{ asset('js/admin-custom.js') }} "></script>
    @else
        <script src="{{ asset('js/admin-all.js') }} "></script>
    @endif
    @yield('js')
    
</body>
</html>
