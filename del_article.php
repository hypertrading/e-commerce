<?php
session_start();
include "functions.php";
if ($_GET['item'])
{
	if (!$db = db_init())
	{
		$_SESSION['msg'] = "DB Unloaded";
		header("Location: all_students.php");
		exit ();
	}
	if (query_del_one_student($db, $_GET['item']) == FALSE)
	{
		$_SESSION['msg'] = "Couldn't remove article from DB";
		header("Location: all_students.php");
		exit ();
	}
		$_SESSION['msg'] = "Article successfully remove from DB";
		header("Location: all_students.php");
		exit ();
}
$_SESSION['msg'] = "Id get from request is invalid";
header("Location: all_students.php");
exit ();
?>
