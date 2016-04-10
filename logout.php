<?php
session_start();
$_SESSION['login'] = "";
$_SESSION['msg'] = "A bientot !";
unset($_SESSION['admin']);
header("Location: index.php");
exit ();
 ?>
