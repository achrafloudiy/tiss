<!doctype html>
<html lang="en">

<head>
  <title>Tiss emplois || Emplois disponibles</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/custom-bs.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap-select.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/line-icons/style.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Baskervville&display=swap" rel="stylesheet">  
  <?php include 'DBConnect.php';?>
</head>

<body id="top">


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
        <div class="site-logo col-6"><a href="index.php"><img id='logotiss' src='images/logo.png'></img></a></div>


          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.php" class="nav-link">Accueil</a></li>
              <li><a href="job-listings.php" class="active">Emplois disponibles</a></li>
              <li><a href="about.php">À propos</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li class="d-lg-none"><a href="contact.php">Contactez-nous</a></li>
            </ul>
          </nav>

          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="contact.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span
                  class="mr-2 icon-paper-plane"></span>Contactez-nous</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span
                class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="home-section section-hero inner-page overlay bg-image" style="background-image: url('images/toronto.jpg');"
      id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white">Emplois disponibles</h1>
            </div>
          </div>
        </div>
      </div>


    </section>

    <!-- Datatable-->

    <section class="site-section">
      <div class="container">

      <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">Nos <?php include 'StatistiquesEmploisAffiches.php';?> postes affichés</h2>
          </div>
        </div>

        <table id="tablePostes" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Poste</th>
                <th>Lieu</th>
                <th>Type</th>
                <th>Salaire</th>
                <th>Date de pubication</th>
                <th>Expérience</th>
            </tr>
        </thead>
        <tbody>
        <?php include 'PopulerPostes.php';?>
            <tr>
                <td><a href=""><h2>Programmeur web</h2></a><strong>Domaine: </strong>TI</td>
                <td>Québec</td>
                <td>Temps plein</td>
                <td><strong>30k - 40k</strong></td>
                <td>2011/04/25</td>
                <td>2 - 5 ans</td>
            </tr>
        </tbody>
    </table>
      <!--
        <div class="mb-5">
          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/featured-listing-1.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-primary px-2 py-1 mb-3">Freelancer</span>
              <h2><a href="job-single.php">Dropbox Product Designer</a> </h2>
              <p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>Melbourn</h3>
              <span class="meta">Australia</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>

          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/featured-listing-2.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-warning px-2 py-1 mb-3">Full-time</span>
              <h2><a href="job-single.php">Creative Director in Intercom</a> </h2>
              <p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>London</h3>
              <span class="meta">United Kingdom</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>

          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/featured-listing-3.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-success px-2 py-1 mb-3">Part-time</span>
              <h2><a href="job-single.php">FullStack Developer in Shopify</a> </h2>
              <p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>London</h3>
              <span class="meta">United Kingdom</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>
          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/featured-listing-4.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-primary px-2 py-1 mb-3">Freelancer</span>
              <h2><a href="job-single.php">Dropbox Product Designer</a> </h2>
              <p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>Melbourn</h3>
              <span class="meta">Australia</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>

          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/featured-listing-5.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-warning px-2 py-1 mb-3">Full-time</span>
              <h2><a href="job-single.php">Creative Director in Intercom</a> </h2>
              <p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>London</h3>
              <span class="meta">United Kingdom</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>

          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/featured-listing-4.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-success px-2 py-1 mb-3">Part-time</span>
              <h2><a href="job-single.php">FullStack Developer in Shopify</a> </h2>
              <p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>London</h3>
              <span class="meta">United Kingdom</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>

          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/featured-listing-3.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-success px-2 py-1 mb-3">Part-time</span>
              <h2><a href="job-single.php">FullStack Developer in Shopify</a> </h2>
              <p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>London</h3>
              <span class="meta">United Kingdom</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>

        </div>

        <div class="row pagination-wrap">

          <div class="col-md-6 text-center text-md-left">
            <div class="custom-pagination ml-auto">
              <a href="#" class="prev">Previous</a>
              <div class="d-inline-block">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
              </div>
              <a href="#" class="next">Next</a>
            </div>
          </div>
        </div>
-->
      </div>
    </section>

    <section class="site-section py-4 mb-5 border-top" style="display:none">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-12 text-center mt-4 mb-5">
            <div class="row justify-content-center">
              <div class="col-md-7">
                <h2 class="section-title mb-2">Our Candidates Work In Company</h2>
                <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam fugit
                  mollitia ipsum facilis expedita tempora suscipit iste</p>
              </div>
            </div>

          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_mailchimp.svg" alt="Image" class="img-fluid logo-1">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_paypal.svg" alt="Image" class="img-fluid logo-2">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_stripe.svg" alt="Image" class="img-fluid logo-3">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_visa.svg" alt="Image" class="img-fluid logo-4">
          </div>
        </div>
      </div>
    </section>

    <footer class="site-footer">    
      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Site</h3>
            <ul class="list-unstyled">
              <li><a href="#">Emplois disponibles</a></li>
              <li><a href="#">Services</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Entreprise</h3>
            <ul class="list-unstyled">
              <li><a href="#">À Propos</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="#">Service à la clientèle</a></li>
              <li><a href="#">Vie privée</a></li>
              <li><a href="#">Conditions d'utilisation</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">            
            <h3>Contactez-nous</h3>
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-12">
            <img id='logofooter' src="images/logo.png"></img>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Tiss &copy;
              <script>document.write(new Date().getFullYear());</script> tout droit réservé |  site web créé par <a id="achrafloudiy" href="http://ashsolutions.com" target="_blank">Achraf Loudiy</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>  

  </div>

  <!-- SCRIPTS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>

  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>

  <!-- <script src="js/bootstrap-select.min.js"></script> -->

  <script src="js/custom.js"></script>
  <script src="js/datatable.js"></script>
 

</body>

</html>