<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="http://127.0.0.1:8000/bac" class="brand-link navbar-gray">
      <img src="{{ asset('dist/img/manticaoLogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">BIMS @ MANTICAO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
     
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>