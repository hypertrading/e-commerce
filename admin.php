<?php
include "header.php"
?>
<hr>
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
<hr>
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
<hr>
<?php
if($data = invalid_command())
{
	echo "<table>";
	foreach ($data as $commmande)
	{ ?>
		<tr>
			<td>Commande N<?php echo $commmande['id'];?></td>
			<td>By <?php echo $commmande['login'] ;?></td>
			<td>le <?php echo $commmande['date'];?></td>
			<td><a href="#"><button>Validate</button></a></td>
		</tr>
<?php }
	echo "</table>";
}
else
{
	echo "aucune commande :(";
}
?>
