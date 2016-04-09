<?php
include "header.php";
if ($_SESSION['cart'] !== NULL) {
    echo "<table class='all-students'>"; 
    foreach ($_SESSION['cart'] as $key => $id)
    {
        $student = get_one_student($id);?>
        <tr>
            <td><img src="<?php echo $student['img'];?>"</td>
            <td><p><?php echo $student['nom'];?></p></td>
            <td><p>Level: <?php echo $student['lvl'];?></p></td>
            <td><p>Skills: <?php echo $student['skill'];?></p></td>
            <td><p><?php echo $student['price'];?> ₳</p><a href="rm_one_cart.php?item=<?php echo $student['id'];?>&key=<?php echo $key;?>"><button>Remove from cart</button></a></td>
        </tr>
<?php
    }
}
else{
    echo "<p>Le panier est vide.</p>";
}
?>