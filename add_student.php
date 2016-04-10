<?php
session_start();
include "functions.php";
if($_POST['nom'] && $_POST['img'] && $_POST['price'] && $_POST['lvl'])
{
	$nom = $_POST['nom'];
	$img = $_POST['img'];
	$price = $_POST['price'];
	$lvl = $_POST['lvl'];
    if (!$db = db_init())
	{
		$_SESSION['msg'] = "DB Unloaded";
		header("Location: admin.php");
		exit ();
	}
	if (!$id_new_student = query_add_new_student($db, $nom, $img, $price, $lvl))
	{
		$_SESSION['msg'] = "Failed to add student";
		header("Location: admin.php");
		exit ();
	}
	else
	{
		foreach ($_POST['categories'] as $id_cat)
		{
			if(!query_link_cat_art($db, $id_cat, $id_new_student))
			{
				$_SESSION['msg'] = "Failed add student (categories trouble)";
				exit();
			}
		}
		$_SESSION['msg'] = "Student added";
		header("Location: admin.php");
		exit ();
	}
}
$_SESSION['msg'] = "Unfilled form(s)";
header("Location: admin.php");
exit ();
?>
