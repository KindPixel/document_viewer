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

<script type="text/javascript" src="js/singleuser.js"></script>

<body>
    <div id="singleuser"></div>

    <div id="accessdoc"></div>
</body>