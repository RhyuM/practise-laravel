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
      <div class="user-panel mt-4 pb-4 mb-4 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/KZ.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column text-sm" data-widget="treeview" role="menu" data-accordion="false">
       <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>
                User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{ url('user-management/activation') }}" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Activation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Profile</p>
                </a>
              </li>
             
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Tender Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Tender List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Tender Status</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Bids Submitted</p>
                </a>
              </li>

            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Bid Opening
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Tenders</p>
                </a>
              </li>
             
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Bid Evaluation
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Technical Evaluation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Financial Evaluation</p>
                </a>
              </li>
             
            </ul>
        </li>
        
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>