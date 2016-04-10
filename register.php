<?php
include "header.php";
?>
<section class="body">
	<h3>Register</h3>
	<form method="post" action="create.php">
		<label>
		Identifiant: <input type="text" name="login" placeholder="login"></label>
		<label>
		Mot de passe: <input type="password" name="passwd" placeholder="password"></label>
		<input type="submit" name="submit" value="OK">
	</form>
</section>
