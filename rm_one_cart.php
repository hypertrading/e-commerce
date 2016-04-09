<?php
session_start();
include "functions.php";
if($_GET['item']) {
    $price = get_price($_GET['item']);
    $price = $price['price'];
    if ($_SESSION['cart'] != NULL)
    {
        array_splice($_SESSION['cart'], $_GET['key'], 1);
        $_SESSION['nbr_item'] = $_SESSION['nbr_item'] - 1;
        $_SESSION['price_cart'] = $_SESSION['price_cart'] - $price;
        if ($_SESSION['nbr_item'] == 0)
        {
            unset($_SESSION['cart']);
        }
        header('Location: ' .$_SERVER['HTTP_REFERER']);
    }
    else
    {
        header('Location: ' .$_SERVER['HTTP_REFERER']);
    }
}
?>