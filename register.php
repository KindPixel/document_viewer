<?php 
include("lib.php");

if($_SESSION["access"] != "999") {
	header("Location: home.php");
	die();
}

?>

<script type="text/javascript" src="js/registerscript.js"></script>

    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>

<div class="registerbox">
	
	<form id="register_form" name="form1" method="post">

		<div class="form-group">
			<label for="email">Login:</label>
			<input type="text" class="form-control" id="login" placeholder="Login" name="Login">
		</div>
        <div class="form-group">
			<label for="email">Name of the company:</label>
			<input type="text" class="form-control" id="name-company" placeholder="Name of the company" name="Name of the company">
		</div>
		<div class="form-group">
			<label for="pwd">Email:</label>
			<input type="email" class="form-control" id="email" placeholder="Email" name="email">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="password" placeholder="Password" name="password">
		</div>
        <div class="form-group">
			<label for="pwd">Password confirmation:</label>
			<input type="password" class="form-control" id="password-confirmation" placeholder="Password confirmation" name="password confirmation">
		</div>
        <div class="form-group">
			<label for="pwd">Access level:</label>
			<input class="form-control" id="access-level" placeholder="Access level" name="Access level">
		</div>

		<input type="button" class="btn btn-primary" value="Submit" id="butsave">
		<a href="login.php">Go back..</a>

	</form>

</div>