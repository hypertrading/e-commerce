<?php
session_start();
include "functions.php";
if($_POST['cat'])
{
    if (!$db = db_init())
	{
		$_SESSION['msg'] = "DB Unloaded";
		header("Location: admin.php");
		exit ();
	}
	if (query_add_categorie($db, $_POST['cat']) == FALSE)
	{
		$_SESSION['msg'] = "Failed to add categorie";
		header("Location: admin.php");
		exit ();
	}
	else
	{
		$_SESSION['msg'] = "Categorie added";
		header("Location: admin.php");
		exit ();
	}
}
 ?>
