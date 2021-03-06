<?php
include "query.php";
function db_init()
{
    //$server = "mysql-hypertrading.alwaysdata.net";
    //$username = "121422";
    //$passwd = "rootme42";

    $server = "localhost";
    $username = "root";
    $passwd = "root";

    $dbname = "hypertrading_rush00";
    if (!$db = mysqli_connect($server, $username, $passwd, $dbname))
        return FALSE;
    return ($db);
}
function get_highlight()
{
    if ($db = db_init())
    {
        $result = query_get_highlight($db);
        while ($tmp = mysqli_fetch_assoc($result))
        {
            $data[] = $tmp;
        }
        return $data;
    }
    return false;
}
function get_all_students()
{
    if ($db = db_init())
    {
        $result = query_get_all_students($db);
        while ($tmp = mysqli_fetch_assoc($result))
        {
            $cat = query_get_cat_by_student($db, $tmp['id']);
            while ($cat_tmp = mysqli_fetch_assoc($cat))
            {
                $tmp['cat'][] = $cat_tmp;
            }
            $data[] = $tmp;
        }
        return $data;
    }
    return false;
}
function check_form($str)
{
	if (preg_match("/^\w{4,16}$/", $str) == 0)
		return FALSE;
	return TRUE;

}
function get_price($id)
{
    if ($db = db_init())
    {
        $result = query_get_price($db, $id);
        $result = mysqli_fetch_assoc($result);
        $result = $result['price'];
        return $result;
    }
    return false;
}
function get_one_student($id)
{
    if ($db = db_init())
    {
        $result = query_get_one_student($db, $id);
        $result = mysqli_fetch_assoc($result);
        return $result;
    }
    return false;
}
function auth($login, $passwd)
{
	if (!$db = db_init())
	{
		$_SESSION['msg'] = "DB Unloaded";
		header("Location: index.php");
		exit ();
	}
	if ($user = query_get_one_user($db, $login))
	{
		$passwd = hash("whirlpool", $passwd);
		if ($passwd == $user['passwd'])
		{
			if ($user['droits'] == 1)
				$_SESSION['admin'] = 1;
			return TRUE;
		}
		return FALSE;
	}
	return FALSE;
}
function get_all_cat()
{
    if ($db = db_init())
    {
        $result = query_get_all_cat($db);
        while ($tmp = mysqli_fetch_assoc($result))
        {
            $data[] = $tmp;
        }
        return $data;
    }
    return false;
}
function send_cart($cart, $login)
{
    if ($db = db_init())
    {
        $id_command = query_new_command($db, $login);
        $id_command = mysqli_fetch_assoc($id_command);
        query_link_item_command($db, $id_command['id'], $cart);
        return TRUE;
    }
    return FALSE;
}
function invalid_command()
{
    if ($db = db_init())
    {
        $result = query_get_invalid_command($db);
        if(mysqli_num_rows($result) > 0) {
            while ($tmp = mysqli_fetch_assoc($result))
            {
                $data[] = $tmp;
            }
            return $data;
        }
    }
    return FALSE;
}
function get_student_by_cat($cat_id)
{
    if ($db = db_init())
    {
        $result = query_get_student_by_cat($db, $cat_id);
        if(mysqli_num_rows($result) > 0) {
            while ($tmp = mysqli_fetch_assoc($result))
            {
                $cat = query_get_cat_by_student($db, $tmp['id']);
                while ($cat_tmp = mysqli_fetch_assoc($cat))
                {
                    $tmp['cat'][] = $cat_tmp;
                }
                $data[] = $tmp;
            }
            return $data;
        }
    }
    return FALSE;
}
?>
