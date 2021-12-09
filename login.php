<?php include("lib.php");
if ($_SESSION['access'] != "") {
    header("Location: home.php");
}
?>

<script type="text/javascript" src="./js/loginscript.js"></script>

<div class="loginbox">

	<form id="login_form" method="post">
		
		<div class="form-group">
			<label for="pwd">Login:</label>
			<input class="form-control" id="login" placeholder="login" name="login">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="password" placeholder="Password" name="password">
		</div>
		<input type="button" name="save" class="btn btn-primary" value="Login" id="butlogin">

	</form>

	<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>

</div>