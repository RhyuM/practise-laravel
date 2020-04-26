<nav class="main-header navbar navbar-expand-md navbar-light  navbar-dark">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="{{ asset('dist/img/manticaoLogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">BIMS @ MANTICAO</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          
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