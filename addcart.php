<?php
session_start();
include "functions.php";
if($_GET['item']) {
    $price = get_price($_GET['item']);
    if ($_SESSION['cart'] == NULL)
    {
        $_SESSION['cart'][] = $_GET['item'];
        $_SESSION['nbr_item'] = 1;
        $_SESSION['price_cart'] = $price;
        header('Location: ' .$_SERVER['HTTP_REFERER']);
    }
    else
    {
        $_SESSION['cart'][] = $_GET['item'];
        $_SESSION['nbr_item'] = $_SESSION['nbr_item'] + 1;
        $_SESSION['price_cart'] = $_SESSION['price_cart'] + $price;
        header('Location: ' .$_SERVER['HTTP_REFERER']);
    }
}
?>