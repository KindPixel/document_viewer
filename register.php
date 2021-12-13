<?php
include("lib.php");

if($_SESSION["access"] != "999") {
	header("Location: home.php");
	die();
}

include("navbar.php");
?>

<script type="text/javascript" src="js/registerscript.js"></script>

    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>

<div class="registerbox maxwidthform">

	<h5>Créer un utilisateur</h5>

	<form id="register_form" name="form1" method="post">

    <div class="form-group">
			<label for="email">Nom de la compagnie</label>
			<input type="text" class="form-control" id="name-company" placeholder="" name="Name of the company">
		</div>

		<div class="form-group">
			<label for="email">Nom d'utilisateur</label>
			<input type="text" class="form-control" id="login" placeholder="" name="Login">
		</div>

		<div class="form-group">
			<label for="pwd">Adresse email</label>
			<input type="email" class="form-control" id="email" placeholder="" name="email">
		</div>
		<div class="form-group">
			<label for="pwd">Créer un mot de passe</label>
			<input type="password" class="form-control" id="password" placeholder="" name="password">
		</div>
        <div class="form-group">
			<label for="pwd">Confirmer le mot de passe</label>
			<input type="password" class="form-control" id="password-confirmation" placeholder="" name="password confirmation">
		</div>
        <div class="form-group">
			<label for="pwd">Statut</label>
			<input class="form-control" id="access-level" placeholder="" name="Access level">
		</div>

		<input type="button" class="btn btn-primary" value="Créer" id="butsave">
		<!--<a href="login.php">Go back..</a>-->

	</form>

</div>
