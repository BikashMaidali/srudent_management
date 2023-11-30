<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>School</title>

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
            <a href="about" class="btn btn-primary">About Us</a>

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
        <span class="subhead">Let's make Student do online Registeration</span>
        <h1 class="display-4">Comfortable Life</h1>
      </div>
    </div>
  </div>


 
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to our Free Registeration Site <br> Center</h1>
            <p class="text-grey mb-4">Generally, the school maintains student data on paper during the registration. In some cases, they do have an excel but it is not centralized. Paper data is ensure, time consuming and resources wastage. So lack of centralized databases causes in many ways!</p>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/6.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Provide Feedback</h1>

      <form class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-13 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address..">
          </div>
         
        
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit</button>
      </form>
    </div>
  </div> <!-- .page-section -->
  
  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
      <div class="col-sm-6 col-lg-3 py-3">
      <a href="about" style ="color:white;"><h5>About Us</h5></a>
          <ul class="footer-menu">
            <li><a href="about">Vision</a></li>
            <li><a href="about">Mission</a></li>
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