<?php include ("header.php"); 
if ($hightlight = get_highlight()){
echo '<section class="body">';
foreach ($hightlight as $student)
{ ?>
	<div class="article">
		<img class="article-img" src="<?= $student['img'];?>"></img>
		<div class="article-footer">
            <p class=""><?= $student['nom'];?></p>
            <p class="">Level: <?= $student['lvl'];?></p>
            <p class=""><?= $student['price'];?> ₳</p>
		</div>
		<a href="addcart.php?item=<?= $student['id'];?>" class="framestuhomecart">Cart</a>
	</div>
<?php } } ?>
</section>
<?php include ("footer.php"); ?>

