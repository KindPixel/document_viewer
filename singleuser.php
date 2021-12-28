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

<script type="text/javascript" src="js/singleuser.js"></script>
<script type="text/javascript" src="js/listingfilesaccess.js"></script>

<body>

    <div id="singleuser"></div>

    <div class="singleuser">
        <form id="acessdoc" class="was-validated">

        </form>
    </div>

    <button type="button" id="btn-change-access" class="btn btn-primary btn-submit">Submit</button>
    <div class="alert alert-success alert-dismissible" id="success" style="display:none;"> </div>
    <div class="alert alert-danger alert-dismissible" id="error" style="display:none;"></div>

</body>