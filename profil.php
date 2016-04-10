<?php
include "header.php";
?>
<section class="body">
	<table>
		<tr>
			<td>Modify password</td>
			<form method="post" action="modifypasswd.php">
			<td>Ancien MdP: <input type="text" name="oldpw" placeholder="Old Password"/></td>
			<td>Nouveau MdP: <input type="text" name="newpw" placeholder="New Password"/></td>
			<td><input type="submit" name="submit" value="OK" /></td>
			</form>
		</td>
		</tr>
		<tr>
			<td>Unregister</td>
			<form method="post" action="unregister.php">
			<td>MdP: <input type="text" name="passwd" placeholder="Password"/></td>
			<td>Valider: <input type="checkbox" name="check" value="1"/></td>
			<td><input type="submit" name="submit" value="OK" /></td>
			</form>
		</tr>
	</table>
</section>
