<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}

$event= $_SESSION['event_auth'];

if(isset($_POST['evupdate']))
{
	$evfee=$_POST['evfee'];
		$evpaydate=$_POST['evpaydate'];
		$evfday=$_POST['evfday'];
		$evsemi=$_POST['evsemi'];
		$evfinal=$_POST['evfinal'];
		$evenue=$_POST['evenue'];
		$table=$_POST['evupdate'];
		
		$sql_query=mysqli_query($bd,"UPDATE `$table` SET pay_amnt='$evfee', pay_date='$evpaydate', first_day='$evfday', semi_final='$evsemi', final='$evfinal', venue='$evenue' WHERE event='$event'");
		if($sql_query)
		{
			?>
       		<script>alert('Successfully updated!');
            </script> 
     		<?php
		}
		else if(!$sql_query)
		{
			?>
       		<script>alert('Could not update!');</script> 
       		<?php
		}
}

include 'header.php';
include 'validation.php';
include 'teachersidenavbar.php';  

			$query1=mysqli_query($bd,"SELECT * FROM surabhi WHERE event='$event'");
			$query2=mysqli_query($bd,"SELECT * FROM sphurti WHERE event='$event'");
			if($query1)
			{
				$table="surabhi";
				$sql_query=$query1;
			}
			else if($query2)
			{
				$sql_query=$query2;
				$table="sphurti";
			}?>
<div class="col-sm-9">
<div class="main" id="logindiv">
	<center>
    	<h1><?php echo $event; ?> Details</h1><br />
        <div class="table-responsive">
        <table class="headtable" align="center" width="70%" border="0">
        <tr>
        <th>Student Head</th>
        <th>Teacher Head</th>
        <th>Payment (Rs)</th>
        <th>Payment Date</th>
        <th>First Day</th>
        <th>Semi-Final</th>
        <th>Final Day</th>
        <th>Venue</th>
        </tr>
        <?php
        if(mysqli_num_rows($sql_query)>0)
			{
				while($row=mysqli_fetch_row($sql_query))
				{?>
                	<tr>
                    	<td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php echo $row[4]; ?></td>
                        <td><?php echo $row[5]; ?></td>
                        <td><?php echo $row[6]; ?></td>
                        <td><?php echo $row[7]; ?></td>
                        <td><?php echo $row[8]; ?></td>
                        <td><?php echo $row[9]; ?></td>
                    </tr>
                <?php
				}
			}?>
        </table></div><br /><br />
        <?php
		$query1=mysqli_query($bd,"SELECT * FROM surabhi WHERE event='$event'");
			$query2=mysqli_query($bd,"SELECT * FROM sphurti WHERE event='$event'");
			if($query1)
			{
				$table="surabhi";
				$sql_query=$query1;
			}
			else if($query2)
			{
				$sql_query=$query2;
				$table="sphurti";
			}?>
		<h1>Edit <?php echo $event; ?></h1>
        <br />
        <form method="post">
			<table class="loggedin" align="center" width="70%" border="0">
			<?php
			if(mysqli_num_rows($sql_query)>0)
			{
				while($row=mysqli_fetch_row($sql_query))
				{?>
					<tr><td>
                    	Payment Fees
    					<input type="text" name="evfee" placeholder="Payment Fees" value="<?php echo $row[4]; ?>" required />
    				</td></tr>
    				<tr><td>
                    	Payment Date		
    					<input type="text" name="evpaydate" placeholder="Payment Date" value="<?php echo $row[5]; ?>" required />
    				</td></tr>
                    <tr><td>
                    	First Day
    					<input type="text" name="evfday" placeholder="First Day" value="<?php echo $row[6]; ?>" required />
    				</td></tr>
                    <tr><td>
                    	Semi-Final Day
    					<input type="text" name="evsemi" placeholder="Semi-Final Day" value="<?php echo $row[7]; ?>" required />
    				</td></tr>
    				<tr><td>
                    	Final Day
    					<input type="text" name="evfinal" placeholder="Final Day" required="required" value="<?php echo $row[8]; ?>">
                        </input>
    				</td></tr>
                    <tr><td>
                    	Venue
    					<input type="text" name="evenue" placeholder="Venue" required="required" value="<?php echo $row[9]; ?>">                        </input>
    				</td></tr>
    				<tr><td>
    					<button type="submit" name="evupdate" value="<?php echo $table;?>">Update Event</button>
    				</td></tr>
    			<?php
				}
			}?>
			</table>
		</form>
	</center>
</div>
</div>
</div>
<?php include 'footer.php'; ?>