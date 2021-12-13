<?php include("lib.php");
if ($_SESSION['access'] != "") {
    header("Location: home.php");
}
?>

<script type="text/javascript" src="js/loginscript.js"></script>

<div class="loginbox">

	<form id="login_form">
		<p class="logop"><img class="logoimg" src="img/logo.png" alt="Sunitech"></p>
		<p class="titlelog">Se connecter</p>
		<div class="form-group">
			<label for="pwd">Nom d'utilisateur</label>
			<input class="form-control" id="login" name="login">
		</div>
		<div class="form-group">
			<label for="pwd">Mot de passe</label>
			<input type="password" class="form-control" id="password" name="password">
		</div>
		<input name="save" class="btn btn-primary" value="Se connecter" id="butlogin">
	</form>

	<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>

</div>
