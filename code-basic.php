<?php 
include('include/fonctions.inc.php'); 
include('langues/'.ChoixLangue().'.php');
?>
<!doctype html>
<html lang="fr">

<head>
	
	<!-- Required meta tags -->
    <meta charset="utf-8">
    
    <title>Programmer Le Gasp en Basic - Un jeu gratuit, mélange de Reversi et Othello (version Javascript)</title>
	<meta name="description" content="Essais d'adaptation du jeu en Basic 'Le Gasp' en Qbasic, VB.net et enfin en Javascript">
      
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- style perso et Bootstrap -->
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.perso.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu&display=swap" rel="stylesheet">
	
	<link rel="icon" type="image/png" href="images/icones/cards_01-512.png" />

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

		<!-- Le Gasp : fichier js pour les langues -->

		<script src="js/langue.js"></script>

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
	
		<h4 class="mt-4"><?php echo BAS_TITLE; ?></h4>
								
			<figure class="text-center mt-4">
	          <img src="images/presse/JS-38-page-78.jpg" class="figure-img img-fluid" alt="Capture d'écran de la version du GASP développée en QBasic">
	          <figcaption class="figure-caption"><?php echo BAS_FIGCAPTION_1; ?></figcaption>
	        </figure>
   			  		
   			<br />  		
   			  			
			<code>			
			10 T = 5: REM TAILLE 4 x 4<br />
			20 HOME : REM EFFACE ECRAN<br />
			30 REM *---&lt;AFFICHAGE&gt;---*<br />
			40 PRINT "...1.2.3.4"<br />
			50 FOR Y = 2 TO T<br />
			60 PRINT : PRINT : PRINT : PRINT Y - 1;<br />
			70 FOR X = 2 TO T<br />
			80 HTAB X * 2: VTAB Y * 2<br />
			90 IF A(X,Y) = 1 THEN PRINT "X";<br />
			100 IF A(X,Y) = 0 THEN PRINT "O";<br />
			110 NEXT X: NEXT Y<br />
			120 REM *---&lt;CHOIX.JOUEUR&gt;---*<br />
			130 PRINT : PRINT : PRINT : PRINT "NC="NC: PRINT: PRINT<br />
			140 INPUT "X=";X:INPUT "Y=";Y<br />
			150 NC = NC + 1<br />
			160 X = X + 1: Y = Y + 1<br />
			170 FOR YT = Y - 1 TO Y + 1<br />
			180 FOR XT = X - 1 TO X + 1<br />
			190 IF XT = X AND YT = Y THEN 220<br />
			200 IF A(XT,YT) = 1 THEN A(XT,YT) = 0: GOTO 220<br />
			210 A(XT,YT) = 1<br />
			220 NEXT XT,YT: GOTO 20<br />
            </code>
            			
		<h4 class="mt-4"><?php echo QB_TITLE; ?></h4>
	
            <p class="mt-4 text-justify"><?php echo QB_TEXT; ?></p>
                
            <ul>
                <li><?php echo QB_SRC_LIST_1; ?></li>
                <li><?php echo QB_SRC_LIST_2; ?></li>
            </ul>

            <p class="mt-4 text-justify"><?php echo QB_SRC_TEXT; ?></p>

            <figure class="text-center mt-4">
                <img src="images/captures/applesoft-basic.jpg" class="figure-img img-fluid" alt="Capture d'écran de la version en QBasic du jeu 'Le Gasp'">
                <figcaption class="figure-caption"><?php echo QB_FIGCAPTION_1; ?></figcaption>
            </figure>

            <figure class="text-center mt-4">
                <img src="images/captures/capture-01.jpg" class="figure-img img-fluid" alt="Capture d'écran de la version en QBasic du jeu 'Le Gasp'">
                <figcaption class="figure-caption"><?php echo QB_FIGCAPTION_2; ?></figcaption>
            </figure> 
			
		<h4 class="mt-4"><?php echo VBN_TITLE; ?></h4>
	
			<p class="mt-4 text-justify"><?php echo VBN_TEXT; ?></p>
                
            <p class="text-center">
            	<img src="images/captures/thumbs/thegasp-01.jpg" class="img-thumbnail m-3 rounded float-none" alt="Capture d'écran de la version développée en VB.Net du jeu 'Le Gasp'">  
            	<img src="images/captures/thumbs/thegasp-03.jpg" class="img-thumbnail m-3 rounded float-none" alt="Capture d'écran de la version développée en VB.Net du jeu 'Le Gasp'">
            </p>
                        
		<h4 class="mt-4"><?php echo JS_TITLE; ?></h4>
		
            <p class="mt-4 text-justify mb-2"><?php echo JS_TEXT; ?></p>
                     
	</article>
                
	<footer class="row  mt-5">
		<div class="col-12 text-center mt-5">
			<p id="footer">
			<script type="text/javascript">
				Footer();
			</script>
			<?php echo "<br />".FOOTER_TEXT."</p>"; ?>
		</div>
	</footer>

	<?php 

	/* Les 3 fenêtres modales nécessaires sur la page */

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

</body>
</html>