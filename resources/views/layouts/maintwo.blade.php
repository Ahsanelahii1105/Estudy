<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    @stack('title')
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <!-- Flaticon Font -->
    <link href="{{asset('lib/flaticon/font/flaticon.css')}}" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />


  </head>

<body>
  @if(session('success'))
    <div class="alert alert-primary">{{session('success')}}</div>

  @endif
  @if(session('LoggedIn'))
    <div class="alert alert-primary">{{session('LoggedIn')}}</div>

  @endif
  @if(session('Error'))
    <div class="alert alert-primary">{{session('Error')}}</div>

  @endif
  <!-- Navbar Start -->
  <div class="container-fluid bg-light position-relative shadow"
    style="width: 100%; height: 580px; background-image: url('img/library.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
    <nav class="navbar navbar-expand-lg navbar-light py-3 py-lg-0 px-0 px-lg-5">
      <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
        <img src="img/logo.png" height="150px" width="150px" alt="">
      </a>
      <button type="button" class="navbar-toggler clicktoggle" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon clicktoggle"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav font-weight-bold mx-auto py-0">
          <a href="/" class="nav-item nav-link">Home</a>
          <a href="/subject" class="nav-item nav-link">Subjects</a>
          <a href="/courses" class="nav-item nav-link">Courses</a>
          <a href="/faculty" class="nav-item nav-link">Faculty Need?</a>
          <a href="/faculty" class="nav-item nav-link">Discussion Library</a>
          <a href="/contact" class="nav-item nav-link active">Contact</a>
        </div>
        <a href="/login" class="btn btn-primary px-4">Login</a>
      </div>
    </nav>
    <!-- Header Start -->
    <div class="container-fluid mb-5 hidenav">
      <div class="d-flex flex-column align-items-center justify-content-center " style="min-height: 300px">
        @yield('PageTitle')
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="/">Home</a></p>
          <p class="m-0 px-2">/</p>
          @yield('PageText')
        </div>
      </div>
    </div>
    <!-- Header End -->
  </div>
  <!-- Navbar End -->


  <div>
    @yield('content')
  </div>


  <!-- Footer Start -->
  <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
      <div class="col-lg-3 col-md-6 mb-5">
        <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-2 p-0"
          style="font-size: 40px; line-height: 30px">
          <img src="img/logo.png" class="bg-img" height="150px" width="150px" alt="logo">
        </a>
        <p>
          Labore dolor amet ipsum ea, erat sit ipsum duo eos. Volup amet ea
          dolor et magna dolor, elitr rebum duo est sed diam elitr. Stet elitr
          stet diam duo eos rebum ipsum diam ipsum elitr.
        </p>
        <div class="d-flex justify-content-start mt-4">
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px"
            href="#"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px"
            href="#"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px"
            href="#"><i class="fab fa-linkedin-in"></i></a>
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px"
            href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5">
        <h3 class="text-primary mb-4">Get In Touch</h3>
        <div class="d-flex">
          <h4 class="fa fa-map-marker-alt text-primary"></h4>
          <div class="pl-3">
            <h5 class="text-white">Address</h5>
            <p>Aptech Garden Center, Karachi.</p>
          </div>
        </div>
        <div class="d-flex">
          <h4 class="fa fa-envelope text-primary"></h4>
          <div class="pl-3">
            <h5 class="text-white">Email</h5>
            <p>mindgroweredu@gmail.com</p>
          </div>
        </div>
        <div class="d-flex">
          <h4 class="fa fa-phone-alt text-primary"></h4>
          <div class="pl-3">
            <h5 class="text-white">Phone</h5>
            <p>0303-039483</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5">
        <h3 class="text-primary mb-4">Quick Links</h3>
        <div class="d-flex flex-column justify-content-start">
          <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
          <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
          <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Terms And Conditions</a>
          <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
          <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5">
        <h3 class="text-primary mb-4">Newsletter</h3>
        <form action="">
          <div class="form-group">
            <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
          </div>
          <div class="form-group">
            <input type="email" class="form-control border-0 py-4" placeholder="Your Email" required="required" />
          </div>
          <div>
            <button class="btn btn-primary btn-block border-0 py-3" type="submit">
              Submit Now
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;">
      <p class="m-0 text-center text-white">
        &copy;
        <a class="text-primary font-weight-bold" href="#">Mind Grower Education</a>.
        All Rights Reserved.

        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
        Designed by
        <a class="text-primary font-weight-bold" href="#">Team name</a>
        <br />Distributed By:
        <a href="#" target="_blank">Apech Center</a>
      </p>
    </div>
  </div>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-primary p-3 back-to-top">
    <i class="fa fa-angle-double-up"></i>
  </a>




   <!-- JavaScript Libraries -->
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>


  <!-- Contact Javascript File -->
  <script src="mail/jqBootstrapValidation.min.js"></script>
  <script src="mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>

</body>

</html>

<script>
  $(document).ready(function () {
    $('.clicktoggle').click(function () {
      $('.hidenav').hide();
    });
  })
</script>
