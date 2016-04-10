<?php
session_start();
include "functions.php";
if (!$_SESSION['login'])
{
    $_SESSION['msg'] = "You must be log for valid a command";
    header('Location: cart.php');
}
else{
    if (send_cart($_SESSION['cart'], $_SESSION['login']))
    {
        unset($_SESSION['cart']);
        unset($_SESSION['nbr_item']);
        unset($_SESSION['price_cart']);
        $_SESSION['msg'] = "The command has been send to an admin";
        header('Location: index.php');
    }
    else
    {
        $_SESSION['msg'] = "Aie, the operation has been abord. Please try later.";
        header('Location: cart.php');
    }
}
?>