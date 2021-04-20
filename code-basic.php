<?php include('langues/fr.php'); ?>

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

	<!-- vérifs de Google -->

	<meta name="google-site-verification" content="NrJvg2SL3r8GToGISpF-SJatGnKIvS5mekxb-2uTef4" />

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
  
<div class="container-fluid bg-light">

	<div class="container">   

	    <nav class="navbar navbar-expand-lg navbar-light">
	        <a class="navbar-brand" href="index.php">
	   		<img src="images/icones/cards_01-512.png" alt="logo du jeu en JavaScript Le Gasp" class="d-inline-block align-top" id="icone"> 
	        <?php echo THE_GASP_TITLE; ?></a>  
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarText">
	            <ul class="navbar-nav mr-auto">
	                <li class="nav-item">
	                    <a class="nav-item nav-link" href="index.php"><?php echo NAV_BAR_AB; ?></a>
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
	            <span class="navbar-text"><?php echo NAV_BAR_VS; ?> 0.11.115</span>
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
		<p><?php echo FOOTER_TEXT; ?></p>
		</div>
	</footer>
    
        <!-- Fenêtre modale pour les options -->
    
        <div class="modal fade" id="ModalOptions" tabindex="-1" role="dialog" aria-labelledby="ModalOptionsLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalOptionsLabel"><?php echo FM_OPT_TITLE; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <form name="formoptions">
                
                    <div class="modal-body text-justify">
    
                    <p><?php echo FM_OPT_TEXT; ?></p>
        
                    <p><strong><?php echo FM_OPT_BACK; ?></strong></p>
    
                    <img src="images/backs/back.png" id="1" onclick="mark(this)" class="cartes">	
                    <img src="images/backs/red.png" id="2" onclick="mark(this)" class="cartes">
                    <img src="images/backs/old.png" id="3" onclick="mark(this)" class="cartes">
                    <img src="images/backs/russian.png" id="4" onclick="mark(this)" class="cartes">
                    <img src="images/backs/red2.png" id="5" onclick="mark(this)" class="cartes">
                    <img src="images/backs/suisse.png" id="6" onclick="mark(this)" class="cartes">
    
                    </div>
    
                    <div class="modal-footer">
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-primary" onclick="	$('#ModalOptions').modal('hide');"><?php echo FM_OPT_SEND; ?></button>
                        </div>
                    </div>
    
                </form>
    
                </div>
            </div>
        </div>
        
        <!-- Fenêtre modale pour la nouvelle partie -->
        
        <div class="modal fade" id="ModalNouvellePartie" tabindex="-1" role="dialog" aria-labelledby="ModalNouvellePartieLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="ModalNouvellePartieLabel">Nouvelle partie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body text-justify"><?php echo FM_NG_Q; ?></div>
                <div class="modal-footer">
                    <div class="col-md-12 text-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo FM_NO; ?></button>
                        <button type="button" class="btn btn-primary" onclick="NouvellePartie()"><?php echo FM_YES; ?></button>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
        <!-- Fenêtre modale pour la fenêtre apropos -->
        
        <div class="modal fade" id="ModalApropos" tabindex="-1" role="dialog" aria-labelledby="ModalAproposLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="ModalAproposLabel"><?php echo FM_AB_TITLE; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body text-justify">
                    <?php echo FM_AB_TEXT; ?>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12 text-center">
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo FM_CLOSE; ?></button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
        <!-- Modale capture 01 -->
        
        <div class="modal fade" id="modalecapture01" tabindex="-1" role="dialog" aria-labelledby="modalecapture01Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            	<div class="modal-header">
			    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
			        </button>
			    </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">	
                            <img src="images/captures/thegasp01.jpg" alt="capture d'écran d'une partie du jeu Le Gasp en JavaScript">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    
        <!-- Modale capture 02 -->
        
        <div class="modal fade" id="modalecapture02" tabindex="-1" role="dialog" aria-labelledby="modalecapture02Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
               	<div class="modal-header">
			    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
			        </button>
			    </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">	
                            <img src="images/captures/thegasp02.jpg" alt="capture d'écran d'une partie du jeu Le Gasp en JavaScript">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    
        <!-- Modale capture 03 -->
        
        <div class="modal fade" id="modalecapture03" tabindex="-1" role="dialog" aria-labelledby="modalecapture03Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            	<div class="modal-header">
			    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
			        </button>
			    </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">	
                            <img src="images/captures/thegasp03.jpg" alt="capture d'écran d'une partie du jeu Le Gasp en JavaScript">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    
        <!-- Modale capture 04 -->
        
        <div class="modal fade" id="modalecapture04" tabindex="-1" role="dialog" aria-labelledby="modalecapture04Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
           		<div class="modal-header">
			    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
			        </button>
			    </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">	
                            <img src="images/captures/thegasp04.jpg" alt="capture d'écran d'une partie du jeu Le Gasp en JavaScript">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/thegasp.js"></script>
      
<!-- code Matomo pour Tarte au citron -->
      
<script type="text/javascript">
tarteaucitron.user.matomoId = 13;
(tarteaucitron.job = tarteaucitron.job || []).push('matomo');
</script>

</body>
</html>