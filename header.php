<?php
session_start();
include "functions.php";
if (!isset($_SESSION['nbr_item']) || $_SESSION['nbr_item'] == NULL){
    $_SESSION['price_cart'] = 0;
    $item = "Panier vide";
}
else
    $item = $_SESSION['nbr_item']." student(s)";
$categories = get_all_cat();
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
        <?php if (!isset($_SESSION['login']) || $_SESSION['login'] == NULL){?>
        <a href="login.php"><button>Log-in</button></a>
        <a href="register.php"><button>Register</button></a>
        <?php }else {?>
        <a href="logout.php"><button><?php echo $_SESSION['login']?> veut se deconnecter</button></a>
		<?php if ($_SESSION['admin'] == 1){?>
		<a href="admin.php"><button>Backoffice Admin</button></a>
		<?php }else {?>
        <a href="profil.php"><button><?php echo $_SESSION['login']?> profil</button></a>
        <?php }}?>
        <div class="panier">
            <a href="cart.php"><img class="logo-panier" src="assets/img/panier.png"></a>
            <p><?php echo $item;?></p>
            <p><?php echo $_SESSION['price_cart']." ₳";?></p>
        </div>
        <div class="clear"></div>
    </div>
    <nav>
        <ul id="menu-deroulant">
            <li><a href="index.php">Home</a></li>
            <li><a href="all_students.php">All Students</a></li>
            <li><a href="#">Categories</a>
                <ul>
                    <?php foreach ($categories as $categorie) {
                        echo "<li><a href='categorie.php?id=".$categorie['id']."'>".$categorie['nom']."</a></li>";
                    }
                    ?>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<?php
if (isset($_SESSION['msg']) && $_SESSION['msg'] != NULL)
{
    echo "<div class='msg'><p>";
    echo $_SESSION['msg'];
    echo "</p></div>";
    unset($_SESSION['msg']);
}
?>
