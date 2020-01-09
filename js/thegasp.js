/* Nouvelle partie */

function NouvellePartie()
	{
	nbCoups = 0;
	document.Info.coups.value = nbCoups;
	
	$('#ModalNouvellePartie').modal('hide');
	
	//alert('Nouvelle partie !');
	
	for (var y = 0; y < 6; y++)
		{
		
		for (var x = 0; x < 6; x++)
			{
				document.getElementById("carte" + x.toString() + y.toString()).src = "images/back.png";
				grille[x][y] = "O";

			}
		}
	}
	 
/* A chaque coups, cette fonction vérifie la grille, pour voir si le joueur a gagné  */
	
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
		alert("Bravo ! Vous avez réussi en " + nbCoups + " coups !");
		}

	}
	
/* cette fonction retourne une carte */
	
function retourne(xc, yc)
	{
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
					document.getElementById("carte" + x.toString() + y.toString()).src = "images/back.png";
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
			document.getElementById("carte" + xc.toString() + yc.toString()).src = "images/back.png";
			grille[xc][yc] = "O";
			}	

		VerificationGrille();	
	}
	
// Initialisation du nombre de coups
	
var nbCoups = 0;
document.Info.coups.value = "0";	
	
// création de la grille de jeu
var grille = new Array();

// initialisation de la grille. 
// Elle fait 9x9 mais 6x6 pourrait être suffisant.

for(var i=0; i<9; i++)
	grille[i] = new Array();

for(var i=0; i<9; i++)
	for(var j=0; j<9; j++)
		grille[i][j] = "O";