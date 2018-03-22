<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$event_auth=$_SESSION['event_auth'];

if((isset($_POST['btn_remove'])))
{
	$sql_query=mysqli_query($bd,"DELETE FROM $event_auth WHERE paid='no'");
	if($sql_query)
	{
		?>
    	<script>alert('Removed Successfully!');</script> 
   		<?php
	}
	else
	{
		?>
    	<script>alert('Could not remove!');</script> 
   		<?php
	}
}
?>

<?php include 'header.php';
      include 'validation.php';
      include 'teachersidenavbar.php'; ?>
<div class="col-sm-9">  
<div class="main" id="myprofile">
<h1>Check Student Participation</h1> 
<br /><br />
<?php
if($event_auth!=NULL)
{?>
	<center>
		<h2>All Participating Students In <?php echo strtoupper($event_auth);?></h2><br />
        <form method="post">
        <button type="submit" class="btn btn-warning" name="btn_remove">Remove All Unpaid Participants</button>
        </form><br /><br />
		<table class="headtable">
        	<tr>
            <th>Sr No</th>
            <th>Name</th>
            <th>Branch</th>
            <th>Year</th>
            <th>Date</th>
            <th>Paid</th></tr>
            <?php
			include_once 'dbconnect.php';
			$sql_query=mysqli_query($bd,"SELECT * FROM $event_auth");
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
                    <td><?php echo $row[6]; ?></td>
                    </tr>
                <?php
				$i++;
				}
				
			}?>
		</table>
    </center>
<?php
}?>
</div>
</div>
</div>
<?php include 'footer.php'; ?>