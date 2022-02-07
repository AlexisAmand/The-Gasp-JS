<?php

/* -------------------- */
/* Le Gasp : version FR */
/* -------------------- */

/* Navbar */

define("THE_GASP_TITLE","Le Gasp JS");
define("NAV_BAR_AB","A Propos");
define("NAV_BAR_NG","Nouvelle Partie");
define("NAV_BAR_OPT","Options");
define("NAV_BAR_RL","Règles");
define("NAV_BAR_VS","Version");

/* Header */

define("HEADER_SL","Saurez-vous toutes les retourner ?");

/* index */

define("IND_TITLE","Qu'est-ce que \"Le Gasp JS\" ?");
define("IND_TEXT_1","Il y a quelques mois, j'ai découvert un <a href='le-gasp.php?langue=".ChoixLangue()."' title='article sur Le Gasp paru dans la revue Jeux et Stratégie d'avril/mai 1985'>article</a> et un <a href='code-basic.php?langue=".ChoixLangue()."' title='listing en basic paru dans la revue Jeux et Stratégie d'avril/mai 1985 pour jouer à Le Gasp'>listing en Basic</a> parus dans le n°38 de Jeux &amp; Stratégie d'avril/mai 1985. Il s'agit d'un <strong>petit jeu de réflexion</strong> qui est un petit mélange de Reverso et d'Othello. Vous disposez d'un plateau de jeu avec 16 pions bicolores formant un carré 4 x 4. Le but est de retourner tous les pions en respectant une seule règle : Quand vous désignez un pion, ses 8 voisins changent de couleurs mais lui garde la sienne. Quelques pages plus tard, la revue adaptait le jeu de plateau en Basic. Rien de bien génial, il s'agissait d'un jeu en  \"mode texte\" que nous appellerions aujourd'hui un jeu en \"mode console\". Dans ma version, <strong>jouable en ligne gratuitement</strong> et <strong>sans installer d'application</strong>, les pions ont été remplacés par des cartes, mais le principe est toujours le même : Quand vous désignez une carte, ses 8 voisines sont retournées sauf elle.");
define("IND_TEXT_2","Selon la revue que j'ai citée plus haut, il existe des solutions en 6, 8 et 10 coups !");
define("IND_START_GAME","Lancer une partie de Le Gasp JS");
define("IND_GITHUB","Si vous êtes curieux, le code source de la version JS est disponible sur GitHub :<br /><a href='https://github.com/AlexisAmand/The-Gasp-JS' title='code source du jeu Le Gasp en JavaScript sur GitHub'>https://github.com/AlexisAmand/The-Gasp-JS</a>");
define("IND_START","Commencer une partie !");

/* Article JS de 1985 */

define("AJS_TITLE","L'article de 1985");
define("AJS_TEXT","Note: Dans l'article ci-dessous, j'ai masqué la solution en dix coups pour la grille 4 x 4.");
define("AJS_FIGCAPTION_1","(source: Jeux &amp; Stratégie n°38 - avril/mai 1985)");
define("AJS_FIGCAPTION_2","(source: Jeux &amp; Stratégie n°38 - avril/mai 1985)");

/* Une partie */

define("GAME_SCORE","Nombre de coups");

/* Code basic */

define("BAS_TITLE","Le Gasp (version basic)");
define("BAS_FIGCAPTION_1","(source: Jeux &amp; Stratégie n°38 - avril/mai 1985)");

/* Code QBasic */

define("QB_TITLE","Le Gasp (version QBasic)");
define("QB_TEXT","Quand j'ai redécouvert ce bout de code à la fin de l'année 2017, j'ai eu comme un coup de coeur. Pour le tester, je me suis tourné vers QBasic 64 dans sa version 1.1. A l'heure de nos machine ultra puissante, c'était, à mes yeux, la meilleure solution. Je sais que j'aurais sans soute pu utiliser un émulateur, mais où aurait été le fun ? Comme vous pouvez le constater, il s'agit d'un jeu 100% en mode texte, comme celui de 1985. Si le coeur vous en dit, j'ai mis quelques codes sources sur <a href='https://github.com/AlexisAmand/The-Gasp-JS' title='Télécharger la version du jeu 'Le Gasp' développée en Basic et en QBasic sur mon GitHub'>mon GitHub</a>:");
define("QB_SRC_LIST_1","Le code source en QBasic et son executable (dossier sources puis Qbasic)");
define("QB_SRC_LIST_2","Le listing de l'époque, en Basic pour Apple I et II (dossier sources puis Basic).");
define("QB_SRC_TEXT","Il existe un site qui permet d'executer du code écrit en Basic d'Apple : <a href='https://calormen.com/jsbasic/'>https://calormen.com/jsbasic/</a>.");
define("QB_FIGCAPTION_1",'Le Jeu "Le Gasp" en Basic pour Apple I et II<br />(capture générée via https://calormen.com/jsbasic/)');
define("QB_FIGCAPTION_2",'Le Jeu "Le Gasp" en Qbasic');

/* Code VB.Net */

define("VBN_TITLE","Le Gasp (version VB.Net)");
define("VBN_TEXT","La version Qbasic fonctionne sans trop se poser de question, mais il faut avouer qu'elle n'est pas très jolie. On pourrait imaginer des couleurs ou un message qui indique que le joueur à réussi. C'est ainsi qu'est née la version en VB.Net ! J'ai juste remplacé les pions par des cartes. Cette fois, le code source n'est pas à votre disposition, mais vous pouvez <a href='https://alexisamand.itch.io/le-gasp' title='Télécharger la version du jeu 'Le Gasp' développée en VB.Net'>télécharger le jeu</a> pour essayer le jeu chez vous, tranquillement. Petit plus : Vous pouvez y choisir une grille 4 x 4 ou une grille 5 x 5 selon le niveau de difficulté que vous désirez.");
define("VBN_TEXT_2","Il existe aussi une version jouable sans connexion internet via une petite application disponible sur <a href='https://alexisamand.itch.io/le-gasp' title='Télécharger la version du jeu 'Le Gasp' développée en VB.Net'>itch.io</a>. Petit plus : Vous pouvez y choisir une grille 4 x 4 ou une grille 5 x 5 selon le niveau de difficulté que vous désirez.");

/* Code JS */

define("JS_TITLE","Le Gasp (version Javascript)");
define("JS_TEXT","Je sais qu'installer quelque chose sur son PC à l'heure actuelle est devenue compliqué. On ignore d'où vient le truc, on a peur des cookies, des traceurs, des virus, des malwares et de toutes les mauvaises épidémies qui trainent un peu partout sur le net. C'est pour cette raison que j'ai eu envie de créer cette version du Gasp qui est jouable en ligne gratuitement. Si j'ai bien calculé mon coup, le site est même <em>mobile friendly</em>, ce qui veut dire qu'il va s'adapter en fonction du support que vous utilisez : tablette, ordinateur ou même téléphone. Vous pouvez jouer en <a href='jeu.php' title='Jouer une partie du jeu gratuit Le Gasp'>cliquant ici</a> et comme pour la version Basic, le code est dispo sur <a href='https://github.com/AlexisAmand/The-Gasp-JS' title='Voir le code source du jeu Le Gasp sur GitHub'>mon GitHub</a>.");

/* Mentions légales */

define("ML_TITLE","Mentions légales");
define("ML_EDITOR","Editeur du site");
define("ML_CREATOR","Création du site");
define("ML_HBGT","Hébergeur du site");
define("ML_HBGT_ADRESS","AMEN SASU<br />12-14, Rond Point des Champs Elysées 75008 Paris.<br />RCS : 421 527 797 000 11<br /><a href='https://www.amen.fr/'>https://www.amen.fr</a>");
define("ML_INFOS","Informations complémentaires");
define("ML_BOITASITE","BOITASITE<br />Valenciennes (Nord)<br />SIRET : 517 501 235 000 17<br /><a href='https://www.boitasite.com'>https://www.boitasite.com</a>");
define("ML_CNIL","Conformément à la loi n° 78-17 du 6 janvier 1978, relative à l'Informatique, aux Fichiers et aux Libertés, vous disposez d'un droit d'accès et de rectification des données à caractère personnel vous concernant et faisant l'objet de traitements.");
define("ML_COOKIES","En vue de s'adapter à son audience le site mesure le nombre de visites, le nombre de pages vues ainsi que de l'activité des visiteurs avec l'outil Matomo (ex Piwik). Matomo (ex Piwik), l'outil de statistiques utilisé par le site \"Le Gasp\", génère un cookie avec un identifiant unique, dont la durée de conservation est limitée à 13 mois. Il collecte également votre adresse IP, afin de déterminer la ville depuis laquelle vous vous connectez. Celle-ci est immédiatement anonymisée après utilisation. \"Le Gasp\" ne peut donc en aucun cas remonter par ce biais à une personne physique.");

/* Footer */

define("FOOTER_TEXT","Site hébergé par <a href='https://www.amen.fr/'>Amen France</a> - <a href='/mentions-legales.php'>Mentions légales</a><br />
Jeu adapté par <a href='http://twitter.com/alexisamand' target='_blank' title='Alexis Amand - Développeur à Valenciennes'>Alexis AMAND</a> d'après Francis Piault et Michel Brassinne</a>");

/* Fenêtres modales - textes en communs */

define("FM_CLOSE","Fermer");

/* Fenêtre modale - Options */

define("FM_OPT_TITLE","Options");
define("FM_OPT_BACK","Dos de la carte");
define("FM_OPT_PLAYGND","Terrain de jeu");
define("FM_OPT_SND","Activer le son du jeu");
define("FM_OPT_SEND","Ok");

/* Fenêtre modale - Nouvelle partie */

define("FM_NG_TITLE","Nouvelle Partie");
define("FM_NG_Q","Etes-vous certain(e) de vouloir commencer une nouvelle partie ?");
define("FM_YES", "Oui");
define("FM_NO", "Non");

/* Fenêtre modale - A propos */

define("FM_AB_TITLE", "Règles du jeu");
define("FM_AB_TEXT","<p>Le Gasp est un petit jeu de réflexion qui est un petit mélange de Reverso et d'Othello. Vous disposez d'un plateau de jeu avec 16 cartes formant un carré 4 x 4. Le but est de toutes les retourner en respectant une seule règle : Quand vous désignez une carte, ses 8 voisines sont retournées sauf elle. Saurez-vous toutes les retourner ?</p><p>Il existe des solutions en 6, 8 ou 10 coups.</p>");

/* Fenêtre modale - Gagné ! */

define("WIN_TITLE","Bravo !");