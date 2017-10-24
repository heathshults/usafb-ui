<?php 

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Players List - USA Football</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
  <link rel="apple-touch-icon" href="./images/fav/apple-touch-icon.png">
  <link rel="shortcut icon" href="./images/fav/favicon.ico">
  <link rel="stylesheet" href="./css/vendor/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/vendor/bootstrap-table/1.11.1/bootstrap-table.css">
  <link rel="stylesheet" href="./js/vendor/dropzone/dropzone.css">
  <link rel="stylesheet" href="./css/usafb-bootstrap.css">

</head>

<body>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!-- Add your site or application content here -->
  <div class="container-fluid axis p-0 m-0">
    <!-- header -->
    <header id="site-header" class="header-container">
      <div class="w-100">
        <div class="row">
          <div class="col-md-3 brand-container d-flex align-items-center">
            <a href="sign-in.html">
              <img src="images/logos/usafb-datacenter-logo.png" alt="Blue Star Sports" class="brand-logo img-fluid" />
            </a>
          </div>
          <div class="col nav-container">
            <!-- nav -->
            <nav class="navbar navbar-expand-lg">
              <div class="col text-right pr-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbarToggler01" aria-controls="navbarToggler01"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-navicon" aria-hidden="true"></i> Menu</button>
              </div>
              <div class="navbarToggler01 collapse navbar-collapse" id="navbarToggler01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="./Dashboard.html">Home</a>
                  </li>
                  <span class="nav-item-separator"></span>
                  <li class="nav-item">
                    <a class="nav-link active" href="./players-list.html">Players</a>
                  </li>
                  <span class="nav-item-separator"></span>
                  <li class="nav-item">
                    <a class="nav-link" href="./coaches-list.html">Coaches</a>
                  </li>
                  <span class="nav-item-separator"></span>
                  <li class="nav-item">
                    <a class="nav-link" href="./dashboard.html">Dashboard</a>
                  </li>
                </ul>
                <div class="navbar-nav my-account d-flex">
                  <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="account-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="./content/users/avatar/user-01.jpg" alt="@HeathShults" class="user-avatar rounded-circle" /> @HeathShults </a>
                    <div class="dropdown-menu">
                      <div class="dropdown-divider"></div>
                      <a class="nav-link dropdown-item" href="#">My Profile</a>
                      <a class="nav-link dropdown-item" href="./users-manage.html">Manage Users</a>
                      <a class="nav-link dropdown-item" href="#">Help / FAQ</a>
                      <div class="dropdown-divider"></div>
                      <a class="nav-link dropdown-item" href="#">Sign Out</a>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
            <!-- /nav -->
          </div>
        </div>
      </div>
    </header>
    <div class="header-content-divider align-self-end"></div>
    <!-- end header -->
    <!-- main content area -->
    <section id="main-content">
      <div class="container-fluid">

      </div>
    </section>
    <!-- end main content -->
    <!-- footer -->
      <footer id="footer-01">
        <div class="row">
          <div class="col-4"></div>
          <div class="col-4"></div>
          <div class="col--4"></div>
        </div>
      </footer>
  </div>
  <!-- js goes below  -->
  <script src="./js/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="./js/vendor/jquery/jquery-1.12.0.min.js"><\/script>')
  </script>
  <script src="./js/vendor/popper.js"></script>
  <script src="./js/usafb-bootstrap.js"></script>
  <script src="./js/vendor/modernizr-2.8.3.min.js"></script>
  <!-- Page Loader -->
  <script src="./js/vendor/pace/v1.0.0/pace.min.js"></script>
  <!-- Bootstrap-table -->
  <script src="./js/vendor/dropzone/dropzone.js"></script>
  <script src="./js/bss.js"></script>
  <script>
    // bootstrap-table search
    $('#userSearch').keypress(function () {
      $('.search input[type="text"]').val($(this).val());
    });
    </script>
</body>
</html>
