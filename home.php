<?php include("lib.php"); ?>

<script type="text/javascript" src="js/logout.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <a href="home.php" class="logo">
        <img src="favicon.ico" alt="Sunitech"/>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <span class="nav-link">User mail:   <?php echo($_SESSION['mail']);?></span>
            </li>
            <li class="nav-item">
                <span class="nav-link">User company:    <?php echo($_SESSION['namecomp']);?></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>

