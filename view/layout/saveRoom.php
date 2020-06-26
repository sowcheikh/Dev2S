<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand">DEVSA2S</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link">Etudiant</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Chambre</a>
                <div class="dropdown-menu">
                    <a href="<?=BASE_URL?>/room/saveRoom" class="dropdown-item">Enregistrer chambre</a>
                    <a href="<?=BASE_URL?>/security/listRoom" class="dropdown-item">lister chambre</a>
                </div>
            </div>
        </div>
        <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Rechercher</button>
  </form>
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link">Se déconnecter</a>
        </div>
    </div>
</nav>
<section id="cover" class="min-vh-100">
<div class="card card-outline-secondary w-50 m-auto">
                        <div class="card-header">
                            <h3 class="mb-0">Enregistrer une chambre</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?=BASE_URL?>/room/saveRoom" id="addNew">
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nom">Numéro chambre</label>
                                <input type="texte" class="form-control" id="numch" name="numch" required>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="prenom">Numéro batîment</label>
                                <input type="texte" class="form-control" id="numbat" name="numbat" required>
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="type">Type de chambre</label>
                            <select id="type" name="type" class="form-control" size="0" required>
                                <option value="individuelle">individuelle</option>
                                <option value="Double">Double</option>
                            </select>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary float-right">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                    <!-- /form user info -->

                </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="<?=BASE_URL?>/public/js/script.js"></script>

