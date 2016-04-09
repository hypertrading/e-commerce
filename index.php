<?php include ("header.php"); 
$hightlight = get_highlight();
echo '<section class="body">';
foreach ($hightlight as $student)
{?>
	<div class="framestuhome">
		<img id="framestuhomeimg" src="<?php echo $student['img'];?>"></img>
		<div class="framestuhomeinfoblock">
			<div class="framestuhomeinfo"><p><?php echo $student['price'];?>₳</p></div>
			<div class="framestuhomeinfo"><p><?php echo $student['skill'];?></p></div>
		</div>
		<a href="#" id="framestuhomecart">Cart</a>
	</div>
<?}?>
</section>
</body>