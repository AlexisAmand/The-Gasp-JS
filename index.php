<?php 
include('include/fonctions.inc.php'); 
include('langues/'.ChoixLangue().'.php');
?>

<!doctype html>
<html lang="fr">

<head>
	
    <meta charset="utf-8">
    
    <title>Le Gasp - Un jeu gratuit sur navigateur, mélange de Reversi et Othello (version Javascript)</title>
	<meta name="description" content="Le Gasp est un jeu de cartes gratuit jouable en solitaire sur navigateur sur ordinateur, mobile et tablette. A l'origine développé en Basic, puis en Qbasic, il est maintenant disponible dans une version en JavaScript.">
      
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- style perso et Bootstrap -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.perso.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu&display=swap" rel="stylesheet">	
	<link rel="icon" type="image/png" href="images/icones/cards_01-512.png" />

	<!-- vérifs de Google -->
	<meta name="google-site-verification" content="NrJvg2SL3r8GToGISpF-SJatGnKIvS5mekxb-2uTef4" />

	<!-- Le Gasp : fichier JS pour le jeu -->
	<script src="js/game.js"></script>

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
  
<div class="container-fluid bg-light">

	<div class="container">   

        <nav class="navbar navbar-expand-lg navbar-light">
	        <a class="navbar-brand" href="index.php?langue=<?php echo ChoixLangue(); ?>">
	   		<img src="images/icones/cards_01-512.png" alt="logo du jeu en JavaScript Le Gasp" class="d-inline-block align-top icone"> 
	        <?php echo THE_GASP_TITLE; ?></a>  
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarText">
	            <ul class="navbar-nav mr-auto">
	                <li class="nav-item">
	                    <a class="nav-item nav-link" href="index.php?langue=<?php echo ChoixLangue(); ?>"><?php echo NAV_BAR_AB; ?></a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#ModalNouvellePartie"><?php echo NAV_BAR_NG; ?></a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#ModalOptions"><?php echo NAV_BAR_OPT; ?></a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#ModalApropos"><?php echo NAV_BAR_RL; ?></a>
	                </li>
	            </ul>
	            <span class="navbar-text" id="version"><script type="text/javascript">Version();</script></span>
	        </div>
	    </nav>

    </div>
    
</div>

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
    
		<h4 class="mt-4"><?php echo IND_TITLE; ?></h4>
    
			<p class="mt-4 text-justify"><?php echo IND_TEXT_1; ?></p>
    
			<p class="text-justify"><?php echo IND_TEXT_2; ?></p>

            <button class="nav-item nav-link btn btn-primary mx-auto my-5" href="#" data-toggle="modal" data-target="#ModalNouvellePartie"><?php echo IND_START; ?></button>
 
			<div class="row">

			<?php

			/* Les 4 miniatures */

			for ($i=1;$i<5;$i++)
				{
				echo '<div class="col-3">	
				<a href="#" data-toggle="modal" data-target="#modalecapture0'.$i.'" title="Capture d\'écran du jeu de carte solitaire sur navigateur Le Gasp">
				<img src="images/captures/thumbs/le-gasp-0'.$i.'.jpg" class="img-thumbnail mb-3" alt="Capture d\'écran du jeu de carte gratuit sur navigateur Le Gasp"></a>
				</div>';
				}

			?>
        
			</div>
                
            <p class="text-center mt-4"><?php echo HEADER_SL; ?><br />
            <a href="jeu.php?langue=<?php echo ChoixLangue(); ?>" title="Lancer une partie gratuite de Le Gasp JS"><?php echo IND_START_GAME; ?></a></p>
    
            <p class="text-center mt-4 mb-2"><?php echo IND_GITHUB; ?></p>
            	
	</article>
                
    <?php 
	/* Le pied de page */
	include('include/footer.inc.php');
	
	/* Les 3 fenêtres modales nécessaires sur la page */
    include('include/options.inc.php');
    include('include/nouvellepartie.inc.php'); 
    include('include/apropos.inc.php');
	
	for($i=1; $i<5;$i++)
		{
		ModaleImage($i, "capture d\'écran d\'une partie du jeu Le Gasp en JavaScript");
		}
    ?>

</section>

<script type="text/javascript" src="/node_modules/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      
<!-- code Matomo pour Tarte au citron -->
<script type="text/javascript">
tarteaucitron.user.matomoId = 13;
(tarteaucitron.job = tarteaucitron.job || []).push('matomo');
</script>

</body>
</html>