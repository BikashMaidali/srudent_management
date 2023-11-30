<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Staff</title>
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
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Staff Dashboard</h5>
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
            
            <li class="nav-item nav-category">
              <span class="nav-link">Management</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('home')}}">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{url('std_detail')}}" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">View Student Details</span>
                <i class="icon-people menu-icon"></i>
              </a>
             
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{url('staff_detail')}}" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Staff Details</span>
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
                                <h5 class="mb-0">Staff Details</h5>
                                <p class="ml-auto mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>           
            <div class="col-lg-12 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body"> 
                    <table class="table table-bordered" id="results-table">
                      <thead>
                        <tr>
                          <th> Staff ID </th>
                          <th> Name</th>
                          <th> Email Adress </th>
                          <th> Phone Number </th>
                          <th> Associated Subject </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($staff as $data)
                            <tr class="table-success">
                            <td>{{$data->student_no}}</td>
                            <td>{{$data->name}}</td>
                            <td> {{$data->email}}</td>
                            <td> {{$data->phone}} </td>
                            <td> {{$data->associated_subject}}</td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
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
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
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


                