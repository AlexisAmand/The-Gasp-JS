function Version(){var e=window.location.search;const a=new URLSearchParams(e);if(null!=a.get("langue"))switch(a.get("langue")){case"en":imageDrapeau='<a href="?langue=fr"><img class="ml-2 icone" src="images/icones/flag-fr.svg"></a>';break;case"fr":imageDrapeau='<a href="?langue=en"><img class="ml-2 icone" src="images/icones/flag-en.svg"></a>';break;default:imageDrapeau='<a href="?langue=fr"><img class="ml-2 icone" src="images/icones/flag-fr.svg"></a>'}else imageDrapeau='<a href="?langue=fr"><img class="ml-2 icone" src="images/icones/flag-fr.svg"></a>';document.getElementById("version").innerHTML="Version 0.17.60b "+imageDrapeau}function Footer(){var e=new Date;document.getElementById("footer").innerHTML="© 2018-"+e.getFullYear()+" - Alexis AMAND"}