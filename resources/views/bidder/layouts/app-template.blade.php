<!DOCTYPE html>
<html>
<head>
  @include('bidder.layouts.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed sidebar-open text-sm">
    <div class="wrapper">
          <!-- Navbar -->
         @include('bidder.layouts.navbar')
          <!-- /.navbar -->

          <!-- Main Sidebar Container -->
         @include('bidder.layouts.sidebar')

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper" style="min-height: 1200.88px;">

              @yield('content')
              
          </div>
          <!-- /.content-wrapper -->
          @include('bidder.layouts.footer')

          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here --> 
          </aside>
          <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('bidder.layouts.foot')
</body>
</html>
