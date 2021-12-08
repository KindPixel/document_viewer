<?php
include("lib.php");

if($_SESSION["access"] == "") {
    header("Location: login.php");
    die();
}
?>

<script type="text/javascript" src="js/listingfiles.js"></script>

<?php include("navbar.php")?>



<table border='1' id="myTable">
    <tr>
        <th>Id</th>
        <th>nom de la page</th>
        <th>Action</th>
    </tr>
</table>

