<!DOCTYPE html>
<html>
<head>
  @include('admin.common.layouts.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
    <div class="wrapper">
          <!-- Navbar -->
          <nav class="main-header navbar navbar-expand navbar-dark navbar-secondary">
              <!-- Left navbar links -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
              </ul>
              
              <!-- Right navbar links -->
              <ul class="navbar-nav ml-auto">

                <!-- time clock -->
                <li class="nav-item">
                  <body onload="startTime()">
                      <div id="clock"></div>
                      <div id="date"></div>
                </li>
                
               <!-- logout -->
               <li class="nav-item dropdown ml-auto">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-lock fa-fw"></i> Change Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out-alt fa-fw"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    </div>
               </li>
               <!-- / logout -->
          </nav>
          <!-- /.navbar -->

          <!-- Main Sidebar Container -->
         @include('admin.common.layouts.sidebar')

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper" style="min-height: 1200.88px;">
              @yield('content')
          </div>
          <!-- /.content-wrapper -->
          @include('admin.common.layouts.footer')

          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here --> 
          </aside>
          <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('admin.common.layouts.foot')
</body>
</html>
