<?php
session_start();
include "query.php";

$create_table_users = "CREATE TABLE users (
              id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
              firstname VARCHAR(30) NOT NULL,
              lastname VARCHAR(30) NOT NULL,
              passwd varchar(255) NOT NULL,
              droits INT(2) NOT NULL DEFAULT 0,
              date_register TIMESTAMP)";
$passwd_admin = hash('whirlpool', "root");
$new_user_admin = "INSERT INTO `users` (`firstname`, `lastname`, `passwd`, `droits`) VALUES ('admin', 'root', '".$passwd_admin."', '1')";

$create_table_articles = "CREATE TABLE articles (
                          id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                          nom VARCHAR(30) NOT NULL,
                          img VARCHAR(30) NOT NULL,
                          price INT(4) NOT NULL DEFAULT 0,
                          skill INT(2) NOT NULL DEFAULT 0,
                          lang VARCHAR (30))";

    if (!$db = db_init())
    {
        echo "Failure in connection DB !";
    }
    else
    {
        echo "Connection ok<br>";
        $requete = mysqli_query ($db, "SHOW TABLES LIKE 'users' ");
        if(mysqli_num_rows($requete) != 1)
        {
            if (mysqli_query($db, $create_table_users))
                echo "Table users ok<br>";
            if (mysqli_query($db, $new_user_admin))
                echo "Admin account ok<br>";
        }
        $requete = mysqli_query ($db, "SHOW TABLES LIKE 'articles'");
        if(mysqli_num_rows($requete) != 1)
        {
            if (mysqli_query($db, $create_table_articles))
                echo "Table articles ok<br>";
            if (add_new_student($db, "Florent Giraud", "https://cdn.intra.42.fr/userprofil/fgiraud.jpg", "5", "6", "C"))
                echo "First Student added<br>";
        }
    }

?>
