<?php
function query_get_one_user($db, $login)
{
    $query = "SELECT * FROM `users` WHERE login='".$login."'";
    $result = mysqli_query($db, $query);
    $result = mysqli_fetch_assoc($result);
	return $result;
}
function query_add_new_user($db, $login, $passwd)
{
    $query = "INSERT INTO `users` (`login`, `passwd`)
	 				VALUES ('".$login."', '".$passwd."')";
    if (mysqli_query($db, $query))
        return TRUE;
    return FALSE;
}
function query_get_one_student($db, $id)
{
    $query = "SELECT * FROM `articles` WHERE id=".$id;
    $user = mysqli_query($db, $query);
    return $user;
}
function query_add_categorie($db, $nom)
{
    $query = "INSERT INTO `categories` (`nom`) VALUES ('".$nom."')";
    if (mysqli_query($db, $query))
        return TRUE;
    return FALSE;
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
function query_get_price($db, $id)
{
    $query = "SELECT price FROM `articles` WHERE id =".$id;
    $result = mysqli_query($db, $query);
    return $result;
}

?>
