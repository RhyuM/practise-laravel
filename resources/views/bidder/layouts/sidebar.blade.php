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
          <img src="{{ asset('dist/img/ryan.jpg') }}" class="img-circle elevation-2" alt="User Image">
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

  <aside class="main-sidebar sidebar-dark-info elevation-4 text-sm">
    <!-- Brand Logo -->
    <a href="{{ url('dashboard') }}" class="brand-link navbar-primary">
      <img src="{{ asset('dist/img/manticaoLogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-2"
           style="opacity: .8">
      <span class="brand-text font-weight-dark text-white">BIMS @ MANTICAO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-4 pb-4 mb-4 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/ryan.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('dashboard') }}" class="d-block">{{ Auth::user()->first_name}} {{ Auth::user()->middle_name}} {{ Auth::user()->last_name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item has-treeview">
            <a href="{{ url('dashboard') }}" class="nav-link @yield('dashboardLinkActive')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
        </li>
       <li class="nav-item has-treeview @yield('userManagementMenuOpen')">
            <a href="#" class="nav-link @yield('userManagementOptionActive')">
              <i class="nav-icon fa fa-users"></i>
              <p>
                User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('#') }}" class="nav-link @yield('myAccountsLinkActive')">
                  <i class="fa fa-registered nav-icon"></i>
                  <p>My Accounts  </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('#') }}" class="nav-link @yield('myAccountsLinkActive')">
                  <i class="fa fa-registered nav-icon"></i>
                  <p>My Documents  </p>
                </a>
              </li>
            </ul>
        </li>
     
        <li class="nav-item has-treeview @yield('bidManagementMenuOpen')">
            <a href="#" class="nav-link @yield('bidManagementOptionActive')">
              <i class="nav-icon fab fa-r-project"></i>
              <p>
                Bid Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('#') }}" class="nav-link @yield('searchActiveTendersLinkActive')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Active Tenders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link @yield('myActiveBidsLinkActive')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Active Bids</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link @yield('myBidHistoryLinkActive')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Bid History</p>
                </a>
              </li>

            </ul>
        </li>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>