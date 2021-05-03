<!-- Fenêtre modale pour les options -->
    
<div class="modal fade" id="ModalOptions" tabindex="-1" role="dialog" aria-labelledby="ModalOptionsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="ModalOptionsLabel"><?php echo FM_OPT_TITLE; ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <form name="formoptions">
        
            <div class="modal-body text-justify">

            <p><?php echo FM_OPT_TEXT; ?></p>

            <p><strong><?php echo FM_OPT_BACK; ?></strong></p>

            <p class="text-center">

            <?php 
            
            /* Affichage des dos de cartes. Il suffit d'ajouter un fichier de type back-XX.png pour qu'il soit ajouté à la liste. Il faut penser à incrémenter le compteur dans la boucle for ici et dans la fonction JS ChoixDos(). */

            for ($i = 1; $i<6; $i++)
                {
                echo '<img src="images/backs/back-0'.$i.'.png" id="'.$i.'" onclick="ChoixDos(this)" class="cartes mx-1">';
                }

            ?>

            </p>

            <p><strong>Terrain de jeu</strong></p>

            <p class="text-center">

            <?php 
            
            /* Affichage des fonds de jeu. Il suffit d'ajouter un fichier de type fond-XX.jpg pour qu'il soit ajouté à la liste. Il faut penser à incrémenter le compteur dans la boucle for ici et dans la fonction JS ChoixTapis(). */

            for ($k = 1; $k<4; $k++)
                {
                echo '<img src="images/fonds/mini/fond-0'.$k.'.jpg" id="fond'.$k.'" onclick="ChoixTapis('.$k.')" class="fonds mx-1">';
                }

            ?>

            </p>

            </div>

            <div class="modal-footer">
                <div class="col-md-12 text-center">
                    <button type="button" class="btn btn-primary" onclick="	$('#ModalOptions').modal('hide');"><?php echo FM_OPT_SEND; ?></button>
                </div>
            </div>

        </form>

        </div>
    </div>
</div>