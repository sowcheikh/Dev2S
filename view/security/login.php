<div class="card card-outline-secondary w-50 m-auto">
    <div class="card-header">
    <div id="alert" role="alert"></div>
        <h3 class="mb-0">Enregistrer une chambre</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="<?= BASE_URL ?>/admin/addRoom" id="addNew">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nom">Numéro chambre</label>
                    <input type="number" min="100" max="999" class="form-control" id="numch" name="numch">
                    <span class="form_error"></span><br/>
                </div>
                <div class="form-group col-md-6">
                    <label for="prenom">Numéro batîment</label>
                    <input type="texte" class="form-control" id="numbat" name="numbat">
                    <span class="form_error"></span><br/>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="type">Type de chambre</label>
                    <select id="type" name="type" class="form-control" size="0" >
                        <option value="individuelle">individuelle</option>
                        <option value="Double">Double</option>
                    </select>
                    <span class="form_error"></span><br/>
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-right">Enregistrer</button>
        </form>
    </div>
</div>
<!-- /form user info -->

</div>
<script src="<?=BASE_URL?>/public/js/chambre.js"></script>
