<?php
include("lib.php");

if($_SESSION["access"] != "999") {
    header("Location: login.php");
    die();
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a href="home.php" class="logo">
        <img src="favicon.ico" alt="Sunitech" />
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <span class="nav-link">Email: <?php echo ($_SESSION['mail']); ?></span>
            </li>
            <li class="nav-item">
                <span class="nav-link">Compagnie: <?php echo ($_SESSION['namecomp']); ?></span>
            </li>
            <?php 
            if ($_SESSION['access'] == "999") {
            echo '<li class="nav-item"><a href="register.php"><span class="nav-link">Crée un nouvel utilisateur</span></a></li>';
            echo '<li class="nav-item"><a href="admin.php"><span class="nav-link">Acceder au menue ADMIN</span></a></li>';
            }
            ?>
            <li class="nav-item">
                <a class="nav-link" href="#" id="logout">Déconnexion</a>
            </li>
        </ul>
    </div>
</nav>