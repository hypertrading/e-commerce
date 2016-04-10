<?php
include "functions.php";
session_start();
function query_auth_user($db, $login, $passwd)
{
    $query = "SELECT * FROM `users` WHERE login='".$login."'";
    $result = mysqli_query($db, $query);
	return $result;
}
function auth($login, $passwd)
{
	if (!$db = db_init()){
		$_SESSION['msg'] = "DB Unloaded";
		header("Location: index.php");
		exit ();
	}
	if (query_auth_user)
}
if ($_POST['login'] != "" && $_POST['passwd'] != "" && auth($_POST['login'], $_POST['passwd']))
{
	$_SESSION['login'] = $_POST['login'];
	echo "OK\n";
}
else
{
	$_SESSION['login'] = "";
	exit ("ERROR\n");
}
?>
