<aside class="main-sidebar sidebar-light-info elevation-4 ">
    <!-- Brand Logo -->
    <a href="{{ url('dashboard') }}" class="brand-link navbar-dark">
      <img src="{{ asset('dist/img/manticaoLogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-2"
           style="opacity: .9">
      <span class="brand-text font-weight-light text-white">BIMS @ MANTICAO</span>
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
      @can('isBAC')
      
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
                <a href="{{ url('user-management/bidder-list') }}" class="nav-link @yield('listOfRegisteredBidderLinkActive')">
                  <i class="fa fa-registered nav-icon"></i>
                  <p>List of Registered Bidder  </p>
                </a>
              </li>
            </ul>
        </li>
     
        <li class="nav-item has-treeview @yield('tenderManagementMenuOpen')">
            <a href="#" class="nav-link @yield('tenderManagementOptionActive')">
              <i class="nav-icon fab fa-r-project"></i>
              <p>
                Tender Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('tender-management/tender-list') }}" class="nav-link @yield('tenderListLinkActive')">
                  <i class="fas fa-clipboard-list nav-icon"></i>
                  <p>Tender List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link @yield('tenderStatusLinkActive')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tender Status</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link @yield('bidsSubmittedLinkActive')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bids Submitted</p>
                </a>
              </li>

            </ul>
        </li>
      @endcan
        <li class="nav-item has-treeview @yield('bidOpeningMenuOpen')">
            <a href="#" class="nav-link @yield('bidOpeningOptionActive')">
              <i class="nav-icon fa fa-envelope-open"></i>
              <p>
                Bid Opening
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('bid-opening/tenders') }}" class="nav-link @yield('tendersLinkActive')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tenders</p>
                </a>
              </li>
             
            </ul>
        </li>
        <li class="nav-item has-treeview @yield('bidEvaluationMenuOpen')">
            <a href="#" class="nav-link @yield('bidEvaluationOptionActive')">
              <i class="nav-icon fas fa-check-double"></i>
              <p>
                Bid Evaluation
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="#" class="nav-link @yield('technicalEvaluationLinkActive')">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                  <p>Technical Evaluation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link @yield('financialEvaluationLinkActive')">
                  <i class="fas fa-dollar-sign nav-icon"></i>
                  <p>Financial Evaluation</p>
                </a>
              </li>
             
            </ul>
        </li>
      @can('isTWG')
        <li class="nav-item has-treeview @yield('reportsMenuOpen')">
            <a href="#" class="nav-link @yield('reportsOptionActive')">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="#" class="nav-link @yield('postQualificationLinkActive')">
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