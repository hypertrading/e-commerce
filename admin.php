<?php
include "header.php"
?>
<section class="body">
<table>
	<tr>
		Add student
		<form method="post" action="add_student.php">
		<td>Nom: <input type="text" name="nom" placeholder="name"/></td>
		<td>Photo: <input type="text" name="img" placeholder="link" /></td>
		<td>Prix: <input type="text" name="price" placeholder="price" /></td>
		<td>Niveau: <input type="text" name="lvl" placeholder="lvl" /></td>
	</tr>
	<tr>
		<td>
			<ul>
				<?php $tab = get_all_cat();
				foreach ($tab as $tmp => $cat)
				{?>
				<li>
					<label><?php echo $cat['nom']; ?>
						<input type="checkbox" name="categories[]" value="<?php echo $cat['id']?>">
					</label>
				</li>
				<?php }?>
			</ul>
		</td>
	</tr>
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
	foreach ($data as $commande)
	{ ?>
		<tr>
			<td>Commande N<?php echo $commande['id'];?></td>
			<td>By <?php echo $commande['login'] ;?></td>
			<td>le <?php echo $commande['date'];?></td>
			<td><a href="valid_command.php?id=<?php echo $commande['id'];?>"><button>Validate</button></a></td>
		</tr>
<?php }
	echo "</table>";
}
else
{
	echo "aucune commande :(";
}
?>
</section>
