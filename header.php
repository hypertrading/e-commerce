<?php
session_start();
include "functions.php";
if ($_SESSION['nbr_item'] == NULL)
    $item = "Panier vide";
else
    $item = $_SESSION['nbr_item']." student(s)";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>Rent a Student</title>
	<link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon-32x32.png">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="head">
        <img class="logo" src="assets/img/logo_rent.jpg">
        <a href="login.php"><button>Log-in</button></a>
        <a href="register.php"><button>Register</button></a>
        <div class="panier">
            <a href="cart.php"><img class="logo-panier" src="assets/img/panier.png"></a>
            <p><?php echo $item;?></p>
            <p><?php echo $_SESSION['price_cart']." ₳";?></p>
        </div>
        <div class="clear"></div>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="all_students.php">All Students</a></li>
            <li><a href="#">Favorite</a></li>
        </ul>
    </nav>
</header>
<?php
if ($_SESSION['msg'] != NULL)
{
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>