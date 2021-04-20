/* --------------- */
/* Nouvelle partie */
/* --------------- */

function NouvellePartie()
	{
	document.location.href = 'jeu.php';	
	nbCoups = 0;
	document.Info.coups.value = nbCoups;
	
	$('#ModalNouvellePartie').modal('hide');
		
	for (var y = 0; y < 6; y++)
		{
		
		for (var x = 0; x < 6; x++)
			{
				document.getElementById("carte" + x.toString() + y.toString()).src = dos;
				grille[x][y] = "O";

			}
		}
	}

/* ---------------------------------------- */
/* Choix d'un deck dans les options de jeux */
/* ---------------------------------------- */

function mark(el) 
	{

	/* la variable dos prend comme valeur le chemin vers l'image que l'on a choisi */

	dos = el.src;

	/* gestion du cadre bleu autour des images dans la modale des options */

	for (var a = 1; a < 7; a++)
		{
		document.getElementById(a).style.border = "0px solid blue";
		}

		el.style.border = "2px solid blue";

	/* on change le deck dans la partie en cours */	

	for (var y = 0; y < 6; y++)
		{	
		for (var x = 0; x < 6; x++)
			{
				if (grille[x][y] == "O")
					{
					document.getElementById("carte" + x.toString() + y.toString()).src = dos;
					}	
			}
		}
	}	

/* -------------------------------------------------------------------------------- */
/* A chaque coups, cette fonction vérifie la grille, pour voir si le joueur a gagné */
/* -------------------------------------------------------------------------------- */
	
function VerificationGrille()
	{
	var perdu = 0;
	for (var y = 1; y < 5; y++)
		{			
		for (var x = 1; x < 5; x++)
			{
			if (grille[x][y] == "X")
				{
				perdu = perdu + 1;
				}
			}
		}
	
	if (perdu == 16)
		{
		$('#ModalBravo').modal('show');

		$('#ModalBravo').on('shown.bs.modal', function (e) {
			var modal = $(this)
			modal.find('.modal-body').text('Vous avez gagné en ' + nbCoups + ' coups !')
		  })
		}

	}

/* ----------------------------------*/
/* cette fonction retourne une carte */
/* ----------------------------------*/
	
function retourne(xc, yc)
	{
	
	/* test jouer un son */
	
	var audio = new Audio('sounds/9388.mp3');
	audio.play();
	
	/* ----------------- */
	
	nbCoups = nbCoups + 1;
	document.Info.coups.value = nbCoups	
		for (var y = yc - 1; y < yc + 2; y++)
			{
			
			for (var x = xc - 1; x < xc + 2; x++)
				{
				if (grille[x][y] == "O")
					{
					document.getElementById("carte" + x.toString() + y.toString()).src = "images/carte" + x.toString() + y.toString() + ".png";
					grille[x][y] = "X";
					}
				else
					{
					document.getElementById("carte" + x.toString() + y.toString()).src = dos;
					grille[x][y] = "O";
					}
				}
			}

		if (grille[xc][yc] == "O")
			{
			document.getElementById("carte" + xc.toString() + yc.toString()).src = "images/carte" + xc.toString() + yc.toString() + ".png";
			grille[xc][yc] = "X";
			}
		else
			{
			document.getElementById("carte" + xc.toString() + yc.toString()).src = dos;
			grille[xc][yc] = "O";
			}	

		VerificationGrille();	
	}

/* ---------------------------------------- */
/* Choix d'un fond dans les options de jeux */
/* ---------------------------------------- */

/*
function OptionWallpaper(el) 
	{

	for (var a = 11; a < 17; a++)
		{
		document.getElementById(a).style.border = "0px solid blue";
		}

	el.style.border = "2px solid blue";
	$('body').css("background-image", 'url("'+el.src+'")');
	
	}
*/
	
// Initialisation du nombre de coups
	
var nbCoups = 0;
document.Info.coups.value = "0";	
	
// création de la grille de jeu
var grille = new Array();
var dos = "images/backs/back.png";

// initialisation de la grille. 
// Elle fait 9x9 mais 6x6 pourrait être suffisant.

for(var i=0; i<9; i++)
	grille[i] = new Array();

for(var i=0; i<9; i++)
	for(var j=0; j<9; j++)
		grille[i][j] = "O";
