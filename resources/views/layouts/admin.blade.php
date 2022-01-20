
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Font Awesome -->
  <script defer src="{{ asset('js/all.js') }}"></script>
  
  <!-- Bootstrap & Custom CSS -->
  <link href="{{ asset('css/bootstrap/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

   <!-- Icon -->
   <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}"/>

   <!-- Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
          <div class="sidebar-brand-icon">
              <img src="{{ asset('img/icon-logo.png') }}" alt="" width="50">
          </div>
          <div class="sidebar-brand-text mx-2">TEST</div>
      </a>

      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item {{ \Str::is('home.*', Route::currentRouteName()) ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>&nbsp; Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{ \Str::is('users.*', Route::currentRouteName()) ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/users') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>&nbsp; Users</span>
        </a>
      </li>
      <li class="nav-item {{ \Str::is('products.*', Route::currentRouteName()) ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/products') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>&nbsp; Products</span>
        </a>
      </li>
      <li class="nav-item {{ \Str::is('customer.*', Route::currentRouteName()) ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/customer') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>&nbsp; Agent</span>
        </a>
      </li>
      <li class="nav-item {{ \Str::is('order.*', Route::currentRouteName()) ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/order') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>&nbsp; Order</span>
        </a>
      </li>

      <!-- Nav Item - Manajemen User -->      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Laporan -->      
    </ul>
    <!-- Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle -->
          <div class="text-center d-md-inline d-sm-none">
            <button class="btn btn-light" id="sidebarToggle"><i class="fas fa-bars"></i></button>
          </div>

          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Retur -->
            {{-- <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-exchange-alt"></i>
                <!-- Counter - Retur -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Retur -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Retur
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="{{ asset('img/avatar.jpg') }}" alt="">
                  </div>
                  <div>
                    <div class="text-truncate font-weight-bold">Hi there! I am Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor</div>
                    <div class="text-truncate text-description">This description Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                    <div class="small text-gray-500">Dede Permana - 12 Desember 2019</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="{{ asset('img/avatar.jpg') }}" alt="">
                  </div>
                  <div>
                    <div class="text-truncate font-weight-bold">I have issues for your product, Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor </div>
                    <div class="text-truncate text-description">This description Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                    <div class="small text-gray-500">Dede Permana - 7 Desember 2019</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="{{ asset('img/avatar.jpg') }}" alt="">
                  </div>
                  <div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor </div>
                    <div class="text-truncate text-description">This description Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                    <div class="small text-gray-500">Dede Permana - 2 Desember 2019</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li> --}}

            <!-- Nav Item - Notif -->
            {{-- <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Notif -->
                <span class="badge badge-danger badge-counter">5</span>
              </a>
              <!-- Dropdown - Notif -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Notification
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="{{ asset('img/avatar.jpg') }}" alt="">
                  </div>
                  <div>
                    <div class="small text-gray-500">12 Desember 2019</div>
                    <span class="font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="{{ asset('img/avatar.jpg') }}" alt="">
                  </div>
                  <div>
                    <div class="small text-gray-500">7 Desember 2019</div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor 
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="{{ asset('img/avatar.jpg') }}" alt="">
                  </div>
                  <div>
                    <div class="small text-gray-500">2 Desember 2019</div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Notification</a>
              </div>
            </li> --}}

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <div style="padding-left:0.5rem;"><i class="fas fa-angle-down"></i></div>
              </a>
              <!-- Dropdown - User -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>

          </ul>

        </nav>
        <!-- Navbar -->

        <!-- Page Content -->
        {{-- @include('sweetalert::alert') --}}
        @yield('container')
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Sistem 2022</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap JavaScript-->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('js/jquery.easing.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('js/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

  <script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>

  <!-- Js Mask -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  @yield('script')

</body>

</html>
