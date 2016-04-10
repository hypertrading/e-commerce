<?php
include "header.php";
?>
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
		<td>Ancien MdP: <input type="text" name="oldpw" placeholder="Old Password"/></td>
		<td>Nouveau MdP: <input type="text" name="newpw" placeholder="New Password"/></td>
		<td><input type="submit" name="submit" value="OK" /></td>
		</form>
	</tr>
</table>
