<?php
session_start();



if ($_SESSION["access"] == "NULL" || $_SESSION["access"] == "" || !isset($_SESSION)) {
    echo '<meta http-equiv="refresh" content="0;url=login.php">';
    die();
}

include("lib.php");
?>

<script type="text/javascript" src="js/listingfiles.js"></script>

<?php include("navbar.php")?>


<div class="infoclient">
    <h3>Bonjour <?php echo ($_SESSION['allName']); ?></h3>
    <p>Bienvenue dans votre Tableau de bord</p>
</div>


<div class="maxwidth">

<h5>Liste des documents</h5>

<table id="myTable">
    <tr>
        <th>Document</th>
        <th style="text-align:right">Action</th>
    </tr>
</table>

</div>
