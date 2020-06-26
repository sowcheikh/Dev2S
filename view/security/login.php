<section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
        <span class="alert-danger"><strong><?=@$error?></strong></span>
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate">ACCOUNT LOGIN</h1>
                    <div class="px-2">
                        <form action="<?=BASE_URL?>/security/login" method="POST" class="justify-content-center">
                            <div class="form-group">
                                <label class="sr-only">Nom d'utilisateur</label>
                                <input type="text" class="form-control" name="login" placeholder="Nom d'utilsateur">
                                <span class="text-danger"><?=@$error['login']?></span>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Mot de passe</label>
                                <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                                <span class="text-danger"><?=@$error['password']?></span>
                            </div>
                            <button type="submit" name="btn_connexion" class="btn btn-primary btn-lg">Se Connecter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>