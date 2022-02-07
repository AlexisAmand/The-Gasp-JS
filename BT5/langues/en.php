<?php

/* -------------------- */
/* Le Gasp : version EN */
/* -------------------- */

/* Navbar */

define("THE_GASP_TITLE","The Gasp JS");
define("NAV_BAR_AB","About");
define("NAV_BAR_NG","New Game");
define("NAV_BAR_OPT","Options");
define("NAV_BAR_RL","Rules");
define("NAV_BAR_VS","Version");

/* Header */

define("HEADER_SL","Can you turn them all over?");

/* index */

define("IND_TITLE","What is \"Le Gasp JS\" ?");

define("IND_TEXT_1","A few months ago, I discovered an <a href='le-gasp.php?langue=".ChoixLangue()."' title='article on The Gasp in the April/May 1985 issue of Jeux et Stratégie'>article</a> and a <a href='code-basic.php' title='basic listing in the April/May 1985 issue of Jeux et Stratégie to play'>listing in Basic</a> published in the April/May 1985 issue of Jeux & Stratégie. It is a <strong>small puzzle game</strong> which is a mixture of Reverso and Othello. You have a board with 16 two-coloured pieces forming a 4 x 4 square. The aim is to turn over all the pieces according to one rule: when you designate a piece, its 8 neighbours change colours but it keeps its own. A few pages later, the magazine adapted the board game to Basic. It was nothing great, it was a \"text mode\" game that we would call today a \"console mode\" game. In my version, which can be <strong>played online for free</strong> and <strong>without installing any application</strong>, the pieces have been replaced by cards, but the principle is still the same: When you point to a card, its 8 neighbours are turned over except for it.");
define("IND_TEXT_2","According to the magazine I quoted above, there are 6, 8 and 10 shot solutions !");
define("IND_START_GAME","Start a Le Gasp JS game");
define("IND_GITHUB","If you are curious, the source code of the JS version is available on GitHub :<br /><a href='https://github.com/AlexisAmand/The-Gasp-JS' title='source code of the game Le Gasp in JavaScript on GitHub'>https://github.com/AlexisAmand/The-Gasp-JS</a>");
define("IND_START","Start a game !");

/* Article JS de 1985 */

define("AJS_TITLE","The 1985 article");
define("AJS_TEXT","Note: In the article below, I have hidden the ten move solution for the 4 x 4 grid.");
define("AJS_FIGCAPTION_1","(source: Jeux &amp; Stratégie #38 - april/may 1985)");
define("AJS_FIGCAPTION_2","(source: Jeux &amp; Stratégie #38 - april/may 1985)");

/* Une partie */

define("GAME_SCORE","Number of moves");

/* Code basic */

define("BAS_TITLE","The Gasp (Basic version)");
define("BAS_FIGCAPTION_1","(source: Jeux &amp; Stratégie #38 - april/may 1985)");

/* Code QBasic */

define("QB_TITLE","The Gasp (QBasic version)");
define("QB_TEXT","When I rediscovered this piece of code at the end of 2017, it was like a crush. To test it, I turned to QBasic 64 in its version 1.1. In the age of our ultra-powerful machines, it was, in my eyes, the best solution. I know I could have used an emulator, but what fun would that have been ? As you can see, this is a 100% text-based game, just like the 1985 game. If you feel like it, I put some source codes on <a href='https://github.com/AlexisAmand/The-Gasp-JS' title='Download the version of the game 'Le Gasp' developed in Basic and QBasic on my GitHub'>mon GitHub</a>:");
define("QB_SRC_LIST_1","The source code in QBasic and its executable (sources folder then Qbasic)");
define("QB_SRC_LIST_2","The listing of the time, in Basic for Apple I and II (source folder then Basic).");
define("QB_SRC_TEXT","There is a site that allows you to run code written in Apple Basic: <a href='https://calormen.com/jsbasic/'>https://calormen.com/jsbasic/</a>.");
define("QB_FIGCAPTION_1",'The game "Le Gasp" in Basic for Apple I and II<br />(capture generated via https://calormen.com/jsbasic/)');
define("QB_FIGCAPTION_2",'The Gasp Game in Qbasic');

/* Code VB.Net */

define("VBN_TITLE","The Gasp (VB.Net version)");
define("VBN_TEXT","The Qbasic version works without much question, but it is not very pretty. One could imagine colours or a message indicating that the player has succeeded. That's how the VB.Net version was born! I just replaced the counters by cards. This time, the source code is not at your disposal, but you can <a href='sources/VBnet/legasp-vbnet.zip' title='Download the version of the game Le Gasp developed in VB.Net'>download the executable</a> (you have to unzip the file, then run the setup.msi file) to try the game at home, quietly. Little extra: You can choose a 4 x 4 grid or a 5 x 5 grid depending on the level of difficulty you want.");

/* Code JS */

define("JS_TITLE","The Gasp (Javascript version)");
define("JS_TEXT","I know that installing something on your PC these days has become complicated. You don't know where it comes from, you're afraid of cookies, tracers, viruses, malware and all the bad epidemics that are everywhere on the net. That's why I wanted to create this version of Gasp that can be played online for free. If I've done my homework, the site is even <em>mobile friendly</em>, which means that it will adapt to the medium you are using: tablet, computer or even phone. You can play by <a href='jeu.php' title='Play a free game of Le Gasp'>clicking here</a> and as for the Basic version, the code is available on <a href='https://github.com/AlexisAmand/The-Gasp-JS' title='See the source code of the game Le Gasp on GitHub'>my GitHub</a>.");

/* Mentions légales */

define("ML_TITLE","Legal information");
define("ML_EDITOR","Website editor");
define("ML_CREATOR","Creation of the site");
define("ML_HBGT","Website host");
define("ML_HBGT_ADRESS","AMEN SASU<br />12-14, Rond Point des Champs Elysées 75008 Paris.<br />RCS : 421 527 797 000 11<br /><a href='https://www.amen.fr/'>https://www.amen.fr</a>");
define("ML_INFOS","Further information");
define("ML_BOITASITE","BOITASITE<br />Valenciennes (Nord)<br />SIRET : 517 501 235 000 17<br /><a href='https://www.boitasite.com'>https://www.boitasite.com</a>");
define("ML_CNIL","In accordance with the law n° 78-17 of January 6, 1978, relating to Data processing, Files and Liberties, you have a right of access and of correction of the personal data concerning you and being the subject of treatments.");
define("ML_COOKIES","In order to adapt to its audience, the site measures the number of visits, the number of pages viewed and the activity of visitors with the Matomo (ex Piwik) tool. Matomo (ex Piwik), the statistics tool used by the \"Gasp\" site, generates a cookie with a unique identifier, which is kept for a limited period of 13 months. It also collects your IP address, in order to determine the city from which you connect. This is immediately anonymised after use. \"The Gasp\" can therefore in no way be traced back to a physical person by this means.");

/* Footer */

define("FOOTER_TEXT","Site hosted by <a href='https://www.amen.fr/'>Amen France</a> - <a href='/mentions-legales.php'>Mentions légales</a><br />
Game adapted by <a href='http://twitter.com/alexisamand' target='_blank' title='Alexis Amand - Developer in Valenciennes'>Alexis AMAND</a> based from Francis Piault and Michel Brassinne</a>");

/* Fenêtres modales - textes en communs */

define("FM_CLOSE","Close");

/* Fenêtre modale - Options */

define("FM_OPT_TITLE","Options");
define("FM_OPT_BACK","Back of the card");
define("FM_OPT_PLAYGND","Playground");
define("FM_OPT_SND","Activate the game sound");
define("FM_OPT_SEND","Ok");

/* Fenêtre modale - Nouvelle partie */

define("FM_NG_TITLE","New Game");
define("FM_NG_Q","Are you sure you want to start a new game ?");
define("FM_YES", "Yes");
define("FM_NO", "No");

/* Fenêtre modale - A propos */

define("FM_AB_TITLE", "Rules");
define("FM_AB_TEXT","<p>The Gasp is a small puzzle game that is a mix of Reverso and Othello. You have a board with 16 cards forming a 4 x 4 square. The goal is to turn over all of them according to one rule: When you point to a card, all 8 of its neighbours are turned over except for it. Can you turn them all over?</p><p>There are 6, 8 or 10 moves solutions.</p>");

/* Fenêtre modale - Gagné ! */

define("WIN_TITLE","Great !");