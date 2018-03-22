<?php 
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$login_id=$_SESSION['login_id'];
$full_name=$_SESSION['full_name'];
$branch=$_SESSION['branch'];
$year=$_SESSION['year'];
$mobile_no=$_SESSION['mobile_no'];
$authority=$_SESSION['authority'];
$event_auth=$_SESSION['event_auth'];

if((isset($_POST['btn_paid'])))
{
	$id=$_POST['btn_paid'];
	$result=mysqli_query($bd,"UPDATE $event_auth SET paid='yes' WHERE id='$id'");
	if(!$result)
	{
		?>
        <script>alert('Could not update!');</script> 
       	<?php
	}
	
}

include 'header.php';
include 'validation.php';
include 'studentsidenavbar.php';  
?>
<div class="col-sm-9">
<div class="main" id="logindiv">
	<center>
    <h1><?php echo $event_auth; ?>  Participants</h1>
		<h3>List Of Unpaid Participating Students</h3><br />
        <div class="table-responsive">
        <form method="post">
		<table class="headtable">
        	<tr>
            <th>Sr No</th>
            <th>Name</th>
            <th>Branch</th>
            <th>Year</th>
            <th>Date</th>
            <th>Paid</th></tr>
            <?php
			$sql_query=mysqli_query($bd,"SELECT * FROM $event_auth WHERE paid='no'");
			if(mysqli_num_rows($sql_query)>0)
			{
				$i=1;
				while($row=mysqli_fetch_row($sql_query))
				{?>
            		<tr>
                    <td><?php echo $i; ?></td>
            		<td><?php echo $row[2]; ?></td>
            		<td><?php echo $row[3]; ?></td>
            		<td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[7]; ?></td>
                    <td>
						<button type="submit" name="btn_paid" class="btn btn-warning" value="<?php echo $row[0];?>">Paid</button>
					</td>
                    </tr>
                <?php
				$i++;
				}
			}
			else
			{?>
            	<tr>
                <td colspan="6">There are no Unpaid Participants!</td>
                </tr>
			<?php
            }
            ?>
		</table>
        </form>
        </div>
    </center>
</div>
</div>
</div>
<?php include 'footer.php';?>