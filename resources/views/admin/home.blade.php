<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./admin/vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./admin/vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./admin/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./admin/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="index.html">
            
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="admin/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Admin Dashboard</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">

            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                <x-app-layout>

                </x-app-layout>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="text-wrapper">
                  <p class="profile-name">School Management</p>
                  <p class="designation">Administrator</p>
                </div>
               
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Management</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('home')}}">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Student Management</span></li>
            <li class="nav-item">
              <a class="nav-link"  href="{{url('view_student')}}" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">View Student Details</span>
                <i class="icon-people menu-icon"></i>
              </a>
             
            </li>
            
            <li class="nav-item nav-category"><span class="nav-link">Staff Management</span></li>
            <li class="nav-item">
              <a class="nav-link"  href="{{url('staff_management')}}" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Staff Management</span>
                <i class="icon-people menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <!-- Quick Action Toolbar Starts-->
            <div class="row quick-action-toolbar">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-header d-block d-md-flex">
                    <h5 class="mb-0">Quick Actions</h5>
                    <p class="ml-auto mb-0">How are your active users trending overtime?<i class="icon-bulb"></i></p>
                  </div>
                  <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <button type="button" class="btn px-0"> <i class="icon-user mr-2"></i> Add Client</button>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <button type="button" class="btn px-0"><i class="icon-docs mr-2"></i> Create Quote</button>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <button type="button" class="btn px-0"><i class="icon-folder mr-2"></i> Enter Payment</button>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <button type="button" class="btn px-0"><i class="icon-book-open mr-2"></i>Create Invoice</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Quick Action Toolbar Ends-->
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./admin/vendors/chart.js/Chart.min.js"></script>
    <script src="./admin/vendors/moment/moment.min.js"></script>
    <script src="./admin/vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./admin/vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/js/off-canvas.js"></script>
    <script src="admin/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./admin/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>