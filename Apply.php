<!doctype html>
<html lang="en">

<head>
  <title>Tiss emplois || Postulez</title>
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
              <li><a href="job-listings.php">Emplois disponibles</a></li>
              <li><a href="about.php">À propos</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li class="d-lg-none"><a href="contact.php"  class="active">Contactez-nous</a></li>
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
    <section class="home-section section-hero inner-page overlay bg-image"
      style="background-image: url('images/fall.jpg');" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white">Postulez</h1>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="site-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form name="form_postulez" method="post" action="form-to-email.php">
    
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fprenom">Prénom</label>
                  <input type="text" name="fprenom" name="fprenom" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="fnom">Nom</label>
                  <input type="text" name="fnom" id="fnom" class="form-control">
                </div>
              </div>
    
              <div class="row form-group">
    
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" name="femail" id="femail" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="telephone">Télephone</label>
                  <input type="telephone" name="ftelephone" id="ftelephone" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="Adresse">Adresse</label>
                  <input type="adresse" name="fadresse" id="fadresse" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="Pays">Pays de résidence</label>
                  <input type="Country" name="fpays" name="fpays" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Parlez-nous de vous</label>
                  <textarea name="fmessage" id="fmessage" cols="30" rows="7" class="form-control"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="cv">Votre CV</label>
                  <div>
                  <input type="file" name="fileToUpload" id="fileToUpload" cols="30" rows="7">
                  </div>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Postulez" class="btn btn-primary btn-md text-white">
                </div>
              </div>
    
    
            </form>
          </div>
          <div class="col-lg-5 ml-auto">
            <img src="images/Postulez.png" id="imgposulez"></img>
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
            <p>
              Tiss &copy;
              <script>document.write(new Date().getFullYear());</script> tout droit réservé |  site web créé par <a id="achrafloudiy" href="http://ashsolutions.com" target="_blank">Achraf Loudiy</a>
            </p>
          </div>
        </div>
      </div>
    </footer>

  </div>

  <!-- SCRIPTS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>

  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>


</body>

</html>