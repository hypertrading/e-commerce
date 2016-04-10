<?php
session_start();
include "functions.php";
if($_POST[oldpw] != NULL && $_POST[newpw] != NULL)
{
    if (!$db = db_init())
	{
		$_SESSION['msg'] = "DB Unloaded";
		header("Location: profil.php");
		exit ();
	}
	if (query_check_oldpw($db, $_POST[oldpw]) == FALSE)
	{
		$_SESSION['msg'] = "Wrong Password";
		header("Location: profil.php");
		exit ();
	}
	else
	{
		if (query_modify_passwd($db, $_POST[newpw]) == FALSE)
		{
			$_SESSION['msg'] = "Unabled to modify password. Please try again later";
			header("Location: index.php");
			exit ();
		}
		else
		{
			$_SESSION['msg'] = "Password Modified";
			header("Location: index.php");
			exit ();
		}
	}
}
$_SESSION['msg'] = "Champ(s) non rempli(s)";
header("Location: profil.php");
exit ();
?>
