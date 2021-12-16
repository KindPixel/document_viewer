<?php
include("lib.php");

if ($_SESSION["access"] == "") {
    header("Location: login.php");
}
else if ($_SESSION["access"] != "999") {
    header("Location: home.php");
    die();
}
?>

<?php include("navbar.php")?>

<script type="text/javascript" src="js/listingusers.js"></script>

<div class="maxwidth">

<h5>Liste des utilisateurs</h5>

<table border='1' id="tableUsers">
    <tr>
        <th>Nom société</th>
        <th>Nom utilisateur</th>
        <th>Email</th>
        <th>Statut</th>
        <th>Actions</th>
    </tr>
</table>

</div>
