<div class="card card-outline-secondary w-75 m-auto">
                        <div class="card-header">
                            <h3 class="mb-0">Enregistrer un étudiant</h3>
                        </div>
                        <div class="card-body">
                            <form>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nom">Nom</label>
                                <input type="texte" class="form-control" id="nom" placeholder="Entrez le nom">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="prenom">Prénom</label>
                                <input type="texte" class="form-control" id="prenom" placeholder="Entrez le prénom">
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Entrez l'email">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="date">Date de naissance</label>
                                <input type="date" class="form-control" id="date">
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="phone">téléphone</label>
                                <input class="form-control" type="tel" id="phone" name="phone" placeholder="exp: 77-000-00-00"
                                pattern="[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}"
                                required>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="type">Type d'étudiant</label>
                                <select id="type" class="form-control" size="0">
                                            <option value="Boursier non logé">Boursier non logé</option>
                                            <option value="Boursier logé">Boursier logé</option>
                                            <option value="Non boursier">Non boursier</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="matricule">Matricule</label>
                                        <input class="form-control" type="text" value="" placeholder="Entrez le matricule">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="adresse">Adresse</label>
                                        <input class="form-control" type="text" value="" placeholder="Entrez l'adresse">
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary float-right">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                    <!-- /form user info -->

                </div>