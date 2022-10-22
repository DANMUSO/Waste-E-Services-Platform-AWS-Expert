<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Advance APP</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://aws-experts.s3.amazonaws.com/awsexpert/app.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper" id="app">

    <!-- Navbar -->
    <nav style="background-color:#F57C41" class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside style="background-color:#012B31;" class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROZ3SwbM-dFBcPZ-0lGSrpYL7R9oPZnNoUxA&usqp=CAU"
          alt="AWS EXPERT" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AWS EXPERT</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img
              src="https://media.itpro.co.uk/image/upload/s--X-WVjvBW--/f_auto,t_content-image-full-desktop@1/v1597742853/itpro/AWSLogo_shutterstock.jpg"
              class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"></a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <router-link to="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p style="color:#fff">
                  Dashboard
                </p>
              </router-link>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{ route('sellers') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p style="color:#fff">Waste Sellers</p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{ route('bidders') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p style="color:#fff">Waste Bidders</p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{ route('products') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p style="color:#fff">Waste Products</p>
              </a>
            </li>
            <li class="nav-item">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>

              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <div class="content">
        <div class="container-fluid">
          @yield('content')
          <router-view></router-view>

          <vue-progress-bar></vue-progress-bar>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2022-2025 <a href="#">AWS EXPERT | AWS Impact Plus Hackathon</a>.</strong> All rights
      reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->

  <script src="https://aws-experts.s3.amazonaws.com/awsexpert/app.js"></script>
</body>

</html>