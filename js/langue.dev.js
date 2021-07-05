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
				imageDrapeau = '<a href="?langue=fr"><img class="ml-2 icone" src="images/icones/flag-fr.svg"></a>';
				break;
		}
	} else {
		imageDrapeau = '<a href="?langue=fr"><img class="ml-2 icone" src="images/icones/flag-fr.svg"></a>';
	}	
		
	document.getElementById('version').innerHTML = "Version 0.17.51b "+ imageDrapeau;
}

/* ----------------------------------------------------------------------------- */
/* Cette fonction choisi le bon fichier de langue au chargement d'une page       */
/* A partir d'ici, il s'agit de tests, rien n'est vraiment utiles pour le moment */
/* ----------------------------------------------------------------------------- */

function ChoixLangue() {
    const queryString = window.location.search;
	const urlParams = new URLSearchParams (queryString);
	console.log("coucou la console !");
    if(urlParams.get('langue') != null) {
        /* return le param de l'url */
        // return urlParams.get('langue')
		langue = "plip";
    } else {
        /* récup la langue du navigateur */
        // return navigator.language.;
		langue = "plop";
    }
	return langue;
}

/* "include" du don fichier de langue */

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
			imageDrapeau = '<a href="?langue=fr"><img class="ml-2 icone" src="images/icones/flag-fr.svg"></a>';
			break;
	}
} else {
	imageDrapeau = '<a href="?langue=fr"><img class="ml-2 icone" src="images/icones/flag-fr.svg"></a>';
}	