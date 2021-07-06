<!-- Fenêtre modale pour la nouvelle partie -->
        
<div class="modal fade" id="ModalNouvellePartie" tabindex="-1" role="dialog" aria-labelledby="ModalNouvellePartieLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="ModalNouvellePartieLabel"><?php echo FM_NG_TITLE; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body text-justify"><?php echo FM_NG_Q; ?></div>
        <div class="modal-footer">
            <div class="col-md-12 text-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo FM_NO; ?></button>
                <button type="button" class="btn btn-primary" onclick="NouvellePartie()"><?php echo FM_YES; ?></button>
            </div>
        </div>
    </div>
    </div>
</div>