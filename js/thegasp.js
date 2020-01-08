/* a chaque coups, cette fonction v�rifi� la grille, pour voir si le joueur a gagn�  */
	
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
	
	// nombre de coups
	
	var nbCoups = 0;
	document.Info.coups.value = "0";	
	
	// cr�ation de la grille de jeu
	var grille = new Array();

	for(var i=0; i<9; i++)
	   grille[i] = new Array();

	// initialisation de la grille
	for(var i=0; i<9; i++)
	   for(var j=0; j<9; j++)
	      grille[i][j] = "O";