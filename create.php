<?php
include "functions.php";
$return = "lol";
if ($_POST[submit] != "OK" || $_POST[login] == "" || $_POST[passwd] == "")
	$return = "ERROR CREATE_USER (form empty or partially)\n";
else
{
	if (check_form($_POST[login]) == FALSE || check_form($_POST[passwd]) == FALSE)
		$return = "Wrong Format\n";
	else
	{
		if (!$db = db_init())
			$return = "DB unloaded\n";
		else
		{
			if (query_get_one_user($db, $_POST[login]) != $_POST[login])
			{
				$passwd = hash("whirlpool", $_POST[passwd]);
				if (query_add_new_user($db, $_POST[login], $passwd) == FALSE)
					$return = "FAILED TO ADD USER IN DB";
				else
					$return = "SUCCESS";
			}
			else
				$return = "USER ALREADY EXIST";
		}
	}
}
echo $return;
?>
