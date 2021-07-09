/* ---------------------------------------------------- */
/* Nouvelle partie : La grille de jeu est réinitialisée */
/* ---------------------------------------------------- */

function NouvellePartie() {

	dos = DosSession();

	/* 
	Cette partie permet un peu de faire un équivalent du $_GET[] en javascript. On regarde si il y a un param dans l'url. S'il y en a un, il devient la langue par défaut, sinon on met par défaut le Français.
	*/

	const queryString = window.location.search;
	const urlParams = new URLSearchParams (queryString);

	if (urlParams.get ('langue') != null) {
		langue = urlParams.get ('langue')
	} else {
		langue = "fr"
	}
	
	/* Lancement d'une nouvelle partie */

	//document.location.href = 'jeu.php?langue=' + langue;	
	window.location.replace("jeu.php?langue=" + langue);
	nbCoups = 0;
	document.Info.coups.value = nbCoups;

	$('#ModalNouvellePartie').modal('hide');
	
	// création de la grille de jeu
	var grille = new Array();

	for (var y = 0; y < 6; y++) {
		for (var x = 0; x < 6; x++) {
			console.log("x = " + x + " y =" + y ); 
			document.getElementById("carte" + x.toString() + y.toString()).src = dos;
			grille[x][y] = "O";
		}
	}
}

/* ---------------------------------------- */
/* Choix d'un deck dans les options de jeux */
/* ---------------------------------------- */

function ChoixDos(eldos) {

	/* la variable dos prend comme valeur le chemin vers l'image que l'on a choisi */

	dos = eldos.src;
	sessionStorage.setItem('carte', dos);

	/* gestion du cadre bleu autour des images dans la modale des options */

	for (var a = 1; a < 6; a++)	{
		document.getElementById(a).style.border = "0px solid blue";
	}

	/* un cadre bleu autour du dos choisi */	

	eldos.style.border = "2px solid blue";

	/* on change le deck dans la partie en cours */	

	for (var y = 0; y < 6; y++) {	
		for (var x = 0; x < 6; x++) {
			if (grille[x][y] == "O") {
				document.getElementById("carte" + x.toString() + y.toString()).src = dos;
			}	
		}
	}
}	

/* --------------------- */
/* Choix du tapis de jeu */
/* --------------------- */

function ChoixTapis(tapis) {

	document.getElementById("BigPage").style.background = "url(images/fonds/fond-0" + tapis + ".jpg)";
	document.getElementById("BigPage").style.backgroundSize = "cover";

	/* gestion du cadre bleu autour des images dans la modale des options */

	for (var a = 1; a < 4; a++) {
		document.getElementById("fond"+a).style.border = "0px solid blue";
	}

	/* un cadre bleu autour du fond choisi */

	document.getElementById("fond" + tapis).style.border = "2px solid blue";

	/* le fond choisi dans une session */

	sessionStorage.setItem('fond', tapis);
}

/* -------------------------------------------------------------------------------- */
/* A chaque coups, cette fonction vérifie la grille, pour voir si le joueur a gagné */
/* -------------------------------------------------------------------------------- */
	
function VerificationGrille() {

	var perdu = 0;
	for (var y = 1; y < 5; y++) {			
		for (var x = 1; x < 5; x++) {
			if (grille[x][y] == "X") {
				perdu = perdu + 1;
			}
		}
	}
	
	if (perdu == 16) {
		$('#ModalBravo').modal('show');
		$('#ModalBravo').on('shown.bs.modal', function (e) {
			var modal = $(this)

			/* 
			Cette partie permet de faire un équivalent du $_GET[] en javascript. On récupère la langue par défaut et on affiche la modale qui correspond pour dire au joueur en combien de coups il a réussi.
			*/

			const queryString = window.location.search;
			const urlParams = new URLSearchParams (queryString);
			const langue = urlParams.get ('langue')

			/* affichage de la fenêtre modale qui affiche les résultats */

			switch(langue) {
				case 'fr':
					modal.find('.modal-body').text('Vous avez gagné en ' + nbCoups + ' coups !');
					break;
				case 'en':
					modal.find('.modal-body').text('You win in ' + nbCoups + ' moves !');
					break;
				default:
					modal.find('.modal-body').text('Vous avez gagné en ' + nbCoups + ' coups !');
					break;
			}
		})
	}
}

/* ----------------------------------------------------------- */
/* Cette fonction retourne les carte autour de la carte choisi */
/* ----------------------------------------------------------- */
	
function retourne(xc, yc) {

	dos = DosSession();
	
	/* Joue un son quand on retroune les cartes */

	if (sessionStorage.getItem('son') == '1') {
		var audio = new Audio('sounds/retournement.mp3');
		audio.play();
	}

	/* Fait recto/verso ou verso/recto sur les cartes qui sont autour de la carte choisie */
	
	nbCoups = nbCoups + 1;
	document.Info.coups.value = nbCoups

	for (var y = yc - 1; y < yc + 2; y++) {			
		for (var x = xc - 1; x < xc + 2; x++) {
			if (grille[x][y] == "O") {
				document.getElementById("carte" + x.toString() + y.toString()).src = "images/carte" + x.toString() + y.toString() + ".png";
				grille[x][y] = "X";
			} else {
				document.getElementById("carte" + x.toString() + y.toString()).src = dos;
				grille[x][y] = "O";
			}
		}
	}

	if (grille[xc][yc] == "O") {
		document.getElementById("carte" + xc.toString() + yc.toString()).src = "images/carte" + xc.toString() + yc.toString() + ".png";
		grille[xc][yc] = "X";
	} else {
		document.getElementById("carte" + xc.toString() + yc.toString()).src = dos;
		grille[xc][yc] = "O";
	}	

	/* Appel de la fonction qui vérifie la grille pour vérifier si le joueur a gagné */

	VerificationGrille();	
}

/* ---------------------------------------------- */
/* Cette fonction récupére le dos dans la session */
/* ---------------------------------------------- */

function DosSession() {
	if (sessionStorage.carte) {
		dos = sessionStorage.getItem('carte');
	} else {
		dos = "images/backs/back-01.png";
	}

	return dos;
}

/* ------------------------------------------- */
/* fonction qui active/desactive le son du jeu */
/* ------------------------------------------- */

function ChangeStatut(formoptions) {
	if(formoptions.customCheck1.checked==true) {
		// on passe la session sur "du son";
		sessionStorage.setItem('son', "1");
	} else {
		// on passe la session sur "pas de son";
		sessionStorage.setItem('son', "0");
	}
}

// Initialisation du nombre de coups
	
var nbCoups = 0;
document.Info.coups.value = "0";
	
// création de la grille de jeu
var grille = new Array();

// initialisation de la grille. 

for(var i=0; i<6; i++)
	grille[i] = new Array();

for(var i=0; i<6; i++)
	for(var j=0; j<6; j++)
		grille[i][j] = "O";

/* On récupére le dos que le joueur à choisi et on personnalise ! */
/* Si pas de session alors on applique le dos par défaut */

if (sessionStorage.carte) {
	dos = sessionStorage.getItem('carte');	
} else {
	dos = "images/backs/back-01.png";
}

// dos = DosSession();

/* Sur chaque carte, on applique le theme choisi */

var ListCard = ["carte11","carte12","carte13","carte14","carte21","carte22","carte23","carte24","carte31","carte32","carte33","carte34","carte41","carte42","carte43","carte44"];

for (i = 0; i < ListCard.length; i++) {
	document.getElementById(ListCard[i]).src = dos; ;
}

/* On récupére le fond que le joueur à choisi et on personnalise ! */
/* Si pas de session alors on applique le dos par défaut */

if (sessionStorage.fond) {
	tapis = sessionStorage.getItem('fond');
} else {
	tapis = "1";
}

document.getElementById("BigPage").style.background = "url(images/fonds/fond-0" + tapis + ".jpg)";	