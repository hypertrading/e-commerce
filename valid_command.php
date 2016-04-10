<?php
session_start();
include "functions.php";
if($_GET['id'])
{
    if ($db = db_init())
    {
        $query = "UPDATE `commands` SET `status`=1 WHERE `id`='" . $_GET['id'] . "'";
        mysqli_query($db, $query);
        $_SESSION['msg'] = "Command validate";
        header('Location: admin.php');
    }
}
else
{
    $_SESSION['msg'] = "ERROR";
    header('Location: admin.php');
}
?>