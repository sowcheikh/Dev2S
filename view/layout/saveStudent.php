<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/style.css">
    <title>Etudiant</title>
</head>
<body>
<div class="card card-outline-secondary w-75 m-auto">
                        <div class="card-header">
                            <h3 class="mb-0">Enregistrer un étudiant</h3>
                        </div>
                        <div class="card-body">
                            <form>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nom">Nom</label>
                                <input type="texte" class="form-control" id="nom">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="prenom">Prénom</label>
                                <input type="texte" class="form-control" id="prenom">
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4">
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
                                <div class="form-group">
                                <label for="matricule">Matricule</label>
                                        <input class="form-control" type="text" value="Matricule">
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                    <!-- /form user info -->

                </div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>