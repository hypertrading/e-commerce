<?php include ("header.php");
if ($students = get_student_by_cat($_GET['id']))
{
    echo "<table class='all-students'>";
    foreach ($students as $student){ ?>
        <tr>
            <td><img src="<?php echo $student['img'];?>"</td>
            <td><p><?php echo $student['nom'];?></p></td>
            <td><p>Level: <?php echo $student['lvl'];?></p></td>
            <td>
                <p><?php if($student['cat'])
                    {
                        echo "Skills: ";
                        foreach ($student['cat'] as $tab => $value)
                        {
                            if ($tab > 0)
                                echo ", ";
                            foreach ($value as $n => $skill)
                                echo $skill;
                        }
                    }?>
                </p>
            </td>
            <td>
                <?php if ($_SESSION[admin] == 1){ ?>
                    <p><?php echo $student['price'];?> ₳</p>
                    <a href="del_article.php?item=<?php echo $student['id'];?>">
                        <button>Delete article</button></a>
                <?php } else { ?>
                    <p><?php echo $student['price'];?> ₳</p>
                    <a href="addcart.php?item=<?php echo $student['id'];?>">
                        <button>Add to cart</button></a>
                <?php } ?>
            </td>
        </tr>
    <?php }
} ?>
</table>