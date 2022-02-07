function NouvellePartie(){dos=DosSession();const queryString=window.location.search;const urlParams=new URLSearchParams(queryString);if(urlParams.get('langue')!=null){langue=urlParams.get('langue')}else{langue="fr"}
window.location.replace("jeu.php?langue="+langue);nbCoups=0;document.Info.coups.value=nbCoups;$('#ModalNouvellePartie').modal('hide');var grille=new Array();for(var y=0;y<6;y++){for(var x=0;x<6;x++){console.log("x = "+x+" y ="+y);document.getElementById("carte"+x.toString()+y.toString()).src=dos;grille[x][y]="O";}}}
function ChoixDos(eldos){dos=eldos.src;sessionStorage.setItem('carte',dos);for(var a=1;a<6;a++){document.getElementById(a).style.border="0px solid blue";}
eldos.style.border="2px solid blue";for(var y=0;y<6;y++){for(var x=0;x<6;x++){if(grille[x][y]=="O"){document.getElementById("carte"+x.toString()+y.toString()).src=dos;}}}}
function ChoixTapis(tapis){document.getElementById("BigPage").style.background="url(images/fonds/fond-0"+tapis+".jpg)";document.getElementById("BigPage").style.backgroundSize="cover";for(var a=1;a<4;a++){document.getElementById("fond"+a).style.border="0px solid blue";}
document.getElementById("fond"+tapis).style.border="2px solid blue";sessionStorage.setItem('fond',tapis);}
function VerificationGrille(){var perdu=0;for(var y=1;y<5;y++){for(var x=1;x<5;x++){if(grille[x][y]=="X"){perdu=perdu+1;}}}
if(perdu==16){$('#ModalBravo').modal('show');$('#ModalBravo').on('shown.bs.modal',function(e){var modal=$(this)
const queryString=window.location.search;const urlParams=new URLSearchParams(queryString);const langue=urlParams.get('langue')
switch(langue){case'fr':modal.find('.modal-body').text('Vous avez gagné en '+nbCoups+' coups !');break;case'en':modal.find('.modal-body').text('You win in '+nbCoups+' moves !');break;default:modal.find('.modal-body').text('Vous avez gagné en '+nbCoups+' coups !');break;}})}}
function retourne(xc,yc){dos=DosSession();if(sessionStorage.getItem('son')=='1'){var audio=new Audio('sounds/retournement.mp3');audio.play();}
nbCoups=nbCoups+1;document.Info.coups.value=nbCoups
for(var y=yc-1;y<yc+2;y++){for(var x=xc-1;x<xc+2;x++){if(grille[x][y]=="O"){document.getElementById("carte"+x.toString()+y.toString()).src="images/carte"+x.toString()+y.toString()+".png";grille[x][y]="X";}else{document.getElementById("carte"+x.toString()+y.toString()).src=dos;grille[x][y]="O";}}}
if(grille[xc][yc]=="O"){document.getElementById("carte"+xc.toString()+yc.toString()).src="images/carte"+xc.toString()+yc.toString()+".png";grille[xc][yc]="X";}else{document.getElementById("carte"+xc.toString()+yc.toString()).src=dos;grille[xc][yc]="O";}
VerificationGrille();}
function DosSession(){if(sessionStorage.carte){dos=sessionStorage.getItem('carte');}else{dos="images/backs/back-01.png";}
return dos;}
function ChangeStatut(formoptions){if(formoptions.customCheck1.checked==true){sessionStorage.setItem('son',"1");}else{sessionStorage.setItem('son',"0");}}
var nbCoups=0;document.Info.coups.value="0";var grille=new Array();for(var i=0;i<6;i++)
grille[i]=new Array();for(var i=0;i<6;i++)
for(var j=0;j<6;j++)
grille[i][j]="O";if(sessionStorage.carte){dos=sessionStorage.getItem('carte');}else{dos="images/backs/back-01.png";}
var ListCard=["carte11","carte12","carte13","carte14","carte21","carte22","carte23","carte24","carte31","carte32","carte33","carte34","carte41","carte42","carte43","carte44"];for(i=0;i<ListCard.length;i++){document.getElementById(ListCard[i]).src=dos;;}
if(sessionStorage.fond){tapis=sessionStorage.getItem('fond');}else{tapis="1";}
document.getElementById("BigPage").style.background="url(images/fonds/fond-0"+tapis+".jpg)";