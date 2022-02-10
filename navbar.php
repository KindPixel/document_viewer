<?php
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Third navbar example">
    <div class="container-fluid">
        <a href="home.php" class="navbar-brand">
            <img class="logoimg" src="img/logo.png" alt="Sunitech">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
            <div class="navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php" id="">Accueil</a>
                    </li>
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
        </div>
    </div>
</nav>