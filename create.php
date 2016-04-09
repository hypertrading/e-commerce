<?php
include "functions.php";
if ($_POST[submit] != "OK" || $_POST[login] == "" || $_POST[passwd] == "")
	echo "ERROR CREATE_USER (form empty or partially)\n";
else
{
	if (check_form($_POST[login] == FALSE) || check_form($_POST[passwd] == FALSE))
		echo "Wrong Format\n";
	else
	{
		if (!$db = db_init())
			echo "DB unloaded\n";
		else
		{
			if (query_get_one_user($db, $_POST[login]) == NULL)
			{
				$passwd = hash("whirlpool", $_POST[passwd]);
				if (query_add_new_user($db, $_POST[login], $passwd) == FALSE)
					echo "FAILED TO ADD USER IN DB";
				else
					echo "SUCCESS";
			}
			else
				echo "USER ALREADY EXIST";
		}
	}
}
?>
