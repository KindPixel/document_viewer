<?php
include("lib.php");

if ($_SESSION["access"] == "") {
    header("Location: login.php");
} else if ($_SESSION["access"] != "999") {
    header("Location: home.php");
    die();
}
?>

<?php include("navbar.php") ?>

<script type="text/javascript" src="js/singleuser.js"></script>
<script type="text/javascript" src="js/listingfilesaccess.js"></script>

<body>
    <div id="singleuser"></div>

    <form id="acessdoc" class="was-validated">
        
        

        
    </form>

    <button type="button" id="btn-change-access" class="btn btn-primary btn-submit">Submit</button>
    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">      </div>
    <div class="alert alert-danger alert-dismissible" id="error" style="display:none;"></div>

</body>