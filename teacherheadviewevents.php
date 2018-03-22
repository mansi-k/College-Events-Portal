<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}

$event= $_SESSION['event_auth'];

include 'header.php';
include 'validation.php';
include 'teachersidenavbar.php';  
?>
<div class="col-sm-9">
<div class="main" id="logindiv">
	<center>
    	<h1><?php echo $event; ?> Details</h1><br />
        <div class="table-responsive">
        <table class="headtable" align="center" width="70%" border="0">
        <tr>
        <th>Sr No</th>
        <th>Event</th>
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
		$sql_query=mysqli_query($bd,"SELECT * FROM $event");
        if(mysqli_num_rows($sql_query)>0)
			{
				$i = 1;
				while($row=mysqli_fetch_row($sql_query))
				{?>
                	<tr>
                    	<td><?php echo $i; ?></td>
                        <td><?php echo $row[1]; ?></td>
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
				$i++;
				}
			}?>
        </table></div><br /><br />
    </center>
</div>
</div>
</div>
<?php include 'footer.php'; ?>