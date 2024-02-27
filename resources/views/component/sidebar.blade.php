<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-secondary navbar-light text-sm"
      style="height:58px; background-color: #26618e !important;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-light" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item hidden-mobile">
          <div class="user-panel  d-flex">
            <div class="image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              <span class="activedot"></span>
            </div>
            <div class="info">
              <a href="#" class="d-block text-white">Alexander Pierce</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link text-light" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
       
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-secondary elevation-4"
      style="background-color: #021829 !important; height: 100vh !important;">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link text-light" style="background-color: #26618e !important;">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-normal text-white">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar" style="position: relative !important; overflow-y: auto !important;">

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="./main-index.html" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p> Dashboard </p>
              </a>
            </li>





            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-user"></i>
                <p>
                  User Details
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('add-user')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('view-user')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Users</p>
                  </a>
                </li>

              </ul>
            </li>




            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Complaint
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('add-complaint')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Complaint</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('view-pia-complaint')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View PIA Complaint</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('view-district-complaint')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View District Complaint</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('view-breda-complaint')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Breda Complaint</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="{{route('logout')}}" class="nav-link ">
                <i class="nav-icon fas fa-power-off"></i>
                <p> Logout </p>
              </a>
            </li>
          </ul>
          </li>
          </ul>
          </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>