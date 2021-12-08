<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a href="home.php" class="navbar-brand">
        <img src="favicon.ico" alt="Sunitech" />
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link">Email: <?php echo ($_SESSION['mail']); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link">Compagnie: <?php echo ($_SESSION['namecomp']); ?></a>
            </li>
            <?php 
            if ($_SESSION['access'] == "999") {
            echo '<li class="nav-item"><a class="nav-link" href="register.php">Crée un nouvel utilisateur</a></li>';
            echo '<li class="nav-item"><a class="nav-link" href="admin.php">Menue ADMIN</a></li>';
            }
            ?>
            <li class="nav-item">
                <a class="nav-link" href="#" id="logout">Déconnexion</a>
            </li>
        </ul>
    </div>
</nav>