<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>IISLA VENTURES</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
    .backkground
    {
      background-position: center;
      background-image:url({{url('img/background.jpg')}});
    }
    .main-header
    {
      background-image: linear-gradient(#CDCDCD, #01DFA5);
    }
  </style>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <div class="row">
        <div class="col">
          <a href="https://www.facebook.com/IISLAVentures/">
            <h1>
              <i class="fab fa-facebook-square"></i>
            </h1>
          </a>
        </div>
        <div class="col">
          <a href="https://twitter.com/IISLA_Ventures">
            <h1>
              <i class="fab fa-twitter-square"></i>
            </h1>
          </a>
        </div>
        <div class="col">
          <a href="https://www.instagram.com/iisla_ventures/">
            <h1>
              <i class="fab fa-instagram-square"></i>
            </h1>
          </a>
        </div>
        <div class="col">
          <a href="https://www.linkedin.com/company/isla-investments-ltd/">
            <h1>
              <i class="fab fa-linkedin"></i>
            </h1>
          </a>
        </div>
      </div>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link" align="center">
      <img src="{{asset('/img/iisa_logo.jpg')}}" height="100px">
    </a>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/whatwedo" class="nav-link" style="color:#93F4FE">
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>What we do</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/whoweare" class="nav-link" style="color:#93FE97">
                  <i class="fas fa-id-card nav-icon"></i>
                  <p>Who we are</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/getinvolved" class="nav-link" style="color:#E2FC74">
                  <i class="fas fa-handshake nav-icon"></i>
                  <p>Get Involved</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/newsarticles" class="nav-link" style="color:#FF48E9">
                  <i class="fas fa-newspaper nav-icon"></i>
                  <p>News & Articles</p>
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

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
    </div>
  </footer>
</div>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
