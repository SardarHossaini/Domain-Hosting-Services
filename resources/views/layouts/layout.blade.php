<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Logo -->
  <link rel="icon" href="images/logo.jpeg" type="image/gif" />

  <title>Hostit</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/home.css" />
  <link rel="stylesheet" href="style2.css">
</head>

<body class="sub_page">
  <div class="container">
    <!-- start top row -->
    <div class="row top-bar">
      <div class="col-sm-6 d-sm-block d-none" id="top_header">
        <i class="fa fa-envelope"></i> sales@host.com &nbsp;
        <i class="fa fa-phone"></i> +93 7774027496 &nbsp;
      </div>
      <div class="col-sm-6 col-6 login">
        @if(Auth::check())
        <a href="{{ Auth::user()->type == 'admin' ? url('admin') : url('user') }}" style="font-size: large;">
          {{ Auth::user()->name }}
        </a>
        </div>
        <!-- Authentication -->

      @else
      <a href="login" class="text-black-50">Login</a> &nbsp; &nbsp;
      <a href="signup" class="text-black-50">Sign Up</a>
    @endif
    </div>
  </div>
  </div>
  </div>
  <!-- end top row -->
  <!-- header section starts -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="/">
          <img src="images/mainlogo.png" alt="" />
        </a>
        <!-- humbarger Icon -->
        <button class="navbar-toggler" type="button">
          <span class=""> </span>
        </button>
        <!-- Navbar -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="about"> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="searchdomain">Domains</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hosting">Hosting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->
  @yield('content')

  <!-- start info section -->
  <!-- 679 - 781 style.css -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <!-- section1 -->
        <div class="col-md-3">
          <div class="info_contact">
            <h4>Address</h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker"></i>
                <span> Kabul, Afghanistan </span>
              </a>
              <a href="">
                <i class="fa fa-phone"></i>
                <span> Call +093 778871135 </span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span> host@gmail.com </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram"></i>
            </a>
          </div>
        </div>
        <!-- end section1 -->
        <!-- section2 -->
        <div class="col-md-3">
          <div class="info_link_box">
            <h4>Links</h4>
            <div class="info_links">
              <a class="active" href="/">
                <img src="images/nav-bullet.png" alt="" />
                Home
              </a>
              <a class="" href="about">
                <img src="images/nav-bullet.png" alt="" />
                About
              </a>
              <a class="" href="service">
                <img src="images/nav-bullet.png" alt="" />
                Services
              </a>
              <a class="" href="domain">
                <img src="images/nav-bullet.png" alt="" />
                Domains
              </a>
              <a class="" href="hosting">
                <img src="images/nav-bullet.png" alt="" />
                Hosting
              </a>
              <a class="" href="contact">
                <img src="images/nav-bullet.png" alt="" />
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <!-- end section2 -->
        <!-- start section3 -->
        <div class="col-md-3">
          <div class="info_detail">
            <h4>Info</h4>
            <p>
              necessary, making this the first true generator on the Internet.
              It uses a dictionary of over 200 Latin words, combined with a
              handful
            </p>
          </div>
        </div>
        <!-- end section3 -->
        <!-- start section4 -->
        <div class="col-md-3 mb-0">
          <h4>Subscribe</h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">Subscribe</button>
          </form>
        </div>
        <!-- end section4 -->
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <!-- 782 - 799 style.css -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="index.html">host company</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>