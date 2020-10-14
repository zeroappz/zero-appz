<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Zero Appz - Landing Page</title>
  <meta content="" name="descriptison">
  <meta content="App Development Company" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="assets/img/logo.png" alt="Zero Appz" class="img-fluid"><span class="nav_left">ZERO APPZ</span></a>
      </div>
      <!-- Navigation Area-->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li class="drop-down"><a href="about.php">About</a>
            <ul>
              <li><a href="ourteam.php">Our Team</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="services.php">Our Services</a>
            <ul>
              <li><a href="services.php">Competence</a></li>
              <li><a href="techstack.php">Technology Stack</a></li>
              <li><a href="app_insights.php">App Insights</a></li>
            </ul>
          </li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li class="drop-down"><a href="">Marketplace</a>
            <ul>
            
              <li><a href="https://skooldeck.com">Skool Deck</a></li>
              <li><a href="https://matrix.zeroappz.com">Zero Matrix</a></li>
              <li><a href="https://filings.zeroappz.com">Zero Filings</a></li>
              <li><a href="https://pos.zeroappz.com">Zero POS</a></li>
              <li><a href="https://clinicals.zeroappz.com">Zero Clinics</a></li>
              <li><a href="https://finance.zeroappz.com">Zero Finance</a></li>
            </ul>
          </li>
          <li><a href="career.php">Career</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <br>
  <br>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Reach Us At</p>
      </div>

      <div class="row">


        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
          <div class="info">
             
              <div class="address">
              <i class="icofont-google-map"></i>
              <h4>INDIA</h4>
              <p> REGISTERED:<br> #15, Sanikuttai Street, Ammapet, Salem, Tamilnadu 636003</p><br>
              <p>OPERATION:<br> #281, Vasantham Complex, II Floor, Salem, Tamilnadu 636004</p><br>
            </div>
                

            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>SINGAPORE</h4>
              <p>2 BUROH CRESCENT, #03-08, ACE@BUROH, Singapore 627546</p>
            </div>

            <div class="email">
              <i class="icofont-phone"></i>
              <h4>MAIL US</h4>
              <p>info@zeroappz.com <br> support@zeroappz.com</p>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>CONTACT US</h4>
              <p>+91 0427 497 2917 <br> +91 96297 73355</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  </main>

  <?php
  include('footer.php');
  ?>