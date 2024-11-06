<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>DASHMIN - Bootstrap Admin Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style2.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
  <div class="container-xxl position-relative bg-white d-flex p-0 w-100">


    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
      <nav class="navbar bg-light navbar-light">
        <a href="/" class="navbar-brand mx-4 mb-3">
          <img src="images/logo3.png" alt="" width="100px" height="80px" /> </a><br />
        <div class="d-flex align-items-center ms-4 mb-4">
          <!-- <div class="position-relative">
            <br> -->
          <!-- <img class="rounded-circle" src="images/zekrulla.jpeg" alt="" style="width: 40px; height: 40px" /> -->
          <!-- <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
            </div> -->
          <!-- </div> -->
        </div>
        <div class="navbar-nav w-100">
          <div class="ms-4 m-2">
            <h6>{{ Auth::user()->name }}</h6>
            <span>User</span>
          </div>
          <a href="/userOrders" class="nav-item nav-link active"><i class="fa fa-tachometer me-2"></i>Recent Orders</a>
          <div class="navbar-nav w-100">
            <a href="/" class="nav-link"><i class="fa fa-home me-2"></i>Home</a>
          </div>
          <div class="navbar-nav w-100">
            <a href="index.html" class="nav-item nav-link"><i class="fa fa-sort me-2"></i>My Orders</a>
          </div>
          <div class="navbar-nav w-100">
            <a href="index.html" class="nav-item nav-link"><i class="fa fa-link me-2"></i>Domains</a>
          </div>
          <div class="navbar-nav w-100">


            <a href="service.html" class="nav-item nav-link"><i class="fa fa-id-card me-2"></i>Billing</a>
          </div>
      </nav>
    </div>
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="content">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
          <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
          <i class="fa fa-bars"></i>
        </a>

        <div class="navbar-nav align-items-center ms-auto">


          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
              <a href="/profile" class="dropdown-item">My Profile</a>
              <a href="index.html" class="dropdown-item">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" style="border: none;background-color:transparent;">Logout</button>
                </form>
              </a>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Sale & Revenue Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-line fa-3x text-primary"></i>
              <div class="ms-3">
                <p class="mb-2">Today Order</p>
                <h6 class="mb-0">$1234</h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-bar fa-3x text-primary"></i>
              <div class="ms-3">
                <p class="mb-2">Total Order</p>
                <h6 class="mb-0">$1234</h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-area fa-3x text-primary"></i>
              <div class="ms-3">
                <p class="mb-2">Today Revenue</p>
                <h6 class="mb-0">$1234</h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-pie fa-3x text-primary"></i>
              <div class="ms-3">
                <p class="mb-2">Total Revenue</p>
                <h6 class="mb-0">$1234</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Sale & Revenue End -->


      <!-- Recent Sales Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
          <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Recent Orders</h6>
            <a href="New/salse.html">Show All</a>
          </div>
          <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
              <thead>
                <tr class="text-dark">
                  <th scope="col">
                    <input class="form-check-input" type="checkbox" />
                  </th>
                  <th scope="col">Date</th>
                  <th scope="col">Invoice</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input class="form-check-input" type="checkbox" /></td>
                  <td>01 Jan 2045</td>
                  <td>INV-0123</td>
                  <td>$123</td>
                  <td>Paid</td>
                  <td>
                    <a class="btn btn-sm btn-primary" href="">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td><input class="form-check-input" type="checkbox" /></td>
                  <td>01 Jan 2045</td>
                  <td>INV-0123</td>
                  <td>$123</td>
                  <td>Paid</td>
                  <td>
                    <a class="btn btn-sm btn-primary" href="">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td><input class="form-check-input" type="checkbox" /></td>
                  <td>01 Jan 2045</td>
                  <td>INV-0123</td>
                  <td>$123</td>
                  <td>Paid</td>
                  <td>
                    <a class="btn btn-sm btn-primary" href="">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td><input class="form-check-input" type="checkbox" /></td>
                  <td>01 Jan 2045</td>
                  <td>INV-0123</td>
                  <td>$123</td>
                  <td>Paid</td>
                  <td>
                    <a class="btn btn-sm btn-primary" href="">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td><input class="form-check-input" type="checkbox" /></td>
                  <td>01 Jan 2045</td>
                  <td>INV-0123</td>
                  <td>$123</td>
                  <td>Paid</td>
                  <td>
                    <a class="btn btn-sm btn-primary" href="">Detail</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
          <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Recent Domains</h6>
            <a href="New/salse.html">Show All</a>
          </div>
          <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
              <thead>
                <tr class="text-dark">
                  <th scope="col">
                    <input class="form-check-input" type="checkbox" />
                  </th>
                  <th scope="col">Date</th>
                  <th scope="col">Invoice</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input class="form-check-input" type="checkbox" /></td>
                  <td>01 Jan 2045</td>
                  <td>INV-0123</td>
                  <td>$123</td>
                  <td>Paid</td>
                  <td>
                    <a class="btn btn-sm btn-primary" href="">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td><input class="form-check-input" type="checkbox" /></td>
                  <td>01 Jan 2045</td>
                  <td>INV-0123</td>
                  <td>$123</td>
                  <td>Paid</td>
                  <td>
                    <a class="btn btn-sm btn-primary" href="">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td><input class="form-check-input" type="checkbox" /></td>
                  <td>01 Jan 2045</td>
                  <td>INV-0123</td>
                  <td>$123</td>
                  <td>Paid</td>
                  <td>
                    <a class="btn btn-sm btn-primary" href="">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td><input class="form-check-input" type="checkbox" /></td>
                  <td>01 Jan 2045</td>
                  <td>INV-0123</td>
                  <td>$123</td>
                  <td>Paid</td>
                  <td>
                    <a class="btn btn-sm btn-primary" href="">Detail</a>
                  </td>
                </tr>
                <tr>
                  <td><input class="form-check-input" type="checkbox" /></td>
                  <td>01 Jan 2045</td>
                  <td>INV-0123</td>
                  <td>$123</td>
                  <td>Paid</td>
                  <td>
                    <a class="btn btn-sm btn-primary" href="">Detail</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Recent Sales End -->



      <!-- Footer Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded-top p-4">
          <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
              &copy; <a href="#">Host Company</a>, All Right Reserved.
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-end">
              Designed By <a href="#">Zekrullah</a>

              Distributed By
              <a class="border-bottom" href="#" target="_blank">Sardar</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->
    </div>
    <!-- Content End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/chart/chart.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
</body>

</html>