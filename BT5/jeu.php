<?php 
include('include/fonctions.inc.php'); 
include('langues/'.ChoixLangue().'.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>

	<meta charset="utf-8">

	<title>Jouer à Le Gasp - jeu gratuit sur navigateur, mélange de Reversi et Othello (version Javascript)</title>
	<meta name="description" content="Le Gasp est un jeu de cartes gratuit en pour jouer en solitaire sur ordinateur, tablette et mobile. A l'origine développé en Basic, puis en Qbasic, il est maintenant disponible dans une version en JavaScript jouable en ligne.">

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

<div id="BigPage">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
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

    <section class="container">

		<div class="row mt-5 justify-content-center">
		
			<div class="col-3">
				<img id="carte00" src="#" class="H">
				<img id="carte01" src="#" class="H">
			</div>
			
			<div class="col-3">
				<img id="carte02" src="#" class="H" >
			</div>
				
			<div class="col-3">
				<img id="carte03" src="#" class="H">
			</div>
				
			<div class="col-3">
				<img id="carte04" src="#" class="H">
				<img id="carte05" src="#" class="H">
			</div>
			
		</div>
            
        <div class="row justify-content-center">
				
			<div class="col-3">
				<img id="carte10" src="#" class="H">	
				<img id="carte11" src="images/backs/back.png" onclick="retourne(1,1);">
			</div>
				
			<div class="col-3">
				<img id="carte12" src="images/backs/back.png" onclick="retourne(1,2);">
			</div>
				
			<div class="col-3">
				<img id="carte13" src="images/backs/back.png" onclick="retourne(1,3);">
			</div>
				
			<div class="col-3">
				<img id="carte14" src="images/backs/back.png" onclick="retourne(1,4);">
				<img id="carte15" src="#" class="H">
			</div>
			
        </div>
            
		<div class="row justify-content-center">
		
			<div class="col-3">
				<img id="carte20" src="#" class="H">
				<img id="carte21" src="images/backs/back.png" onclick="retourne(2,1);">
			</div>
		
			<div class="col-3">
				<img id="carte22" src="images/backs/back.png" onclick="retourne(2,2);">
			</div>
			
			<div class="col-3">
				<img id="carte23" src="images/backs/back.png" onclick="retourne(2,3);">
			</div>
			
			<div class="col-3">
				<img id="carte24" src="images/backs/back.png" onclick="retourne(2,4);">
				<img id="carte25" src="#" class="H">
			</div>
		
		</div>
		
		<div class="row justify-content-center">
			
			<div class="col-3">
				<img id="carte30" src="#" class="H">
				<img id="carte31" src="images/backs/back.png" onclick="retourne(3,1);">
			</div>
		
			<div class="col-3">
				<img id="carte32" src="images/backs/back.png" onclick="retourne(3,2);">
			</div>
			
			<div class="col-3">
				<img id="carte33" src="images/backs/back.png" onclick="retourne(3,3);">
			</div>
			
			<div class="col-3">
				<img id="carte34" src="images/backs/back.png" onclick="retourne(3,4);">
				<img id="carte35" src="#" class="H">
			</div>
		
		</div>
		
		<div class="row justify-content-center">
			
			<div class="col-3">
				<img id="carte40" src="#" class="H">
				<img id="carte41" src="images/backs/back.png" onclick="retourne(4,1);">
			</div>
		
			<div class="col-3">
				<img id="carte42" src="images/backs/back.png" onclick="retourne(4,2);">
			</div>
			
			<div class="col-3">
				<img id="carte43" src="images/backs/back.png" onclick="retourne(4,3);">
			</div>
			
			<div class="col-3">
				<img id="carte44" src="images/backs/back.png" onclick="retourne(4,4);">
				<img id="carte45" src="#" class="H">
			</div>
		
		</div>
		
		<div class="row justify-content-center">
			
			<div class="col-3">
				<img id="carte50" src="#" class="H">
				<img id="carte51" src="#" class="H">
			</div>
		
			<div class="col-3">
				<img id="carte52" src="#" class="H">
			</div>
			
			<div class="col-3">
				<img id="carte53" src="#" class="H">
			</div>
			
			<div class="col-3">
				<img id="carte54" src="#" class="H">
				<img id="carte55" src="#" class="H">
			</div>
		
		</div>

    </section>

	</div> <!-- Div qui contient le calc -->
    
<footer class="container-fluid fixed-bottom bg-light">

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
            <form name="Info">
                <div class="form-group">
                    <label for="Score" class="col-form-label"><?php echo GAME_SCORE; ?></label>
                    <input type="text" name="coups" class="form-control">
                </div>
            </form>
            </div>
        </div>
    </div>

</footer>

<?php 
/* Les 4 fenêtres modales nécessaires sur la page */
include('include/options.inc.php');  
include('include/nouvellepartie.inc.php'); 
include('include/apropos.inc.php');
include('include/gagne.inc.php');
?>

<script type="text/javascript" src="/node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Le Gasp : fichier JS pour le jeu -->
<!-- C'est aussi ce fichier qui s'occupe de garder en mémoire la personnification -->
<script src="js/game.js"></script>

<!-- code Matomo pour Tarte au citron -->
<script type="text/javascript">
tarteaucitron.user.matomoId = 13;
(tarteaucitron.job = tarteaucitron.job || []).push('matomo');
</script>

</body>
</html>