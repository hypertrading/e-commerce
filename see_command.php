<?php
include "header.php";
if($_GET['id'] && $_SESSION['admin'] == 1)
{
    if ($db = db_init())
    {
        $query = "SELECT * 
                  FROM `commands` C
                  LEFT JOIN `items_command` IC
                  ON IC.id_command = C.id
                  WHERE C.id=".$_GET['id'];
        $result = mysqli_query($db, $query);
        while($tmp = mysqli_fetch_assoc($result))
        {
            $data[] = $tmp;
        }
    }
}
else
{
    $_SESSION['msg'] = "ERROR";
    header('Location: admin.php');
}
?>
<section class="body">
    <h3>Recaptitulatif</h3>
    <h4><?php echo $data[0]['login']." a commande le ".$data[0]['date'];?></h4>
    <table class='all-students'>
        <?php
        foreach ($data as $row)
        {
            $student = get_one_student($row['id_item']);
             ?>
                <tr>
                    <td><img src="<?php echo $student['img'];?>"></td>
                    <td><?php echo $student['nom'];?></td>
                    <td>Level: <?php echo $student['lvl'] ;?></td>

                </tr>
        <?php
        }
        ?>
    </table>
    <a href="admin.php"><button>Retour</button></a>
    <a href="valid_command.php?id=<?php echo $data[0]['id'];?>"><button>Validate</button></a>

</section>