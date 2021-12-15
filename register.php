<?php
include("lib.php");

if ($_SESSION["access"] != "999") {
	header("Location: home.php");
	die();
}

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
			</div>

			<span>
			<span id="Length" class="glyphicon glyphicon-remove">Must be at least 7 charcters</span>
			<span id="UpperCase" class="glyphicon glyphicon-remove">Must have atleast 1 upper case character</span>
			<span id="LowerCase" class="glyphicon glyphicon-remove">Must have atleast 1 lower case character</span>
			<span id="Numbers" class="glyphicon glyphicon-remove">Must have atleast 1 numeric character</span>
			<span id="Symbols" class="glyphicon glyphicon-remove">Must have atleast 1 special character</span>
			</span>

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
			<label>Status</label>
			<select id="access-level" data-theme="a" data-mini="true">
				<option value=""> </option>
				<option value="999">Administrateur</option>
				<option value="1">Utilisateur</option>
			</select>
		</div>

		<input type="button" class="btn btn-primary" value="Créer" id="butsave">
		<!--<a href="login.php">Go back..</a>-->

	</form>

</div>