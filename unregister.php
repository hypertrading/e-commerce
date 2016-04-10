<?php
session_start();
include "functions.php";
if ($_POST['check']  && $_POST['passwd'])
{
	if (!$db = db_init())
	{
		$_SESSION['msg'] = "DB Unloaded";
		header("Location: profil.php");
		exit ();
	}
	if (!$db_oldpw = query_check_oldpw($db, $_SESSION['login']))
	{
		$_SESSION['msg'] = "Unable to get oldpw from DB. Please try again later";
		header("Location: index.php");
		exit ();
	}
	if ($db_oldpw['passwd'] == hash("whirlpool", $_POST['passwd']))
	{
		query_del_user($db, $_SESSION['login']);
		$_SESSION['msg'] = "Profil deleted";
		$_SESSION['login'] = "";
		header("Location: index.php");
		exit ();
	}
	$_SESSION['msg'] = "Wrong Password";
	header("Location: profil.php");
	exit ();
}
$_SESSION['msg'] = "Champ(s) non rempli(s)";
header("Location: profil.php");
exit ();
?>
