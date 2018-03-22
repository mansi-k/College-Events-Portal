<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}

$tabname=$_GET['aptbl'];
$actn=$_GET['apnme'];

if((isset($_POST['epostact'])))
{
	if($_POST['ebranch']!="branchname" && $_POST['eactyear']!="actyr")
	{
		$actname=$_POST['eactname'];
		$author=$_POST['eauthor'];
		$actbranch=$_POST['ebranch'];
		$actyr=$_POST['eactyear'];
		$actdate=$_POST['eactdate'];
		$actfee=$_POST['eactpay'];
		$actdesc=$_POST['eactdesc'];
		
		$sql_query=mysqli_query($bd,"UPDATE `$tabname` SET name='$actname', author='$author', branch='$actbranch', year='$actyr', date_time='$actdate', fees='$actfee', description='$actdesc' WHERE name='$actn'");
		if($sql_query)
		{
			?>
       		<script>alert('Successfully updated!');
            window.location.href='checkactnamepart.php?type=<?php echo $tabname; ?>';</script> 
     		<?php
		}
		else if(!$sql_query)
		{
			?>
       		<script>alert('Could not update!');</script> 
       		<?php
		}
	}
	else
	{
		?>
       	<script>alert('Fill all details!');</script> 
       	<?php
	}
}
?>

<?php include 'validation.php';
	  include 'header.php';
      include 'teachersidenavbar.php'; ?>
<div class="col-sm-9"> 
<div class="main" id="logindiv">
	<center>
		<h1>Edit Activity</h1><br />
        <form method="post">
			<table class="loggedin" align="center" width="70%" border="0">
			<?php
			$sql_query=mysqli_query($bd,"SELECT * FROM $tabname WHERE name='$actn'");
			if(mysqli_num_rows($sql_query)>0)
			{
				while($row=mysqli_fetch_row($sql_query))
				{?>
					<tr><td>
                    	Activity Name
    					<input type="text" name="eactname" placeholder="Activity Name" value="<?php echo $row[1]; ?>" required />
    				</td></tr>
    				<tr><td>
                    	Conducted By
    					<input type="text" name="eauthor" placeholder="Conducted By" value="<?php echo $row[2]; ?>" required />
    				</td></tr>
    				<tr><td>
    					<select class="recievers" name="ebranch" required="required">
        				<option value="branchname">Select Branch</option>
            			<?php
						if($_SESSION['branch']=="computer")
						{?>
            				<option value="co">CO</option>
            				<option value="cm">CM</option>
           					<option value="computer">CO & CM</option>
           				<?php
						}
						else if($_SESSION['branch']=="electronic")
						{?>
            				<option value="ej">EJ</option>
            				<option value="et">ET</option>
            				<option value="electronic">EJ & ET</option>
            			<?php
						}
            			else if($_SESSION['branch']=="all")
						{?>
            				<option value="all">All Branches</option>
            			<?php
						}?>
        				</select>
    				</td></tr>
    				<tr><td>
    					<select class="recievers" name="eactyear" required="required">
        				<option value="actyr">Select Year</option>
        				<option value="1">1</option>
            			<option value="2">2</option>
            			<option value="3">3</option>
            			<option value="all">All</option>
        				</select>
    				</td></tr>
                    <tr><td>
                    	Date & Time
    					<input type="text" name="eactdate" placeholder="Date & Time" value="<?php echo $row[5]; ?>" required />
    				</td></tr>
                    <tr><td>
                    	Payment Fees
    					<input type="text" name="eactpay" placeholder="Fees" value="<?php echo $row[6]; ?>" required />
    				</td></tr>
    				<tr><td>
                    	Activity Description
    					<textarea name="eactdesc" placeholder="Activity Description..." required="required"><?php echo $row[7]; ?>
                        </textarea>
    				</td></tr>
    				<tr><td>
    					<button type="submit" name="epostact">Update Activity</button>
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