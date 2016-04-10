<?php
include "functions.php";
session_start();
if ($_POST['login'] != "" && $_POST['passwd'] != "" && auth($_POST['login'], $_POST['passwd']))
{
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['msg'] = "Connexion granted";
	header("Location: index.php");
	exit ();
}
else
	$_SESSION['msg'] = "Pas de correspondance login et/ou password";
	header("Location: login.php");
?>
