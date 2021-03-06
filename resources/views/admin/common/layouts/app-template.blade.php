<!DOCTYPE html>
<html>
<head>
  @include('admin.common.layouts.head')
</head>
@if((new \Jenssegers\Agent\Agent())->isDesktop())
  <body class="hold-transition sidebar-mini layout-fixed sidebar-open text-sm">
@endif
@if((new \Jenssegers\Agent\Agent())->isMobile())
  <body class="hold-transition sidebar-mini layout-fixed sidebar-close text-sm sidebar-collapse">
@endif
    <div class="wrapper">
          <!-- Navbar -->
         @include('admin.common.layouts.navbar')
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
