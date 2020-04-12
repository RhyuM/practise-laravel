<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="{{ url('dashboard') }}" class="brand-link navbar-gray">
      <img src="{{ asset('dist/img/manticaoLogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .9">
      <span class="brand-text font-weight-light">BIMS @ MANTICAO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-4 pb-4 mb-4 d-flex">
        <div class="image">
        @can('isBAC')
          <img src="{{ asset('dist/img/KZ.jpg') }}" class="img-circle elevation-2" alt="User Image">
        @elsecan('isTWG')
          <img src="{{ asset('dist/img/eva.jpg') }}" class="img-circle elevation-2" alt="User Image">
        @endcan
        </div>
        <div class="info">
          <a href="{{ url('dashboard') }}" class="d-block">{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column text-sm" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item has-treeview">
            <a href="{{ url('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
        </li>
      @can('isBAC')
      
       <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{ url('user-management/bidder-list') }}" class="nav-link">
                  <i class="fa fa-registered nav-icon"></i>
                  <p>List of Registered Bidders</p>
                </a>
              </li>
            </ul>
        </li>
     
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-r-project"></i>
              <p>
                Tender Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{ url('tender-management/tender-list') }}" class="nav-link">
                  <i class="fas fa-clipboard-list nav-icon"></i>
                  <p>Tender List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tender Status</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bids Submitted</p>
                </a>
              </li>

            </ul>
        </li>
      @endcan
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-envelope-open"></i>
              <p>
                Bid Opening
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{ url('bid-opening/tenders') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tenders</p>
                </a>
              </li>
             
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-check-double"></i>
              <p>
                Bid Evaluation
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                  <p>Technical Evaluation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-dollar-sign nav-icon"></i>
                  <p>Financial Evaluation</p>
                </a>
              </li>
             
            </ul>
        </li>
      @can('isTWG')
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Post Qualification</p>
                </a>
              </li>
             
            </ul>
        </li>
      @endcan
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>