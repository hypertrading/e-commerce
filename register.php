<?php
include "header.php";
?>
<section class="body">
	<form method="post" action="create.php">
		Identifiant: <input type="text" name="login" placeholder="login"/>
		<br />
		Mot de passe: <input type="password" name="passwd" placeholder="password" />
		<input type="submit" name="submit" value="OK" />
	</form>
</section>
