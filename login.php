<?php include("navbar.php"); ?>

<script type="text/javascript" src="js/loginscript.js"></script>

<div class="loginbox">

	<form id="login_form" method="post">
		
		<div class="form-group">
			<label for="pwd">Email:</label>
			<input type="email" class="form-control" id="email_log" placeholder="Email" name="email">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="password_log" placeholder="Password" name="password">
		</div>
		<input type="button" name="save" class="btn btn-primary" value="Login" id="butlogin">
	</form>

</div>