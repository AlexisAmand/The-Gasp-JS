/* -------------------------- */
/* Récupération de la version */
/* -------------------------- */

function Version() {
	const queryString = window.location.search;
	const urlParams = new URLSearchParams (queryString);
	if(urlParams.get('langue') != null) {
		switch(urlParams.get('langue')) {
			case 'en':
				imageDrapeau = '<a href="?langue=fr"><img class="ml-2 icone" src="images/icones/flag-fr.svg"></a>';
				break;
			case 'fr':
				imageDrapeau = '<a href="?langue=en"><img class="ml-2 icone" src="images/icones/flag-en.svg"></a>';
				break;
			default:
				imageDrapeau = '<a href="?langue=en"><img class="ml-2 icone" src="images/icones/flag-fr.svg"></a>';
				break;
		}
	} else {
		imageDrapeau = '<a href="?langue=fr"><img class="ml-2 icone" src="images/icones/flag-fr.svg"></a>';
	}	
	document.getElementById('version').innerHTML = "Version 0.17.73b "+ imageDrapeau;
}

/* ------------------------------------------ */
/* Cette fonction affiche les infos du footer */
/* ------------------------------------------ */

function Footer() {
	var d=new Date();
	document.getElementById('footer').innerHTML = "© 2018-" + d.getFullYear() + " - Alexis AMAND";
}