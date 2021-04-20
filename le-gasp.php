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
	        Le Gasp JS</a>  
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarText">
	            <ul class="navbar-nav mr-auto">
	                <li class="nav-item">
	                    <a class="nav-item nav-link" href="index.php">A propos</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#ModalNouvellePartie">Nouvelle partie</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#ModalOptions">Options</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#ModalApropos">Règles</a>
	                </li>
	            </ul>
	            <span class="navbar-text">Version 0.11.115</span>
	        </div>
	    </nav>

    </div>
    
</div>

<header class="container-fluid">

	<div class="row" id="Plateau">

		<div class="col-12 col-md-6 d-flex align-items-center justify-content-center" id="titre">
		<h2 class="m-5">Le Gasp JS</h2>
		</div>
    
		<div class="col-md-6 d-flex align-items-center justify-content-center" id="slogan">
		<p class="text-right m-5 text-white">Saurez-vous toutes les retourner ?</p>
		</div>
    
	</div>

</header>

<section class="container">		

	<article class="col-md-12 bg-white">
    
		<h4 class="mt-4">Le Gasp</h4>
		
		<p>Note: Dans l'article ci-dessous, j'ai masqué la solution en dix coups pour la grille 4 x 4.</p>	
		    
    		<figure class="text-center mt-4">
	          <img src="images/presse/JS-38-page-54-1.jpg" class="figure-img img-fluid" alt="Article de presse sur Le Gasp paru dans Jeux et Stratégie n°38 en 1985">
	          <figcaption class="figure-caption">(source: Jeux &amp; Stratégie n°38 - avril/mai 1985)</figcaption>
	        </figure>
	        
	        <figure class="text-center mt-4">
	          <img src="images/presse/JS-38-page-54-2.jpg" class="figure-img img-fluid" alt="Article de presse sur Le Gasp paru dans Jeux et Stratégie n°38 en 1985">
	          <figcaption class="figure-caption">(source: Jeux &amp; Stratégie n°38 - avril/mai 1985)</figcaption>
	        </figure>
	        
	        <br />
	        
	</article>
                
	<footer class="row  mt-5">
		<div class="col-12 text-center mt-5">
		<p>Jeu adapté par <a href="http://twitter.com/alexisamand" target="_blank" title="Alexis Amand - Développeur à Valenciennes">Alexis AMAND</a> d'après Francis Piault et Michel Brassinne
		<br />(Merci à eux pour l'idée)</p>
		</div>
	</footer>
    
        <!-- Fenêtre modale pour les options -->
    
        <div class="modal fade" id="ModalOptions" tabindex="-1" role="dialog" aria-labelledby="ModalOptionsLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalOptionsLabel">Options</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <form name="formoptions">
                
                    <div class="modal-body text-justify">
    
                    <p>Choisissez un dos pour vos cartes, puis cliquez sur 'Ok' pour valider votre choix. Ce changement n'a aucune répercution sur la partie en cours.</p>
        
                    <p><strong>Dos de la carte</strong></p>
    
                    <img src="images/backs/back.png" id="1" onclick="mark(this)" class="cartes">	
                    <img src="images/backs/red.png" id="2" onclick="mark(this)" class="cartes">
                    <img src="images/backs/old.png" id="3" onclick="mark(this)" class="cartes">
                    <img src="images/backs/russian.png" id="4" onclick="mark(this)" class="cartes">
                    <img src="images/backs/red2.png" id="5" onclick="mark(this)" class="cartes">
                    <img src="images/backs/suisse.png" id="6" onclick="mark(this)" class="cartes">
    
                    </div>
    
                    <div class="modal-footer">
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-primary" onclick="	$('#ModalOptions').modal('hide');">Ok</button>
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
                <div class="modal-body text-justify">
                Etes-vous certain(e) de vouloir commencer une nouvelle partie ?
                </div>
                <div class="modal-footer">
                    <div class="col-md-12 text-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                        <button type="button" class="btn btn-primary" onclick="NouvellePartie()">Oui</button>
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
                <h5 class="modal-title" id="ModalAproposLabel">Règles du jeu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body text-justify">
    
                <p>Il s'agit d'un petit jeu de réflexion qui est un petit mélange de Reverso et d'Othello. Vous disposez d'un plateau de jeu avec 16 cartes formant un carré 4 x 4. Le but est de toutes les retourner en respectant une seule règle : Quand vous désignez une carte, ses 8 voisines sont retournées sauf elle. Saurez-vous toutes les retourner ?</p>
    
                <p>Il existe des solutions en 6, 8 ou 10 coups.</p>
                
                </div>
                <div class="modal-footer text-center">
                    <div class="col-md-12 text-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
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