<?php 

/* --------------------------------- */
/* Cette fonction affiche la version */
/* --------------------------------- */

function version()
    {
    echo NAV_BAR_VS."&nbsp;"."0.16.12b"."&nbsp;";
    }

/* ----------------------------------------------------------------------- */
/* Cette fonction choisi le bon fichier de langue au chargement d'une page */
/* ----------------------------------------------------------------------- */

function ChoixLangue()
    {
    if (isset($_GET['langue']))
        {
        return $_GET['langue'];
        }
    else
        {
        return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        }
    }

/* ------------------------------------------------------------- */
/* Cette fonction affiche le drapeau de choix de la langue en/fr */
/* ------------------------------------------------------------- */

function Drapeau()
    {
    if (isset($_GET['langue']))
        {
        switch($_GET['langue'])
            {
            case 'en':
                echo '<a href="?langue=fr"><img class="ml-2 icone" src="images/icones/flag-fr.svg"></a>';
                break;
            case 'fr':
                echo '<a href="?langue=en"><img class="ml-2 icone" src="images/icones/flag-en.svg"></a>';
                break;
            default:
            echo '<a href="?langue=en"><img class="ml-2 icone" src="images/icones/flag-en.svg"></a>';
                break;
            }
        }
    else
        {
        echo '<a href="?langue=fr"><img class="ml-2 icone" src="images/icones/flag-en.svg"></a>';
        }
    }

/* -------------------------------------------------------- */
/* Cette fonction affiche une image dans une fenêtre modale */
/* -------------------------------------------------------- */

function ModaleImage($images, $alt)
    {
    echo '
    <div class="modal fade" id="modalecapture0'.$images.'" tabindex="-1" role="dialog" aria-labelledby="modalecapture0'.$images.'Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 text-center">	
                    <img src="images/captures/le-gasp-0'.$images.'.jpg" alt="'.$alt.'" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>';
    }

/* -------------------------------- */
/* Cette fonction affiche le footer */
/* -------------------------------- */

function footer()
    {
    echo '<p>';
    echo "© 2018-".date('Y')." - Alexis AMAND<br />";
	echo FOOTER_TEXT;
    echo '</p>';
    }
