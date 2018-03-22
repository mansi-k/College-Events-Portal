<?php 
include_once 'dbconnect.php';
if((isset($_POST['postact'])))
{
	if($_POST['acttype']!="act_type" && $_POST['branch']!="branchname" && $_POST['actyear']!="actyr")
	{
		$acttype=$_POST['acttype'];
		$actname=$_POST['actname'];
		$author=$_POST['author'];
		$actbranch=$_POST['branch'];
		$actyr=$_POST['actyear'];
		$actdate=$_POST['actdate'];
		$actfee=$_POST['actpay'];
		$actdesc=$_POST['actdesc'];
		
		$sql_query=mysqli_query($bd,"INSERT INTO `$acttype` (`id`, `name`, `author`, branch, year, date_time, fees, description) VALUES (NULL, '$actname', '$author', '$actbranch', '$actyr', '$actdate', '$actfee', '$actdesc')");
		if($sql_query)
		{
			?>
       		<script>alert('Successfully posted!');</script> 
     		<?php
		}
		else if(!$sql_query)
		{
			?>
       		<script>alert('Could not post!');</script> 
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

<form method="post">
<table class="loggedin" align="center" width="70%" border="0">
	<tr><td>
    	<select class="recievers" name="acttype" required="required">
        	<option value="act_type">Activity Type</option>
            <option value="workshop">Workshop</option>
            <option value="seminar">Seminar</option>
            <option value="presentation">Presentation</option>
            <option value="competition">Competition</option>
        </select>
    </td></tr>
	<tr><td>
    	<input type="text" name="actname" placeholder="Activity Name" required />
    </td></tr>
    <tr><td>
    	<input type="text" name="author" placeholder="Conducted By" required />
    </td></tr>
    <tr><td>
    	<select class="recievers" name="branch" required="required">
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
    	<select class="recievers" name="actyear" required="required">
        	<option value="actyr">Select Year</option>
        	<option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="all">All</option>
        </select>
    </td></tr>
    <tr><td>
    	<input type="text" name="actdate" placeholder="Date & Time" required />
    </td></tr>
    <tr><td>
    	<input type="text" name="actpay" placeholder="Payment (Rs)" required />
    </td></tr>
    <tr><td>
    	<textarea name="actdesc" placeholder="Activity Description..." required="required"></textarea>
    </td></tr>
    <tr><td>
    	<button type="submit" name="postact">Post Activity</button>
    </td></tr>
</table>
</form>
               