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

<table border='1' id="tableUsers">
    <tr>
        <th>Login</th>
        <th>Nom de l'entreprise</th>
        <th>Email</th>
        <th>Niveau d'access</th>
        <th>Actions</th>
    </tr>
</table>