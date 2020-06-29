<div class="row m-auto" style="width: 95%;">
<form class="form-inline" id="formSearch" method="POST" action="">
<div class="input-group mb-2">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Rechercher par</label>
  </div>
  <select class="custom-select" id="select" name="select">
    <option selected>Choisir...</option>
    <option value="matricule">Matricule</option>
    <option value="loge">Logé</option>
    <option value="non_loge">Non Logé</option>
    <option value="numch">Chambre</option>

  </select>

</div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="texte" name="myInput" id="myInput" class="form-control" placeholder="rechercher">
  </div>
  <button type="submit" name="rechercher" class="btn btn-secondary mb-2">Rechercher</button>
</form>

<div class="card card-outline-secondary w-100" id="result" style="overflow:scroll; height: 450px;">
</div>
</div>
<div id="customerModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h4 class="modal-title">Ajouter un nouveau étudiant</h4>
   </div>
   <div class="modal-body">
    <label>Entrer le Nom</label>
    <input type="text" name="nom" id="nom" class="form-control" />
    <br />
    <label>Entrer le prénom</label>
    <input type="text" name="prenom" id="prenom" class="form-control" />
    <br />
   </div>
   <div class="modal-footer">
    <input type="hidden" name="customer_id" id="customer_id" />
    <input type="submit" name="action" id="action" class="btn btn-dark"/>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
   </div>
  </div>
 </div>
    </div>
<script src="<?=BASE_URL?>/public/js/student.js"></script>