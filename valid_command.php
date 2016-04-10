<?php
if($_GET['id'])
{
    
}
else
{
    $_SESSION['msg'] = "ERROR";
    header('Location: admin.php');
}
?>