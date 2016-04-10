<?php include ("header.php");
if ($students = get_all_students())
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
                    foreach ($student['cat'] as $skill)
                        echo $skill." ";}?>
            </p>
        </td>
        <td><p><?php echo $student['price'];?> ₳</p><a href="addcart.php?item=<?php echo $student['id'];?>"><button>Add to cart</button></a></td>
    </tr>
<?php }
} ?>
</table>
