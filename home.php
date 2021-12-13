<?php
include("lib.php");

if($_SESSION["access"] == "") {
    header("Location: login.php");
    die();
}
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
        <th>Id</th>
        <th>Document</th>
        <th style="text-align:right">Action</th>
    </tr>
</table>

</div>
