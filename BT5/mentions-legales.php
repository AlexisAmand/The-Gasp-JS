<?php 
include('include/fonctions.inc.php'); 
include('langues/'.ChoixLangue().'.php');
?>

<!doctype html>
<html lang="fr">

<head>
	
    <meta charset="utf-8">
    
    <title>Mentions Légales de Le Gasp - Un jeu gratuit sur navigateur, mélange de Reversi et Othello (version Javascript)</title>
	<meta name="description" content=" ">
      
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- style perso et Bootstrap -->
    <link rel="stylesheet" href="css/style.css">

    <!-- link rel="stylesheet" href="css/bootstrap.perso.css" -->
	<link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">

	<link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="images/icones/cards_01-512.png" />

    <!-- code pour le RGPD -->

    <script type="text/javascript" src="/node_modules/tarteaucitronjs/tarteaucitron.js"></script>
	
        <script type="text/javascript">
        tarteaucitron.init({
    	  "privacyUrl": "", /* Privacy policy url */

    	  "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
    	  "cookieName": "tarteaucitron", /* Cookie name */
    
    	  "orientation": "middle", /* Banner position (top - bottom) */
       
          "groupServices": false, /* Group services by category */
                           
    	  "showAlertSmall": false, /* Show the small banner on bottom right */
    	  "cookieslist": false, /* Show the cookie list */
                           
          "closePopup": false, /* Show a close X on the banner */

          "showIcon": true, /* Show cookie icon to manage cookies */
          //"iconSrc": "", /* Optionnal: URL or base64 encoded image */
          "iconPosition": "BottomRight", /* BottomRight, BottomLeft, TopRight and TopLeft */

    	  "adblocker": false, /* Show a Warning if an adblocker is detected */
                           
          "DenyAllCta" : true, /* Show the deny all button */
          "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
          "highPrivacy": true, /* HIGHLY RECOMMANDED Disable auto consent */
                           
    	  "handleBrowserDNTRequest": false, /* If Do Not Track == 1, disallow all */

    	  "removeCredit": false, /* Remove credit link */
    	  "moreInfoLink": true, /* Show more info link */

          "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */
          "useExternalJs": false, /* If false, the tarteaucitron.js file will be loaded */

    	  //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for multisite */
                          
          "readmoreLink": "", /* Change the default readmore link */

          "mandatory": true, /* Show a message about mandatory cookies */
        });
        </script>

        <!-- Matomo via Tarte au citron -->
        <script>tarteaucitron.user.matomoHost = '//genealexis.fr/piwik/';</script>

		<!-- Le Gasp : fichier js pour les langues -->
		<script src="js/langue.js"></script>

</head>
  
<body>

<div id="BigPage"></div>
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  	<a class="navbar-brand" href="index.php?langue=<?php echo ChoixLangue(); ?>">
	<img src="images/icones/cards_01-512.png" alt="logo du jeu en JavaScript Le Gasp" class="d-inline-block align-top icone"> 
	<?php echo THE_GASP_TITLE; ?></a>  
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?langue=<?php echo ChoixLangue(); ?>"><?php echo NAV_BAR_AB; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#ModalNouvellePartie"><?php echo NAV_BAR_NG; ?></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#ModalOptions"><?php echo NAV_BAR_OPT; ?></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#ModalApropos"><?php echo NAV_BAR_RL; ?></a>
        </li>
      </ul>
      <span class="navbar-text" id="version"><script type="text/javascript">Version();</script></span>
    </div>
  </div>
</nav>

<header class="container-fluid">

	<div class="row" id="Plateau">

		<div class="col-12 col-md-6 d-flex align-items-center justify-content-center" id="titre">
		<h2 class="m-5"><?php echo THE_GASP_TITLE; ?></h2>
		</div>
    
		<div class="col-md-6 d-flex align-items-center justify-content-center" id="slogan">
		<p class="text-right m-5 text-white"><?php echo HEADER_SL; ?></p>
		</div>
    
	</div>

</header>

<section class="container">		

	<article class="col-md-12 bg-white">
	
		<h4 class="mt-4"><?php echo ML_TITLE; ?></h4>

			<h5 class="mt-4"><?php echo ML_EDITOR; ?></h5>
				
				<p><?php echo ML_BOITASITE; ?></p>

			<h5 class="mt-4"><?php echo ML_CREATOR; ?></h5>
					
				<p><?php echo ML_BOITASITE; ?></p>

			<h5 class="mt-4"><?php echo ML_HBGT; ?></h5>
				
				<p><?php echo ML_HBGT_ADRESS ?></p>

			<h5 class="mt-4"><?php echo ML_INFOS; ?></h5>

				<p><?php echo ML_CNIL; ?></p>

				<p><?php echo ML_COOKIES; ?></p>

	</article>
                	
    <?php 
	/* Le pied de page */
	include('include/footer.inc.php');

	/* Les 3 fenêtres modales nécessaires sur la page */
    include('include/options.inc.php'); 
    include('include/nouvellepartie.inc.php');
    include('include/apropos.inc.php'); 
    ?>

</section>

<script type="text/javascript" src="/node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      
<!-- code Matomo pour Tarte au citron -->
<script type="text/javascript">
tarteaucitron.user.matomoId = 13;
(tarteaucitron.job = tarteaucitron.job || []).push('matomo');
</script>

<!-- Le Gasp : fichier JS pour le jeu -->
<script src="js/game.js"></script>

</body>
</html>