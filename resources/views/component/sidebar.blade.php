<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">


    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset('images/nrlm.png')}}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-th"></i></a>
        </li>
        <li class="nav-item">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control " type="search" placeholder="Search" aria-label="Search" style="border: 0; border-bottom: 1px solid #ced4da;">
            <div class="input-group-append">
              <button class="btn btn-sidebar" style="background-color: bisque;">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
        <li class="nav-item">
          <div class="user-panel mt-1 d-flex">
            <div class="image">
              <img src="{{asset('dist/img/avatar4.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Arviando</a>
            </div>
          </div>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link" style="border-bottom: 0;">
        <img src="{{asset('images/nrlm.png')}}" alt="Company Logo" class="brand-image img-circle elevation-3" style="background-color: white;padding: 2px">
        <span class="brand-text" style="font-weight: 600;">NRLM</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

        <!-- SidebarSearch Form -->
        <div class="form-inline">

        </div>

        
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                PG
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ Route::is('add-PG') ? ' active' : '' }}">
                <a href="{{route('add-PG')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add PG</p>
                </a>
              </li>
              <li class="nav-item {{ Route::is('view-PG') ? ' active' : '' }}">
                <a href="{{route('view-PG')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View PG</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                PE
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ Route::is('add-PE') ? ' active' : '' }}">
                <a href="{{route('add-PE')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add PE</p>
                </a>
              </li>
              <li class="nav-item {{ Route::is('view-PE') ? ' active' : '' }}">
                <a href="{{route('view-PE')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View PE</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                FPO
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ Route::is('add-FPO') ? ' active' : '' }}">
                <a href="{{route('add-FPO')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add FPO</p>
                </a>
              </li>
              <li class="nav-item {{ Route::is('view-FPO') ? ' active' : '' }}">
                <a href="{{route('view-FPO')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View FPO</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>