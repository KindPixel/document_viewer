<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a href="home.php" class="navbar-brand">
        <img class="logoimg" src="img/logo.png" alt="Sunitech">
    </a>

    
    </button>

    <div class="navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="home.php" id="">Accueil</a>
            </li>
            <!--li class="nav-item">
                <a class="nav-link"><?php echo ($_SESSION['mail']); ?></a>
            </li-->
            <!--li class="nav-item">
                <a class="nav-link">Compagnie: <?php echo ($_SESSION['namecomp']); ?></a>
            </li-->
            <?php
            if ($_SESSION['access'] == "999") {
            echo '<li class="nav-item"><a class="nav-link" href="register.php">Créer un utilisateur</a></li>';
            echo '<li class="nav-item"><a class="nav-link" href="admin.php">Liste des utilisateurs</a></li>';
            }
            ?>
            <li class="nav-item logout">
                <a class="nav-link" href="#" id="logout">Déconnexion</a>
            </li>
        </ul>
    </div>
</nav>

