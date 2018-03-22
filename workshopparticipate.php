<?php
include_once 'dbconnect.php';


if((isset($_POST['w_part'])))
{
	$wname=$_POST['w_part'];
	$sql_query=mysqli_query($bd,"INSERT INTO `workshop_part` (`id`, `act_name`, `stud_id`, `stud_name`, `branch`, `year`, mobile_no, `paid`, part_date) VALUES (NULL, '$wname', '$login_id', '$full_name', '$branch', '$year', '$mobile_no', 'no', CURDATE());");
}

if((isset($_POST['w_nopart'])))
{
	$wname=$_POST['w_nopart'];
	$sql_query=mysqli_query($bd,"DELETE FROM workshop_part WHERE stud_id='$login_id' AND act_name='$wname'");
}
?>

<center>
        <form method="post">
       		<table class="headtable">
        	<tr><th>Name</th>
            <th>Author</th>
            <th>Department</th>
            <th>Year</th>
            <th>Fees (Rs)</th>
            <th>Details</th>
            <th>Participate</th></tr>
            <?php
			$sql_query=mysqli_query($bd,"SELECT * FROM workshop WHERE (branch='$branch' OR branch='all' OR branch='$actbranch') AND (year='$year' OR year='all')");
			if(mysqli_num_rows($sql_query)>0)
			{
				while($row=mysqli_fetch_row($sql_query))
				{
					$workn=$row[1]; ?>	
            		<tr>
            		<td><?php echo $row[1]; ?></td>
            		<td><?php echo $row[2]; ?></td>
            		<td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[6]; ?></td>
                    <td>
                    	<?php
						if($row[3]=="all")
						{?>
                        <button type="button" class="btn btn-warning" name="bavw">
                        <a name="bachk" href="act_common.php?act=workshop#<?php echo $row[0]; ?>">
                        View</button>
                        <?php
						}
						else if($actbranch=="computer")
						{?>
                        <button type="button" class="btn btn-warning" name="bavw">
                        <a name="bachk" href="act_comp.php?act=workshop#<?php echo $row[0]; ?>">
                        View</button>
                        <?php
						}
						else if($actbranch=="electronic")
						{?>
                        <button type="button" class="btn btn-warning" name="bavw">
                        <a name="bachk" href="act_elec.php?act=workshop#<?php echo $row[0]; ?>">
                        View</button>
                        <?php
						}?>
                    </td>
                    <?php 
                    $res=mysqli_query($bd,"SELECT * FROM workshop_part WHERE act_name='$workn' AND stud_id='$login_id'");
					if(mysqli_num_rows($res)==0)
					{?>
            			<td>
                    		<button type="submit" name="w_part" class="btn btn-warning" value="<?php echo $workn;?>">Participate</button>
                    	</td>
					<?php 
					}
					else
					{?>
						<td>
                    		<button type="submit" name="w_nopart" class="btn btn-warning" value="<?php echo $workn;?>">Cancel</button>
                   		</td>
					<?php 
					}?>
                    </tr>
                <?php
				}
			}?>
		</table>
        </form>
</center>
