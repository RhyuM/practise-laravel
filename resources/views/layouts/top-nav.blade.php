<nav class="main-header navbar navbar-expand-md navbar-light  navbar-dark text-sm">
    <div class="container">
      <!-- <a href="#" class="navbar-brand">
        <img src="{{ asset('dist/img/manticaoLogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
        <span class="brand-text font-weight-light">BIMS @ MANTICAO</span>
      </a> -->
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          
        <li class="nav-item">
            <a href="#" class="nav-link ">HOME</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link ">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">BIDDING INVITATIONS</a>
          </li>
        </ul>

        

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
       
        <!-- Notifications Dropdown Menu -->
        
        
        @guest
            <!-- <div class="btn-group">
                    <button type="button" class="btn btn-info">LOGIN AS</button>
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                      <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </button>
             </div> -->

             <li class="nav-item dropdown">
                      <button type="button" class="btn btn-dark dropdown-toggle dropdown-hover" data-toggle="dropdown" class="nav-link dropdown-toggle">LOGIN AS
                        <span class="sr-only">Toggle Dropdown</span>
                        <ul class="dropdown-menu  border-0 shadow">
                          <li><a href="{{ route('login') }}"  class="dropdown-item">{{__('BIDDER') }}</a></li>
                          <li><a href="{{ route('admin.login') }}" class="dropdown-item">{{__('STAFF') }}</a></li>
                        </ul>
                      </button>
             </li>

             <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">LOGIN AS</a>
                <ul class="dropdown-menu border-0 shadow">
                  <li><a href="{{ route('login') }}" class="dropdown-item">{{__('BIDDER') }}</a></li>
                  <li><a href="{{ route('admin.login') }}" class="dropdown-item">{{__('STAFF') }}</a></li>
                </ul>
              </li>
            @if (Route::has('register'))
                <li class="nav-item">
                     <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                </li>
            @endif
            @else
                <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->first_name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                    </div>
                </li>
        @endguest
       
      </ul>
    </div>
  </nav>