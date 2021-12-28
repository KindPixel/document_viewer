<?php
session_start();

if ($_SESSION["access"] == "NULL" || $_SESSION["access"] == "" || !isset($_SESSION)) {
    echo '<meta http-equiv="refresh" content="0;url=login.php">';
    die();
}

if ($_SESSION["access"] != "999") {
    echo '<meta http-equiv="refresh" content="0;url=home.php">';
    die();
}

include("lib.php");
include("navbar.php");
?>

<script type="text/javascript" src="js/listingusers.js"></script>

<table class="table table-striped table-hover" id="tableUser">
    <thead>
        <tr>
            <th>Nom société</th>
            <th>Nom utilisateur</th>
            <th>Email</th>
            <th>Statut</th>
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>