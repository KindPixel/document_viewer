<?php
session_start();

if (!isset($_SESSION)) {
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


<script type="text/javascript" src="js/updateMdpscript.js"></script>

<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
</div>

<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
</div>

<div id="status-user"></div>

<div class="registerbox maxwidthform">

    <div class="form-group">
        <label>Mots de passe actuel</label>
        <div class="input-group">
            <input type="password" class="form-control" name="password" autocomplete="new-password" id="old-password">
            <div class="input-group-append toggle-password">
                <span class="input-group-text mdi mdi-eye-off-outline"></span>
            </div>
        </div>
    </div>

    <div class="form-group">

        <label>Nouveau mots de passe</label>
        <div class="input-group">
            <input type="password" class="form-control" name="password" autocomplete="new-password" id="newPass">
            <div class="input-group-append toggle-password">
                <span class="input-group-text mdi mdi-eye-off-outline"></span>
            </div>
        </div>

        <div class="password-helper" style="display:none">
            <div id="Length" class="glyphicon glyphicon-remove">Doit contenir au moins huit caractères</div>
            <div id="UpperCase" class="glyphicon glyphicon-remove">Doit avoir au moins un caractère majuscule</div>
            <div id="LowerCase" class="glyphicon glyphicon-remove">Doit avoir au moins un caractère minuscule</div>
            <div id="Numbers" class="glyphicon glyphicon-remove">Doit avoir au moins un caractère numérique</div>
            <div id="Symbols" class="glyphicon glyphicon-remove">Doit avoir au moins un caractère spécial</div>
        </div>

    </div>

    <div class="form-group">
        <label>confirmation du nouveau mots de passe</label>
        <div class="input-group">
            <input type="password" class="form-control" name="password" autocomplete="new-password" id="newPassConf">
            <div class="input-group-append toggle-password">
                <span class="input-group-text mdi mdi-eye-off-outline"></span>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary" value="Créer" id="butUpdmDP">Modifier</button>

</div>