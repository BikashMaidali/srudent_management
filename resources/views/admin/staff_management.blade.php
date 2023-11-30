<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
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
                                <h5 class="mb-0">Staff Details</h5>
                                <p class="ml-auto mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-sm-flex justify-content-center justify-content-sm-between" style="padding-bottom: 10px;">
                    <button type="button" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#addStaffModal">
                        <i class="icon-user-follow"></i> Add Staff
                    </button>
                </div>
            <!-- Quick Action Toolbar Ends-->
            @if(session()->has('message'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{session()->get('message')}}
              </div>
             @endif
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
                          <th> Action </th>
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
                            <td><a onclick="return confirm('Are You Sure?')" href="{{url('delete_staff',$data->id)}}" class="btn btn-warning">Remove</a></td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <button id="downloadExcel" class="btn btn-outline-success btn-fw btn-sm"><i class="icon-arrow-down-circle"></i> Download Record</button>
           </div>
          <!-- content-wrapper ends -->
                <div class="modal fade" id="addStaffModal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Staff Registration Form</h5>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form class="forms-sample" method="POST" action="{{url('add_staff')}}" id="staff_form">
                                    @csrf
                                    <!-- Form fields go here -->
                                    <div class="form-group">
                                        <label for="exampleInputName">Name</label>
                                        <input type="text" class="form-control form-control-lg" id="exampleInputName" placeholder="Name" name="name" style="border-radius:10px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputStaff">Staff ID</label>
                                        <input type="text" class="form-control" id="exampleInputStaff" placeholder="Staff ID" name="student_no" style="border-radius:10px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Email Address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email Address" name="email" style="border-radius:10px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPhone">Phone</label>
                                        <input type="text" class="form-control" id="exampleInputPhone" placeholder="Phone Number" name="phone" style="border-radius:10px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputSubject">Associated Subject</label>
                                        <input type="text" class="form-control" id="exampleInputSubject" placeholder="Associated Subject" name="associated_subject" style="border-radius:10px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" style="border-radius:10px;">
                                    </div>


                                    <input type="submit" class="btn btn-success" style="background-color:green;">
                                    
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script>
      // Function to download the table data as an Excel file
      function downloadExcel() {
      const table = document.getElementById("results-table");
      const rows = table.getElementsByTagName("tr");
      const data = [];
      for (let i = 0; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName("td");
        const rowData = [];
        for (let j = 0; j < cells.length; j++) {
          // Exclude the "Action" column (index 8)
          if (j !== 5) {
            rowData.push(cells[j].innerText);
          }
        }
        data.push(rowData);
      }
      
      /* SheetJS code to create an Excel workbook and worksheet */
      const wb = XLSX.utils.book_new();
      const ws = XLSX.utils.aoa_to_sheet(data);

      /* Add table headers to the worksheet */
      const headers = ["Name", "Staff ID", "Email Address", "Phone", "Associated Subject"];
      XLSX.utils.sheet_add_aoa(ws, [headers], {origin: "A1"});

      /* Add worksheet to the workbook */
      XLSX.utils.book_append_sheet(wb, ws, "Staff data");

      /* Convert workbook to binary */
      const wbout = XLSX.write(wb, {type: 'binary', bookType: "xlsx"});

      /* Create a Blob to store the workbook */
      const blob = new Blob([s2ab(wbout)], {type: "application/octet-stream"});

      /* Create a download link and trigger the download */
      const url = window.URL.createObjectURL(blob);
      const a = document.createElement("a");
      a.href = url;
      a.download = "staff_record.xlsx";
      document.body.appendChild(a);
      a.click();
      document.body.removeChild(a);
      window.URL.revokeObjectURL(url);
    }

    /* Utility function to convert string to ArrayBuffer */
    function s2ab(s) {
      const buf = new ArrayBuffer(s.length);
      const view = new Uint8Array(buf);
      for (let i = 0; i < s.length; i++) {
        view[i] = s.charCodeAt(i) & 0xFF;
      }
      return buf;
    }

    // Event listener for the Download Excel button
    document.getElementById("downloadExcel").addEventListener("click", downloadExcel);
    </script>

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


                