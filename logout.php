<?php
session_start();
$_SESSION['login'] = "";
$_SESSION['msg'] = "A bientot !";
header("Location: index.php");
exit ();
 ?>
