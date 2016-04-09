<?php
function query_get_one_user($db, $firstname, $lastname)
{
    $query = "SELECT * FROM `users` WHERE lastname =".$lastname." AND firstname=".$firstname;
    $user = mysqli_query($db, $query);
    return $user;
}
function query_add_new_student($db, $nom, $img, $price, $skill, $lang)
{
    $query = "INSERT INTO `articles` (`nom`, `img`, `price`, `skill`, `lang`) 
                    VALUES ('".$nom."', '".$img."', '".$price."', '".$skill."', '".$lang."')";
    if (mysqli_query($db, $query))
        return TRUE;
    return FALSE;
}
function query_get_highlight($db)
{
    $query = "SELECT * FROM `articles` ORDER BY `skill` desc LIMIT 3";
    $result = mysqli_query($db, $query);
    return $result;
}
?>