<?php
function query_get_one_user($db, $login)
{
    $query = "SELECT * FROM `users` WHERE login =".$login;
    $user = mysqli_query($db, $query);
    return $user;
}
function query_add_new_student($db, $nom, $img, $price, $lvl, $skill)
{
    $query = "INSERT INTO `articles` (`nom`, `img`, `price`, `lvl`, `skill`) 
                    VALUES ('".$nom."', '".$img."', '".$price."', '".$lvl."', '".$skill."')";
    if (mysqli_query($db, $query))
        return TRUE;
    return FALSE;
}
function query_get_highlight($db)
{
    $query = "SELECT * FROM `articles` ORDER BY `lvl` desc LIMIT 3";
    $result = mysqli_query($db, $query);
    return $result;
}
function query_get_all_students($db)
{
    $query = $query = "SELECT * FROM `articles`";
    $result = mysqli_query($db, $query);
    return $result;
}
?>