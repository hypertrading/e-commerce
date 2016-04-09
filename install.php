<?php
if ($bdd = mysqli_connect('localhost', ''))
{
    echo "Success connect to DB !";
}
else
{
    echo "Failure in connection DB !";
}
?>