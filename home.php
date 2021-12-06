<?php include("lib.php"); ?>

<script type="text/javascript" src="js/logout.js"></script>

<script type="text/javascript" src="js/script.js"></script>

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
            <li class="nav-item">
                <a class="nav-link" href="#" id="logout">Déconnexion</a>
            </li>
        </ul>
    </div>
</nav>

<table class="table table table-striped table-light">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Document</th>
            <th scope="col">Sujet</th>
            <th scope="col">Date de publication</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody id="tdata">
        
    </tbody>
</table>