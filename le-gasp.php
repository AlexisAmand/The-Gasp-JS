<?php 
include('include/fonctions.inc.php'); 
include('langues/'.ChoixLangue().'.php');
?>

<!doctype html>
<html lang="fr">

<head>
	
	<!-- Required meta tags -->
    <meta charset="utf-8">
    
    <title>Histoire du jeu Le Gasp - Un jeu gratuit, mélange de Reversi et Othello (version Javascript)</title>
	<meta name="description" content="Histoire du jeu Le Gasp qui a pour origine un article paru dans la revue Jeux & Stratégie en 1985">
      
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- style perso et Bootstrap -->
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.perso.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="lightbox/bootstrap-lightbox.css">
	
	<link rel="icon" type="image/png" href="images/icones/cards_01-512.png" />

	<!-- Le Gasp -->

	<script src="js/game.js"></script>

    <!-- code pour le RGPD -->

    <script type="text/javascript" src="/tarteaucitron/tarteaucitron.js"></script>

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

</head>
  
<body>

<div id="BigPage"></div>
  
<div class="container-fluid bg-light">

	<div class="container">   

        <nav class="navbar navbar-expand-lg navbar-light">
	        <a class="navbar-brand" href="index.php?langue=<?php echo ChoixLangue(); ?>">
	   		<img src="images/icones/cards_01-512.png" alt="logo du jeu en JavaScript Le Gasp" class="d-inline-block align-top" id="icone"> 
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
	            <span class="navbar-text" id="version"><script type="text/javascript">Version();</script><?php echo "<a href='?langue=fr'>".Drapeau(); ?></a></span>
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
    
		<h4 class="mt-4"><?php echo AJS_TITLE;?></h4>
		
		<p><?php echo AJS_TEXT; ?></p>	
	    
    		<figure class="text-center mt-4">
	          <img src="images/presse/le-gasp-07.jpg" class="figure-img img-fluid" alt="Article de presse sur Le Gasp paru dans Jeux et Stratégie n°38 en 1985">
	          <figcaption class="figure-caption"><?php echo AJS_FIGCAPTION_1; ?></figcaption>
	        </figure>
	        
	        <figure class="text-center mt-4">
	          <img src="images/presse/le-gasp-08.jpg" class="figure-img img-fluid" alt="Article de presse sur Le Gasp paru dans Jeux et Stratégie n°38 en 1985">
	          <figcaption class="figure-caption"><?php echo AJS_FIGCAPTION_2; ?></figcaption>
	        </figure>
	        
	        <br />
	        
	</article>
                
	<footer class="row  mt-5">
		<div class="col-12 text-center mt-5">
		<?php footer(); ?>
		</div>
	</footer>
  
    <?php 
    include('include/options.inc.php');  
    include('include/nouvellepartie.inc.php'); 
    include('include/apropos.inc.php');
    ?>


</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!-- code Matomo pour Tarte au citron -->
      
<script type="text/javascript">
tarteaucitron.user.matomoId = 13;
(tarteaucitron.job = tarteaucitron.job || []).push('matomo');
</script>

<script>
	$('#demoLightbox').lightbox(options)
</script>

</body>
</html>