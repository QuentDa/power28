<div class="row d-flex justify-content-center">

    <nav id="header" class="navbar navbar-expand-lg navbar-light col-md-10">
        <a class="navbar-brand" href="index.php?c=index"><img src="assets/img/logopng.png" width="50%" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav d-flex w-100 justify-content-end">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?c=index">ACCUEIL <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?c=applications">APPLICATIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?c=about">À PROPOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?c=contact">CONTACT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php if(isset($_SESSION['user'])): ?>
                            <p class="h3 text-center"><?php echo $_SESSION['user']; ?> !</p>
                            <p>
                            <div class="d-flex flex-column align-items-center">
                                <a class="d-block btn btn-success mb-4 mt-2" href="index.php?c=user-profile">Mon Profil</a>
                                <a class="d-block btn btn-danger mb-4 mt-2" href="index.php?logout">Déconnexion</a>
                                <?php if($_SESSION['is_admin'] == 1): ?>
                                    <a class="d-block btn btn-warning mb-4 mt-2" href="index.php?c=admin-index">Administration</a>
                                <?php endif; ?>
                            </div>
                            </p>
                        <?php else: ?>
                            <a class="dropdown-item" href="index.php?c=login">Connexion</a>
                            <a class="dropdown-item" href="index.php?c=register">S'inscrire</a>
                        <?php endif; ?>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>