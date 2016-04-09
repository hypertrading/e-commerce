<?php
session_start();
include "functions.php";
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
        <button><a href="#">Log-in</a></button>
        <a href="register.php"><button>Register</button></a>
        <div class="panier">
            <a href="#"><img class="logo-panier" src="assets/img/panier.png"></a>
            <p>3 students</p>
            <p>200 Wallets</p>
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
