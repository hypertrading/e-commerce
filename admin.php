<?php
include "header.php"
?>
<table>
	<tr>
		Add student
		<form method="post" action="add_student.php">
		<td>Nom: <input type="text" name="nom" placeholder="name"/></td>
		<td>Photo: <input type="text" name="img" placeholder="link" /></td>
		<td>Prix: <input type="text" name="price" placeholder="price" /></td>
		<td>Niveau: <input type="text" name="lvl" placeholder="lvl" /></td>
	</tr>
	<tr><td><ul>
		<?php $tab = get_all_cat();
		foreach ($tab as $tmp => $cat)
		{?>
		<li><label><?php echo $cat['nom']; ?><input type="checkbox" name="<?php echo $cat['id']?>" /></label></li>
	<?php }?>
</ul></td></tr>
	<tr>
		<td><input type="submit" name="submit" value="OK" /></td>
	</tr>
	</form>
</table>
<br />
<table>
	<td>Create categorie
		<form method="post" action="add_categorie.php">
		Categorie: <input type="text" name="cat" placeholder="skill"/>
		<input type="submit" name="submit" value="OK" />
		</form>
	</td>
	<td>Destroy categorie
		<form method="post" action="del_categorie.php">
		Categorie: <input type="text" name="cat" placeholder="skill"/>
		<input type="submit" name="submit" value="OK" />
		</form>
	</td>
</table>
