<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="assets/icon-mangkas.png" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,300;1,600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href={{asset('css/navbar-admin.css')}}?t={{ env('VERSION_TIME') }}>
    <link rel="stylesheet" href={{asset('css/form-admin.css')}}?t={{ env('VERSION_TIME') }}>
    
</head>
  <body>
    <nav class="navbar">
      <div class="logo_item">
        <a href="/">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="{{asset('assets/logo_navbar.png')}}" alt="">
        </a>
      </div>

      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-moon' id="darkLight"></i>
        <i class='bx bx-bell' ></i>
      </div>
    </nav>

    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
        <ul class="menu_items">
          <div class="menu_title menu_dahsboard"></div>

          <li class="item">
            <a href="/create-product" class="nav_link">
              <span class="navlink_icon">
                <i class='bx bx-gift'></i>
              </span>
              <span class="navlink">Product</span>
            </a>
          </li>
          <li class="item">
            <a href="/create-faq" class="nav_link">
              <span class="navlink_icon">
                <i class='bx bx-help-circle'></i>
              </span>
              <span class="navlink">Faq</span>
            </a>
          </li>
          <li class="item">
            <a href="/create-chat" class="nav_link">
              <span class="navlink_icon">
                <i class='bx bx-conversation'></i>
              </span>
              <span class="navlink">Live Chat</span>
            </a>
          </li>
          <li class="item">
            <a href="/create-membership" class="nav_link">
              <span class="navlink_icon">
                <i class='bx bx-id-card'></i>
              </span>
              <span class="navlink">Membership</span>
            </a>
          </li>
          {{-- <li class="item">
            <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
                <i class="bx bx-grid-alt"></i>
              </span>
              <span class="navlink">Overview</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </div>

            <ul class="menu_items submenu">
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
            </ul>
          </li> --}}
        </ul>

        <ul class="menu_items">
          <div class="menu_title menu_editor"></div>
          <li class="item">
            <a href="/create-shop" class="nav_link">
              <span class="navlink_icon">
                <i class='bx bx-store-alt'></i>
              </span>
              <span class="navlink">Shop</span>
            </a>
          </li>
          <li class="item">
            <a href="/create-service" class="nav_link">
              <span class="navlink_icon">
                <i class='bx bx-shower'></i>
              </span>
              <span class="navlink">Service</span>
            </a>
          </li>
          <li class="item">
            <a href="/create-facility" class="nav_link">
              <span class="navlink_icon">
                <i class='bx bx-rss'></i>
              </span>
              <span class="navlink">Facility</span>
            </a>
          </li>
          <li class="item">
            <a href="/create-hairstylist" class="nav_link">
              <span class="navlink_icon">
                <i class='bx bx-user'></i>
              </span>
              <span class="navlink">Hairstylist</span>
            </a>
          </li>
          <li class="item">
            <a href="/create-haircut" class="nav_link">
              <span class="navlink_icon">
                <i class='bx bx-cut'></i>
              </span>
              <span class="navlink">Haircut</span>
            </a>
          </li>
          <li class="item">
            <a href="/create-agenda" class="nav_link">
              <span class="navlink_icon">
                <i class='bx bx-calendar'></i>
              </span>
              <span class="navlink">Agenda</span>
            </a>
          </li>
          <li class="item">
            <a href="/create-booking" class="nav_link">
              <span class="navlink_icon">
                <i class='bx bx-data'></i>
              </span>
              <span class="navlink">Booking</span>
            </a>
          </li>
        </ul>
        
        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> Expand</span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> Collapse</span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>

    <div class="admin-area">
    @yield('content')
    </div>

    <script src="{{url('js/navbar-admin.js')}}?t={{ env('VERSION_TIME') }}"></script>
  </body>
</html>
