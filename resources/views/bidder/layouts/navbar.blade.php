<nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
              <!-- Left navbar links -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
              </ul>
              
              <!-- Right navbar links -->
              <ul class="navbar-nav ml-auto">

                <!-- time clock -->
                <li class="nav-item">
                  <body onload="startTime()">
                      <div id="clock"></div>
                      <div id="date"></div>
                </li>
                
               <!-- logout -->
               <li class="nav-item dropdown ml-auto">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ url('account-change-password') }}" class="dropdown-item">
                            <i class="fa fa-lock fa-fw"></i> Change Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out-alt fa-fw"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    </div>
               </li>
               <!-- / logout -->
</nav>