<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Trarest - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.ico" rel="icon">
  <link href="assets/img/logo.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.7.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+62 896 9903 3745</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Trarest</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#Pesan">Order</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Trarest</span></h1>
          <h2>Delivering great food for more than 18 years!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

        <!-- Audio Control
        <div>
          <audio autoplay loop>
            <source src="assets/vendor/audio/Sabilulungan.mp3" type="audio/mp3"/>
          </audio>
        </div> -->

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <?php
      include "content/about.php";
    ?>

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Our Restaurant</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Chef berpengalaman</h4>
              <p>Dengan chef yang terampil dan terpilih dari seluruh nusantara, untuk memberi cita rasa khas dari setiap daerah.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Rasa yang tak berubah</h4>
              <p>Menggunakan resep yang diwariskan secara turun temurun, untuk menjaga keaslian rasa masakan</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4>Mewah dan Tradisional</h4>
              <p>Desain yang elegan, mewah dengan sentuhan tradisional menjadi tempat yang cocok untuk berkumpul dan menikmati bersama keluarga</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <?php
      include "content/Menu.php"
    ?>

    <?php
      include "content/special.php";
    ?>

    <!-- ======= Pesan online Section ======= -->
    <section id="Pesan" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Order Online</h2>
          <p>Order Anytime, Anywhere</p>
        </div>

        <div class="row">

          <div class="col-lg-4 mt-4 mt-lg-0"><a href="https://www.gojek.com/gofood/">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/order/gofood.png" class="img-fluid"></img>
              <br></br>
              <h6>GOFOOD</h6>
            </div></a>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0"><a href="https://food.grab.com/id/id/">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/order/grabfood.png" class="img-fluid"></img>
              <br></br>
              <h6>GRABFOOD</h6>
            </div></a>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0"><a href="https://shopee.co.id/m/shopeefood">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/order/shopeefood.png" class="img-fluid"></img>
              <br></br>
              <h6>SHOPEEFOOD</h6>
            </div></a>
          </div>

        </div>

      </div>
    </section><!--End Pesan online Section-->

    <?php
      include "content/event.php"
    ?>

    <?php
      include "content/book-table.php";
    ?>

    <?php
      include "content/galery.php";
    ?>


    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chefs</h2>
          <p>Our Proffesional Chefs</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Althaf Bayhaqi</h4>
                  <span>Master Chef</span>
                </div>
                <div class="social">
                  <a href="https://twitter.com/twitter?lang=id"><i class="bi bi-twitter"></i></a>
                  <a href="https://web.facebook.com/facebookapp/?_rdc=1&_rdr"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/instagram/"><i class="bi bi-instagram"></i></a>
                  <a href="https://id.linkedin.com/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Awanda Novayanti Cindy Raman</h4>
                  <span>Patissier</span>
                </div>
                <div class="social">
                  <a href="https://twitter.com/twitter?lang=id"><i class="bi bi-twitter"></i></a>
                  <a href="https://web.facebook.com/facebookapp/?_rdc=1&_rdr"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/instagram/"><i class="bi bi-instagram"></i></a>
                  <a href="https://id.linkedin.com/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Dani Fajar Nur Insani</h4>
                  <span>Cook</span>
                </div>
                <div class="social">
                  <a href="https://twitter.com/twitter?lang=id"><i class="bi bi-twitter"></i></a>
                  <a href="https://web.facebook.com/facebookapp/?_rdc=1&_rdr"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/instagram/"><i class="bi bi-instagram"></i></a>
                  <a href="https://id.linkedin.com/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/chefs-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Anhaf Maulana</h4>
                  <span>Barista</span>
                </div>
                <div class="social">
                  <a href="https://twitter.com/twitter?lang=id"><i class="bi bi-twitter"></i></a>
                  <a href="https://web.facebook.com/facebookapp/?_rdc=1&_rdr"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/instagram/"><i class="bi bi-instagram"></i></a>
                  <a href="https://id.linkedin.com/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.113797634069!2d106.73811909999999!3d-6.248732499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f08fa7f84ca7%3A0x9471bf81ae98b8ef!2sJl.%20KH.%20Wahid%20Hasyim%2C%20Banten!5e0!3m2!1sid!2sid!4v1652883367577!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. KH. Wahid Hasyim, Kreo Selatan, Kec.Larangan, Kota Tangerang, Banten 15155</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  11:00 AM - 2300 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>Trarest01@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 896 9903 3745</p>
              </div>

            </div>

          </div>
          
        <div class="col-lg-8 mt-5 mt-lg-0">

          <form name="Contact" action="https://formspree.io/f/xnqwrjvb" method="post" class="email-form" role="form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
            </div>
            <div class="text-center mt-3"><button type="submit" class="btn btn-lg btn-dark btn-block"><h5>Send Message</h5></button></div>
          </form>

          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <?php
      include "content/testimonial.php";
    ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Trarest</h3>
              <p>
                Jl. KH. Wahid Hasyim, Kreo Selatan, Kec.Larangan, Kota Tangerang, Banten 15155<br>
                , IDN<br><br>
                <strong>Phone:</strong> +62 896 9903 3745<br>
                <strong>Email:</strong> Trarest01@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/twitter?lang=id"><i class="bi bi-twitter"></i></a>
                <a href="https://web.facebook.com/facebookapp/?_rdc=1&_rdr"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/instagram/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.skype.com/id/features/skype-web/" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://id.linkedin.com/"><i class="bi bi-linkedin"></i></a>              
              </div>
            </div>
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
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>