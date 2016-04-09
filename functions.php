<?php
function db_init()
{
    $server = "mysql-hypertrading.alwaysdata.net";
    $username = "121422";
    $passwd = "rootme42";
    $dbname = "hypertrading_rush00";
    if (!$db = mysqli_connect($server, $username, $passwd, $dbname))
        return FALSE;
    return ($db);
}

?>