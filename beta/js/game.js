function NouvellePartie(){dos=DosSession();var e=window.location.search;const o=new URLSearchParams(e);langue=null!=o.get("langue")?o.get("langue"):"fr",window.location.replace("jeu.php?langue="+langue),nbCoups=0,document.Info.coups.value=nbCoups,$("#ModalNouvellePartie").modal("hide");for(var t=new Array,n=0;n<6;n++)for(var r=0;r<6;r++)console.log("x = "+r+" y ="+n),document.getElementById("carte"+r.toString()+n.toString()).src=dos,t[r][n]="O"}function ChoixDos(e){dos=e.src,sessionStorage.setItem("carte",dos);for(var o=1;o<6;o++)document.getElementById(o).style.border="0px solid blue";e.style.border="2px solid blue";for(var t=0;t<6;t++)for(var n=0;n<6;n++)"O"==grille[n][t]&&(document.getElementById("carte"+n.toString()+t.toString()).src=dos)}function ChoixTapis(e){document.getElementById("BigPage").style.background="url(images/fonds/fond-0"+e+".jpg)",document.getElementById("BigPage").style.backgroundSize="cover";for(var o=1;o<4;o++)document.getElementById("fond"+o).style.border="0px solid blue";document.getElementById("fond"+e).style.border="2px solid blue",sessionStorage.setItem("fond",e)}function VerificationGrille(){for(var e=0,o=1;o<5;o++)for(var t=1;t<5;t++)"X"==grille[t][o]&&(e+=1);16==e&&($("#ModalBravo").modal("show"),$("#ModalBravo").on("shown.bs.modal",function(e){var o=$(this),t=window.location.search;const n=new URLSearchParams(t);switch(n.get("langue")){case"fr":o.find(".modal-body").text("Vous avez gagné en "+nbCoups+" coups !");break;case"en":o.find(".modal-body").text("You win in "+nbCoups+" moves !");break;default:o.find(".modal-body").text("Vous avez gagné en "+nbCoups+" coups !")}}))}function retourne(e,o){dos=DosSession(),"1"==sessionStorage.getItem("son")&&new Audio("sounds/retournement.mp3").play(),nbCoups+=1,document.Info.coups.value=nbCoups;for(var t=o-1;t<o+2;t++)for(var n=e-1;n<e+2;n++)"O"==grille[n][t]?(document.getElementById("carte"+n.toString()+t.toString()).src="images/carte"+n.toString()+t.toString()+".png",grille[n][t]="X"):(document.getElementById("carte"+n.toString()+t.toString()).src=dos,grille[n][t]="O");"O"==grille[e][o]?(document.getElementById("carte"+e.toString()+o.toString()).src="images/carte"+e.toString()+o.toString()+".png",grille[e][o]="X"):(document.getElementById("carte"+e.toString()+o.toString()).src=dos,grille[e][o]="O"),VerificationGrille()}function DosSession(){return dos=sessionStorage.carte?sessionStorage.getItem("carte"):"images/backs/back-01.png",dos}function ChangeStatut(e){1==e.customCheck1.checked?sessionStorage.setItem("son","1"):sessionStorage.setItem("son","0")}var nbCoups=0;document.Info.coups.value="0";for(var grille=new Array,i=0;i<6;i++)grille[i]=new Array;for(i=0;i<6;i++)for(var j=0;j<6;j++)grille[i][j]="O";