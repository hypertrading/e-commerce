<?php include ("header.php"); 
if ($hightlight = get_highlight()){
echo '<section class="body">';
foreach ($hightlight as $student)
{?>
	<div class="article">
		<img class="article-img" src="<?php echo $student['img'];?>"></img>
		<div class="article-footer">
            <p class=""><?php echo $student['nom'];?></p><hr>
			<p class="">Talents: <?php echo $student['skill'];?></p>
            <p class="">Level: <?php echo $student['lvl'];?></p>
            <p class=""><?php echo $student['price'];?> ₳</p>
		</div>
		<a href="cart.php" class="framestuhomecart">Cart</a>
	</div>
<?}}?>
</section>
</body>