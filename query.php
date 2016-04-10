<?php
/*
 * Requetes users
 */
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
function query_check_oldpw($db, $login)
{
	$query = "SELECT `passwd` FROM `users` WHERE login='".$login."'";
	$result = mysqli_query($db, $query);
	$result = mysqli_fetch_assoc($result);
    return $result;
}
function query_modify_passwd($db, $login, $newpw)
{
	$query = "UPDATE `users` SET `passwd`='".$newpw."' WHERE `login`='".$login."'";
	if (mysqli_query($db, $query))
		return TRUE;
	return FALSE;
}
function query_del_user($db, $login)
{
    $query = "DELETE FROM `users` WHERE login='".$login."'";
    if (mysqli_query($db, $query))
        return TRUE;
    return FALSE;
}

/*
 * Requetes students
 */
function query_get_one_student($db, $id)
{
    $query = "SELECT * FROM `articles` WHERE id='".$id."'";
	$user = mysqli_query($db, $query);
	return $user;
}
function query_del_one_student($db, $id)
{
    $query = "DELETE FROM `articles` WHERE id='".$id."'";
    if (mysqli_query($db, $query))
		return TRUE;
    return FALSE;
}
function query_add_new_student($db, $nom, $img, $price, $lvl)
{
    $query = "INSERT INTO `articles` (`nom`, `img`, `price`, `lvl`)
                    VALUES ('".$nom."', '".$img."', '".$price."', '".$lvl."')";
    if (mysqli_query($db, $query))
    {
        $result = mysqli_query($db, "SELECT id FROM `articles` ORDER BY `id` DESC LIMIT 1");
        $result = mysqli_fetch_assoc($result);
        return $result['id'];
    }
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
    $query = $query = "SELECT * FROM `articles` ORDER BY id DESC";
    $result = mysqli_query($db, $query);
    return $result;
}
function query_get_cat_by_student($db, $id)
{
    $query = "SELECT `nom` FROM  `categories` C
              LEFT JOIN  `article_categorie` AC
              ON C.id = AC.id_cat
              WHERE AC.id_art =".$id;
    $result = mysqli_query($db, $query);
    return $result;
}
function query_link_cat_art($db, $id_cat, $id_student)
{
    $query = "INSERT INTO `article_categorie` (`id_cat`, `id_art`)
              VALUES ('".$id_cat."', '".$id_student."')";
    if (mysqli_query($db, $query))
        return TRUE;
    return FALSE;
}



/*
 * Requetes categories
 */
function query_add_categorie($db, $nom)
{
	$query = "INSERT INTO `categories` (`nom`) VALUES ('".$nom."')";
    if (mysqli_query($db, $query))
        return TRUE;
    return FALSE;
}
function query_del_categorie($db, $nom)
{
    $query = "DELETE FROM `categories` WHERE nom='".$nom."'";
    if (mysqli_query($db, $query))
        return TRUE;
    return FALSE;
}
function query_get_all_cat($db)
{
    $query = $query = "SELECT * FROM `categories`";
    $result = mysqli_query($db, $query);
    return $result;
}


/*
 * Others Requetes
 */
function query_get_price($db, $id)
{
    $query = "SELECT price FROM `articles` WHERE id =".$id;
    $result = mysqli_query($db, $query);
    return $result;
}
function query_new_command($db, $login)
{
    $query = "INSERT INTO `commands` (`login`) VALUES ('".$login."')";
    if (mysqli_query($db, $query))
    {
        $result = mysqli_query($db, "SELECT id FROM `commands` WHERE login='".$login."' ORDER BY `date` DESC LIMIT 1");
        return $result;
    }
    return FALSE;
}
function query_link_item_command($db, $id_command, $cart)
{
    foreach ($cart as $id_item)
    {
        $query = "INSERT INTO `items_command` (`id_command`, `id_item`) VALUES ('".$id_command."', '".$id_item."')";
        if (!mysqli_query($db, $query))
            return FALSE;
    }
    return TRUE;
}
function query_get_invalid_command($db)
{
    $query = "SELECT * FROM  `commands` WHERE  `status`=0";
    if ($result = mysqli_query($db, $query))
    {
        return $result;
    }
    return FALSE;
}
?>
