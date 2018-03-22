<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}

$tabname=$_GET['aptb'];
$actfee=$_GET['apfee'];
$actn=$_GET['apnm'];

if((isset($_POST['bapaid'])))
{
	$id=$_POST['bapaid'];
	$result=mysqli_query($bd,"UPDATE $tabname SET paid='yes' WHERE id='$id'");
	if(!$result)
	{
		?>
        <script>alert('Could not update!');</script> 
       	<?php
	}
}
if((isset($_POST['barem'])))
{
	$sql_query=mysqli_query($bd,"DELETE FROM $tabname WHERE act_name='$actn' AND paid='no'");
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

include 'header.php';
      include 'validation.php';
      include 'teachersidenavbar.php'; ?>
<div class="col-sm-9">  
<div class="main" id="myprofile">
<center>
<h1>Students Participating In <?php echo $actn; ?></h1> 
<br /><br />
<?php
if($actfee>0)
{?>
<form method="post">
<button type="submit" class="btn btn-warning" name="barem">Remove All Unpaid Participants</button>
</form>
<br /><br />
<?php
}?>

		<div class="table-responsive">
			<table class="headtable">
        	<tr>
            <th>Sr No</th>
            <th>Participant</th>
            <th>Branch</th>
            <th>Year</th>
            <?php
			if($actfee!=0)
			{?>
            	<th>Paid</th>
             <?php
			}?>
             </tr>
			<?php
			include_once 'dbconnect.php';
			$sql_query=mysqli_query($bd,"SELECT * FROM $tabname WHERE act_name='$actn' ORDER BY paid");
			$i=1;
			if(mysqli_num_rows($sql_query)>0)
			{
				while($row=mysqli_fetch_row($sql_query))
				{?>
            		<tr>
                    <td><?php echo $i; ?></td>
            		<td><?php echo $row[3]; ?></td>
            		<td><?php echo $row[4]; ?></td>
            		<td><?php echo $row[5]; ?></td>
                    <?php
                    if($actfee>0)
					{?>
                    	<td>
                        <?php
                    	if($row[7]=="no")
						{?>
                        	<form method="post">
                        	<button type="submit" name="bapaid" class="btn btn-warning" value="<?php echo $row[0];?>">Paid</button>
                            </form>
                        <?php
						}
						else
						{
                    		echo $row[7]; 
                        }?>
                        </td>
                    <?php
					}?>
                    </tr>
                <?php
				$i++;
				}
			}
			else
			{?>
            	<tr><td colspan="5">There are no participants!</td></tr>
            <?php
			}?>
		</table>
        </div>
</center>
</div>
</div>
</div>
<?php include 'footer.php'; ?>