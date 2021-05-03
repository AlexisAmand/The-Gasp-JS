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

            <?php /* Couper ou activer le son du jeu */ ?>

            <div class="custom-control custom-checkbox">
            <script type="text/javascript">

                /* ------------------------------------------- */
                /* fonction qui active/desactive le son du jeu */
                /* ------------------------------------------- */

                function ChangeStatut(formoptions) 
                    {
                    if(formoptions.customCheck1.checked==true)
                        {
                        // on passe la session sur "du son";
                        sessionStorage.setItem('son', "1");
                        }
                    else 
                        {
                        // on passe la session sur "pas de son";
                        sessionStorage.setItem('son', "0");
                        }
                    }

                if (sessionStorage.son)
                    {
                    if(sessionStorage.getItem("son") == "1")
                        {
                        document.write('<input type="checkbox" class="custom-control-input" id="customCheck1" checked onChange="ChangeStatut(formoptions)">');
                        }
                    else
                        {
                        document.write('<input type="checkbox" class="custom-control-input" id="customCheck1 onChange="ChangeStatut(formoptions)">');
                        }
                    }
                else
                    {
                    document.write('<input type="checkbox" class="custom-control-input" id="customCheck1" checked onChange="ChangeStatut(formoptions)">');
                    sessionStorage.setItem('son', "1");
                    }
                </script>

                <label class="custom-control-label" for="customCheck1">Activer le son du jeu</label>
            </div>

            </div>

            <div class="modal-footer">
                <div class="col-md-12 text-center">
                    <button type="button" class="btn btn-primary" onclick="$('#ModalOptions').modal('hide');"><?php echo FM_OPT_SEND; ?></button>
                </div>
            </div>

        </form>

        </div>
    </div>
</div>