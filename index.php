<?php
// Start session only once at the very top
session_start();

// Capture error messages if any
$adminError = isset($_SESSION['adminError']) ? $_SESSION['adminError'] : '';
$studentError = isset($_SESSION['studentError']) ? $_SESSION['studentError'] : '';
// Clear after capturing
unset($_SESSION['adminError']);
unset($_SESSION['studentError']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SRS BCCI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="shortcut icon" href="assets/img/ronk1.jpg" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style21.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style2025.css">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a class="navbar-brand" href="index.php">
        <img src="img/BCCI/BCCI_LOGO.png" alt="Logo" style="width:55px;height:55px;">
      </a>
      <h1 class="logo mr-auto"><a href="index.php">Butuan City College</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Courses</a></li>
          <li><a href="#">Contact</a></li>
          <li class="drop-down">
            <a href="#">Login <i class="bx bxs-down-arrow"></i></a>
            <ul>
              <li><a href="#" data-toggle="modal" data-target="#adminLoginModal">Administrator</a></li>
              <li><a href="#" data-toggle="modal" data-target="#studentLoginModal">Student</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- End Header -->

  <style>
    #header {
      transition: top 0.8s ease-in-out;
    }
  </style>

  <script>
    let prevScrollPos = window.pageYOffset;
    const header = document.getElementById("header");

    window.onscroll = function () {
      let currentScrollPos = window.pageYOffset;
      if (prevScrollPos > currentScrollPos) {
        header.style.top = "0";
      } else {
        header.style.top = "-70px";
      }
      prevScrollPos = currentScrollPos;
    };
  </script>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center"
    style="background-image: url('img/BCCI/BCCI_LANDING1.jpg');">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Student Record System<br>Butuan City Colleges</h1>
      <a href="#" class="btn-get-started">Read More</a>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Our Mission</h2>
          <p>Our Mission</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="img/BCCI/BCCI_IMG1.jpg" style="height:400px;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p>
              With a four-fold function - instruction, research, extension, and production - BCCI offers responsive and alternative programs supportive of the development of global excellence and lifelong learning. 
            </p>
            <a href="#" class="learn-more-btn">Read More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">
        <div class="row counters">
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">4020</span>
            <p>Students</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">12</span>
            <p>Departments</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">16</span>
            <p>Instructors</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">7</span>
            <p>Faculties</p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Counts Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Student Records System</h3>
            <p>
              Butuan City,<br>Philippines<br><br>
              <strong>Phone:</strong> 0912343438<br>
              <strong>Email:</strong>Butuancitycollegesbc@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Departments</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">BSIT</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">BSCE</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">BSA</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">BSBA</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">BN</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Receive Email and Updates from BCCI!</p>
            <form action="" method="post">
              <input type="email" name="email">
              <input type="submit" value="Subscribe Now!!">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; <strong><span>Student Records System</span></strong> -
          <?php echo date('Y'); ?> - Developed By among groupo
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Admin Login Modal md5 password method for security -->
  <div class="modal fade" id="adminLoginModal" tabindex="-1" role="dialog" aria-labelledby="adminLoginLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="adminLoginLabel">Registrar Admin</h5>
          <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <?php if(!empty($adminError)) echo '<div class="alert alert-danger">'.$adminError.'</div>'; ?>
          <form action="adminLogin.php" method="POST">
            <div class="form-group">
              <label>Registrar ID</label>
              <input type="text" name="staffId" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" id="adminPassword" required>
              <input type="checkbox" id="showAdminPassword"> Show Password
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Student Login Modal -->
  <div class="modal fade" id="studentLoginModal" tabindex="-1" role="dialog" aria-labelledby="studentLoginLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="studentLoginLabel">Student Login</h5>
          <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <?php if(!empty($studentError)) echo '<div class="alert alert-danger">'.$studentError.'</div>'; ?>
          <form action="studentLogin.php" method="POST">
            <div class="form-group">
              <label>Student ID No.</label>
              <input type="text" name="matricNo" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" id="studentPassword" required>
              <input type="checkbox" id="showStudentPassword"> Show Password
            </div>
            <button type="submit" name="login" class="btn btn-success btn-block">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- JS to auto-open modal if there's an error and show password functionality -->
  <script>
    $(document).ready(function () {
      <?php if(!empty($adminError)) { ?>
        $('#adminLoginModal').modal('show');
      <?php } ?>
      <?php if(!empty($studentError)) { ?>
        $('#studentLoginModal').modal('show');
      <?php } ?>

      // Admin password toggle
      $('#showAdminPassword').change(function() {
        const pass = $('#adminPassword');
        pass.attr('type', this.checked ? 'text' : 'password');
      });

      // Student password toggle
      $('#showStudentPassword').change(function() {
        const pass = $('#studentPassword');
        pass.attr('type', this.checked ? 'text' : 'password');
      });
    });
  </script>

</body>

</html>
