<?php
include_once 'dbconnect.php';

if((isset($_POST['s_part'])))
{
	$sname=$_POST['s_part'];
	$sql_query=mysqli_query($bd,"INSERT INTO `seminar_part` (`id`, `act_name`, `stud_id`, `stud_name`, `branch`, `year`, mobile_no, `paid`, part_date) VALUES (NULL, '$sname', '$login_id', '$full_name', '$branch', '$year', '$mobile_no', 'no', CURDATE());");
}

if((isset($_POST['s_nopart'])))
{
	$sname=$_POST['s_nopart'];
	$sql_query=mysqli_query($bd,"DELETE FROM seminar_part WHERE stud_id='$login_id' AND act_name='$sname'");
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
			$sql_query=mysqli_query($bd,"SELECT * FROM seminar WHERE (branch='$branch' OR branch='all' OR branch='$actbranch') AND (year='$year' OR year='all')");
			if(mysqli_num_rows($sql_query)>0)
			{
				while($row=mysqli_fetch_row($sql_query))
				{
					$semin=$row[1]; ?>	
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
                        <a name="bachk" href="act_common.php?act=seminar#<?php echo $row[0]; ?>">
                        View</button>
                        <?php
						}
						else if($actbranch=="computer")
						{?>
                        <button type="button" class="btn btn-warning" name="bavw">
                        <a name="bachk" href="act_comp.php?act=seminar#<?php echo $row[0]; ?>">
                        View</button>
                        <?php
						}
						else if($actbranch=="electronic")
						{?>
                        <button type="button" class="btn btn-warning" name="bavw">
                        <a name="bachk" href="act_elec.php?act=seminar#<?php echo $row[0]; ?>">
                        View</button>
                        <?php
						}?>
                    </td>
                    <?php 
                    $res=mysqli_query($bd,"SELECT * FROM seminar_part WHERE act_name='$semin' AND stud_id='$login_id'");
					if(mysqli_num_rows($res)==0)
					{?>
            			<td>
                    		<button type="submit" name="s_part" class="btn btn-warning" value="<?php echo $semin;?>">Participate</button>
                    	</td>
					<?php 
					}
					else
					{?>
						<td>
                    		<button type="submit" name="s_nopart" class="btn btn-warning" value="<?php echo $semin;?>">Cancel</button>
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
