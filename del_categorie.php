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
	if (query_del_categorie($db, $_POST['cat']) == FALSE)
	{
		$_SESSION['msg'] = "Failed to del categorie";
		header("Location: admin.php");
		exit ();
	}
	else
	{
		$_SESSION['msg'] = "Categorie destroy";
		header("Location: admin.php");
		exit ();
	}
}
 ?>
