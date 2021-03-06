<?php
session_start();

if ($_SESSION["access"] == "NULL" || $_SESSION["access"] == "" || !isset($_SESSION)) {
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




<style>
	.glyphicon-remove {
		color: red;
		font-size: 13px;
	}

	.glyphicon-ok {
		color: green;
		font-size: 13px;
	}
</style>

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

		<div class="form-group">

			<div class="form-group">

				<label>Password</label>
				<div class="input-group">
					<input type="password" class="form-control" name="password" autocomplete="new-password" id="password">
					<div class="input-group-append toggle-password">
						<span class="input-group-text mdi mdi-eye-outline"></span>
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



		</div>

		<div class="form-group">
			<label>Password confirmation</label>
			<div class="input-group">
				<input type="password" class="form-control" name="password" autocomplete="new-password" id="password-confirmation">
				<div class="input-group-append toggle-password">
					<span class="input-group-text mdi mdi-eye-outline"></span>
				</div>
			</div>
		</div>

		<div class="form-group">
			<label>Statut</label>
			<select id="access-level" data-theme="a" data-mini="true">
				<option value="1">Utilisateur</option>
				<option value="999">Administrateur</option>
			</select>
		</div>

		<button type="button" class="btn btn-primary" value="Créer" id="butsave"> Créer</button>

	</form>

</div>