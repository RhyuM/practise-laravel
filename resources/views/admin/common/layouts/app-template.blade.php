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

              <!-- <li class="nav-item d-none d-sm-inline-block">
                <a href="http://bims-manticao.herokuapp.com/bac" class="nav-link">Home</a>
              </li> -->
            </ul>

            <!-- SEARCH FORM -->
              <!-- <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form> -->
            
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
            
              <!-- time clock -->
              <li class="nav-item">
                <body onload="startTime()">
                    <div id="clock"></div>
                    <div id="date"></div>
              </li>
              
           <!-- logout -->
          
            <li class="nav-item dropdown">
                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       {{ Auth::user()->first_name }} <span class="caret"></span>
                   </a>

                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
