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
	if (query_add_new_student($db, $nom, $img, $price, $lvl) == FALSE)
	{
		$_SESSION['msg'] = "Failed to add student";
		header("Location: admin.php");
		exit ();
	}
	else
	{
		$_SESSION['msg'] = "Student added";
		header("Location: admin.php");
		exit ();
	}
}
$_SESSION['msg'] = "Champ(s) non rempli(s)";
header("Location: admin.php");
exit ();
?>
