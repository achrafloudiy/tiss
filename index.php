<!doctype html>
<html lang="en">
  <head>
  <title>Tiss emplois || Accueil</title>
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
              <li><a href="index.php" class="nav-link active">Accueil</a></li>
              <li><a href="job-listings.php">Emplois disponibles</a></li>
              <li><a href="about.php">À propos</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li class="d-lg-none"><a href="contact.php">Contactez-nous</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="contact.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-paper-plane"></span>Contactez-nous</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('images/bandeau.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white">Débutez-votre nouvelle carrière</h1>
              <p>Trouvez votre emploi au Canada.</p>
            </div>
            <form method="post" class="search-jobs-form" action="RecherchePostes.php">
              <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select name ='domaines' id='domaines' class="form-control">
                    <option value='Sélectionnez un domaine' name='Sélectionnez un domaine'>Sélectionnez un domaine</option>
                  <?php include 'PopulerDomaines.php';?>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select name ='professions' id='professions' class="form-control">
                    <option value='Sélectionnez un emploi' name='Sélectionnez un emploi'>Sélectionnez un emploi</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select name ='villes' id='villes' class="form-control">
                  <option value='Toutes les villes' name='Toutes les villes'>Toutes les villes</option>
                  <?php include 'PopulerVilles.php';?>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Rechercher</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      
    </section>
    
    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/bandeau.jpg');">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2 text-white">Nos statistiques</h2>
          </div>
        </div>
        <div class="row pb-0 block__19738 section-counter">

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number=<?php include 'StatistiquesEmployes.php';?>>0</strong>
            </div>
            <span class="caption">Candidats</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number=<?php include 'StatistiquesEmploisAffiches.php';?>>0</strong>
            </div>
            <span class="caption">Postes affichés</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number=<?php include 'StatistiquesEmploisCombles.php';?>>0</strong>
            </div>
            <span class="caption">Postes comblés</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              
              <strong class="number" data-number=<?php include 'StatistiquesEntreprises.php';?>>0</strong>
            </div>
            <span class="caption">Entreprises partenaires</span>
          </div>

            
        </div>
      </div>
    </section>

    

    
    <section class="site-section py-4 mb-5 border-top" style="display:none">
      <div class="container">
  
        <div class="row align-items-center">
          <div class="col-12 text-center mt-4 mb-5">
            <div class="row justify-content-center">
              <div class="col-md-7">
                <h2 class="section-title mb-2">Nos candidats travaillent pour des entreprises canadiennes de renom</h2>
                <p class="lead">Nous avons aidé plusieurs entreprise à combler leur manque de main d'oeuvre en ville et en région.</p>
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


    <section class="bg-light pt-5 testimony-full" style="display:none">
        
        <div class="owl-carousel single-carousel">

        
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mx-auto">
                <img class="img-fluid mx-auto" src="images/person_1.jpg" alt="Image">
                <blockquote>
                  <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
                  <p><cite> &mdash; Richard Anderson</cite></p>
                </blockquote>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 mx-auto">
                <img class="img-fluid mx-auto" src="images/person_2.jpg" alt="Image">
                <blockquote>
                  <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
                  <p><cite> &mdash; Chris Peters</cite></p>
                </blockquote>
              </div>
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
          <div id="textfooter" class="col-12">
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
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/traitements.js"></script>
    <script src="js/custom.js"></script>

     
  </body>
</html>