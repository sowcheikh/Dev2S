<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../public/img/icons/favicon.ico"/>
    <!-- CSS only -->
    <link rel="icon" type="image/png" href="<?=BASE_URL?>/public/img/icons/favicon.ico"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=BASE_URL?>/public/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <title>Admin</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" data-toggle="affix">
    <a href="#" class="navbar-brand">DEVSA2S</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link active dropdown-toggle" data-toggle="dropdown">Etudiant</a>
                <div class="dropdown-menu">
                    <a href="<?=BASE_URL?>/admin/saveStudent" class="dropdown-item">Enregistrer étudiant</a>
                    <a href="<?=BASE_URL?>/admin/listStudent" class="dropdown-item">lister étudiant</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Chambre</a>
                <div class="dropdown-menu">
                    <a href="<?=BASE_URL?>/admin/saveRoom" class="dropdown-item">Enregistrer chambre</a>
                    <a href="<?=BASE_URL?>/admin/listRoom" class="dropdown-item">lister chambre</a>
                </div>
            </div>
        </div>
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link">Se déconnecter</a>
        </div>
    </div>
</nav>
<section id="cover" class="min-vh-100 pt-5">
<?php echo  $content_for_layout?>
</section>
<!-- JS, Popper.js, and jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="<?=BASE_URL?>/public/js/script.js"></script>
</body>
</html>