<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}

$actname=$_GET['apnme'];
$tabname=$_GET['aptbl'];
$actfee=$_GET['apfee'];

	include 'validation.php';
	  include 'header.php';
      include 'teachersidenavbar.php'; ?>
<div class="col-sm-9"> 
<div class="main" id="logindiv">
	<center>
		<h1>Post A Message To <?php echo $actname;?> Participants</h1>
        <br /><br />
<form method="post">
        <table class="loggedin" align="center" width="100%" border="0">
            	<tr><td>
				<select class="recievers" name="reciever" required="required">
                	<option value="post">Post This Message To</option>
                	<option value="all_participating_students">All Participants</option>
                    <?php
			if($actfee!=0)
			{?>
                    <option value="unpaid_participating_students">Unpaid Participants</option>
                    <?php
			}?>
                </select>
                </td></tr>
            
      		<tr><td>
                <textarea id="reply" name="tamsg" placeholder="Your Message..." required="required"></textarea>
            </td></tr>
       		<tr><td>
                <button type="submit" name="bactmsg" value="<?php echo $actname;?>">Post Message</button>
            </td></tr>
        </table>
</form>
</div>
	</center>
</div>
</div>
</div>
<?php include 'footer.php';
if((isset($_POST['bactmsg'])))
{
	if($_POST['reciever']=="post")
	{
		?>
       	<script>alert('Select the reciever!');</script> 
     	<?php
	}
	else
	{
		$tostud = $_POST['reciever'];
		$message = $_POST['tamsg'];
		$reciever = $_POST['bactmsg'];
		$login_id=$_SESSION['login_id'];
		if(strlen($message)<=500)
		{
			if($tostud=="all_participating_students")
			{
				$sql_query=mysqli_query($bd,"INSERT INTO `post_message` (`id`, `sender`, `reciever`, reply_to, to_students, `message`, `date`) VALUES (NULL, '$login_id', '$reciever', '', '$tostud', '$message', CURDATE())");
			}
			else if($tostud=="unpaid_participating_students")
			{
				$sql_query=mysqli_query($bd,"INSERT INTO `post_message` (`id`, `sender`, `reciever`, reply_to, to_students, `message`, `date`) VALUES (NULL, '$login_id', '$reciever', '', '$tostud', '$message', CURDATE())");
			}
			if($sql_query)
			{
				?>
        		<script>alert('Successfully posted!');
                window.location.href='checkactnamepart.php?type=<?php echo $tabname; ?>';</script>
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
        	<script>alert('Message limit is only 500 characters!');</script> 
       		<?php
		}
	}
}
?>