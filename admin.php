<?php
include "header.php"
?>
<table>
	<tr>
		Add student
		<form method="post" action="logging.php">
		<td>Nom: <input type="text" name="nom" placeholder="name"/></td>
		<td>Photo: <input type="text" name="img" placeholder="link" /></td>
		<td>Prix: <input type="text" name="price" placeholder="price" /></td>
		<td>Niveau: <input type="text" name="lvl" placeholder="lvl" /></td>
		<tr>Skill: <input type="text" name="skill" placeholder="skill" /></tr>
		<tr><input type="submit" name="submit" value="OK" /></tr>
		</form>
	</tr>
</table>
<table>
		Create categorie
		<form method="post" action="logging.php">
		<td>Nom: <input type="text" name="cat" placeholder="skill"/></td>
		<td><input type="submit" name="submit" value="OK" /></td>
		</form>
</table>
