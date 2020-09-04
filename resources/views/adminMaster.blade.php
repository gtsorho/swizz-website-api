<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet" id="bootstrap-css">
  
  <link href="{{asset('assets/vendor/fontawesome/css/all.min.css')}}" rel="stylesheet" />

  <!-- easy pie chart-->
  <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/css/style-responsive.css')}}" rel="stylesheet" />
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo">Nice <span class="lite">Admin</span></a>
      <!--logo end-->
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="#" class="">
                          <i class="icon_document_alt"></i>
                          <span>WebSite Settings</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="#" class="">
                          <i class="icon_desktop"></i>
                          <span>Home</span>
                      </a>
          </li>
          <li>
            <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Services</span>
                      </a>
          </li>
          <li>
            <a class="" href="chart-chartjs.html">
              <i class="fab fa-facebook-f"></i>
                          <span>Portfolio</span>

                      </a>

          </li>

          <li class="sub-menu">
            <a href="#" class="">
                          <i class="icon_table"></i>
                          <span>About</span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="#" class="">
                          <i class="icon_documents_alt"></i>
                          <span>FAQ</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="#" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Contact</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="#" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Sales</span>
                      </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
   @yield('content')
    <!--main content end-->
  </section>
  <!-- container section start -->

  <script src="{{asset('assets/admin/js/jquery.js')}}"></script>
  <script src="{{asset('assets/admin/js/jquery-1.8.3.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
  
  
   

</body>

</html>
