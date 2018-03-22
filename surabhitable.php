

<table id="parttable">
<tr><td>
<form method="post">
    <table class="subtable" id="row_name" style="float:left">
    <tr><th id="event">EVENT</th></tr>
    <tr><th>Student Head</th></tr>
    <tr><th>Teacher Head</th></tr>
    <tr><th>Payment(in Rs.)</th></tr>
    <tr><th>Payment Deadline</th></tr>
    <tr><th>First Day</th></tr>
    <tr><th>Semi-Final</th></tr>
    <tr><th>Final</th></tr>
    <tr><th>Venue</th></tr>
    <tr><th id="part">Participate</th></tr>
    </table>
</td>
    <?php
	include_once 'dbconnect.php';
	$sql_query="SELECT * FROM surabhi";
	$result_set=mysqli_query($bd,$sql_query);
	if(mysqli_num_rows($result_set)>0)
	{
		while($row=mysqli_fetch_assoc($result_set))
		{
            $eventname=$row['event'];?>
            <td>
            <table class="subtable" id="<?php echo $row['id']; ?>" style="float:left">
            <tr><th id="event"><?php echo strtoupper($eventname); ?></th></tr>
            <tr><td><?php echo $row['stud_head']; ?></td></tr>
            <tr><td><?php echo $row['tch_head']; ?></td></tr>
            <tr><td><?php echo $row['pay_amnt']; ?></td></tr>
            <tr><td><?php echo $row['pay_date']; ?></td></tr>
            <tr><td><?php echo $row['first_day']; ?></td></tr>
            <tr><td><?php echo $row['semi_final']; ?></td></tr>
            <tr><td><?php echo $row['final']; ?></td></tr>
            <tr><td><?php echo $row['venue']; ?></td></tr>
            <?php 
			if($event_auth!=$eventname)
			{
				$res=mysqli_query($bd,"SELECT * FROM $eventname WHERE stud_id='$login_id'");
				if(mysqli_num_rows($res)==0)
				{?>
            		<tr><td>
                	<button type="submit" name="btn_part" class="btn btn-warning" value="<?php echo $eventname;?>">Participate</button>
                	</td></tr>
				<?php 
				}
				else
				{?>
					<tr><td>
                    	<button type="submit" name="btn_nopart" class="btn btn-warning" value="<?php echo $eventname;?>">Cancel</button>
                    </td></tr>
				<?php 
				}
			}
			else
			{?>
				<tr><td>
                	<button type="button" name="btn_check" class="btn btn-warning" value="<?php echo $eventname;?>">
                    	<a href="studenteventheadpage.php">Check</a>
                    </button>
                </td></tr>
			<?php 
			}?>
            </table>
            </td>
            <?php
		}
	}
	else
	{
		?>
        <p> Cannot load data!</p>
        <?php
	}
	?>
    </form>
</tr>
</table>
