<?php
session_start();

if (!isset($_SESSION)) {
    echo '<meta http-equiv="refresh" content="0;url=login.php">';
    die();
}

if($_SESSION["access"] != "999") {
    echo '<meta http-equiv="refresh" content="0;url=home.php">';
    die();
}

include("lib.php");
include("navbar.php");
?>


<script type="text/javascript" src="js/updatescript.js"></script>

<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
</div>

<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
</div>

<div class="registerbox maxwidthform">

	<h5 id="currentUser">Modifier l'utilisateur :	</h5>

	<form id="register_form" name="form1" method="post">

		<div class="form-group">
			<label for="email">Nom de la compagnie</label>
			<input type="text" class="form-control" id="name-company" placeholder="" name="Name of the company" required>
		</div>

		<div class="form-group">
			<label>Nom d'utilisateur</label>
			<input type="text" class="form-control" id="login" placeholder="" name="Login" required>
		</div>

		<div class="form-group">
			<label>Prénom - Nom</label>
			<input type="text" class="form-control" id="AllName" placeholder="" name="AllName" required>
		</div>

		<div class="form-group">
			<label for="pwd">Adresse email</label>
			<input type="email" class="form-control" id="email" placeholder="" name="email" required>
		</div>

		<button type="button" class="btn btn-primary" value="Créer" id="butUpd">Modifier</button>

	</form>

</div>

<div>
	<button type="button" class="btn btn-primary" value="Créer" id="aUpdateMdp">Modifier le mots de passe</button>
</div>