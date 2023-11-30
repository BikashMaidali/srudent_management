<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>  Student Management System HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  <style>
    .btn.btn-primary {
      background-color: gray;
      border: gray;
      color: white;
    }
  </style>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call"></span> +97517392419</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail"></span> Studentreg.edu.bt</a>
            </div>
          </div>
          
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary"></span>School Student Management System</a>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
           
            @if(Route::has('login'))
            
            @auth

            <x-app-layout>

                </x-app-layout>

            
            <h1></h1>

            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="home">Home </a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login </a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register </a>
            </li>
        
            @endauth
            
            @endif

        </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg-image.jpeg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <h1 class="font-weight-normal">About Us</h1>
      </div>
    </div>
  </div>


   
        </div> <!-- .page-section -->

        <div class="page-section">
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp">
                    <h1 class="text-center mb-3">Vision</h1>
                    <div class="text-lg">
                    <p>Student management system is a web based system to provide user-friendly platform for the students to register and manage their academic information through online. This system will reduce paper work and allow student to access and modify their  registration details from anywhere at any time through online. This system integrates various features to enhance efficiency accuracy and  convince for both students and staffs. It will also allow communication between the students and the staffs.
                    </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp">
                    <h1 class="text-center mb-3">Mission</h1>
                    <div class="text-lg">
                    <p>To make students and staffs do online work by reducing paper works.
                      To improve administrative efficiency, enhance communication, and provide accurate and organized data for better decision making. 
                    </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>About Us</h5>
                <ul class="footer-menu">
                    <li><a href="#">Vision</a></li>
                    <li><a href="#">Mission</a></li>
                </ul>
                </div>
        
                <div class="col-sm-6 col-lg-3 py-3">
                <h5>Contact</h5>
                <p class="footer-link mt-2">Bhutan </p>
                <a href="#" class="footer-link">+97577702806</a>
                <a href="#" class="footer-link">Studentcenter@edu.bt</a>
                </div>

                <div class="col-sm-9 col-lg-3 py-3">
                <h5>Social Media</h5>
                <div class="footer-sosmed mt-3">
                    <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                    <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                    <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                </div>
                </div>
            </div>
        </div>
    </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>