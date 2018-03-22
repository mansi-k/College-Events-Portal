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

if($_SESSION['branch']=="co"||$_SESSION['branch']=="cm")
{
	$actbranch="computer";
}
else if($_SESSION['branch']=="ej"||$_SESSION['branch']=="et")
{
	$actbranch="electronic";
}

if((isset($_POST['btn_post'])))
{
	if($_POST['reciever']=="post")
	{
		?>
       	<script>alert('Select the reciever!');</script> 
     	<?php
	}
	else
	{
		$reciever = $_POST['reciever'];
		$message = $_POST['msg'];
		if(strlen($message)<=500)
		{
			if($reciever=="all_participating_students")
			{
				$sql_query=mysqli_query($bd,"INSERT INTO `post_message` (`id`, `sender`, `reciever`, reply_to, to_students, `message`, `date`) VALUES (NULL, '$login_id', '$event_auth', '', '$reciever', '$message', CURDATE())");
			}
			else if($reciever=="unpaid_participating_students")
			{
				$sql_query=mysqli_query($bd,"INSERT INTO `post_message` (`id`, `sender`, `reciever`, reply_to, to_students, `message`, `date`) VALUES (NULL, '$login_id', '$event_auth', '', '$reciever', '$message', CURDATE())");
			}
			else
			{
				$sql_query=mysqli_query($bd,"INSERT INTO `post_message` (`id`, `sender`, `reciever`, reply_to, to_students, `message`, `date`) VALUES (NULL, '$login_id', '$reciever', '', '', '$message', CURDATE())");
			}
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
        	<script>alert('Message limit is only 500 characters!');</script> 
       		<?php
		}
	}
}

if((isset($_POST['btn_delete'])))
{
	$messageid=$_POST['btn_delete'];
	$sql_query=mysqli_query($bd,"DELETE FROM post_message WHERE sender='$login_id' AND id='$messageid'");
	if($sql_query)
	{
		?>
       	<script>alert('Successfully deleted!');</script> 
     	<?php
	}
	else
	{
		?>
       	<script>alert('Could not delete!');</script> 
       	<?php
	}
}

if((isset($_POST['btn_reply'])))
{
	$rep_id=$_POST['btn_reply'];
	$message=$_POST['msgrep'];
	$login_id=$_SESSION['login_id'];
	$query="SELECT * FROM post_message WHERE id='$rep_id'";
	$res=mysqli_query($bd,$query);
	if(mysqli_num_rows($res)>0)
	{
		$row=mysqli_fetch_assoc($res);
		$reply_to=$row['sender'];
		$reciever=$row['reciever'];
	}
	if(strlen($message)<=500)
	{
		$sql_query=mysqli_query($bd,"INSERT INTO `post_message` (`id`, `sender`, `reciever`, reply_to, to_students, `message`, `date`) VALUES (NULL, '$login_id', '$reciever', '$reply_to', '', '$message', CURDATE())");
		if($sql_query)
		{
			?>
        	<script>alert('Successfully replyed!');</script> 
       		<?php
		}
		else
		{
			?>
       		<script>alert('Could not reply!');</script> 
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

if((isset($_POST['btn_edit'])))
{
	$msg_id=$_POST['btn_edit'];
	$message=$_POST['msgedit'];
	$reciever=$event_auth;
	$sender=$login_id;
	if(strlen($message)<=500)
	{
		$sql_query=mysqli_query($bd,"UPDATE post_message SET message='$message' WHERE id='$msg_id' AND sender='$login_id'");
		if($sql_query)
		{
			?>
        	<script>alert('Successfully posted!');</script> 
       		<?php
		}
		else
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

?>


<?php include 'header.php';
      include 'validation.php'; 
      include 'studentsidenavbar.php'; ?> 
<div class="col-sm-9" id"postmsg">
<div class="main" id="logindiv">
	<center>
    <h1>Post New Message</h1>
		<h3>To communicate with the event heads for your requests and suggestions, just post your message on thier profile!</h3>
        <b>* Message limit is only 500 characters!</b>
		<div class="login-form" >
			<form method="post">
				<table class="loggedin" align="center" width="70%" border="0">
					<tr>
						<td>
                        	<select class="recievers" name="reciever" required="required">
                            <option value="post">Post This Message To</option>
                            <option value="admin">Website Admin</option>
                            <?php
							if($event_auth!=NULL)
							{?>
                            	<option value="all_participating_students">All Students Participating In <?php echo $event_auth ?></option>
                                <option value="unpaid_participating_students">Unpaid Students Participating In <?php echo $event_auth ?></option>
                            <?php
							}
							if($actbranch=="computer")
							{?>
                            	<option value="computer_activity">Computer Activity Head</option>
                            <?php
							}
                            else if($actbranch=="electronic")
							{?>
                            	<option value="electronic_activity">Electronic Activity Head</option>
                            <?php
							}?>
                            <option value="all_activity">Common Activity Head</option>
      						<option value="sphurti">Sphurti Event Heads</option>
                            <option value="surbhi">Surbhi Event Heads</option>
      						<option value="sanskriti">Sanskriti Event Heads</option>
      						<option value="cricket">Cricket Event Heads</option>
                            <option value="football">Football Event Heads</option>
                            <option value="carrom">Carrom Event Heads</option>
                            <option value="talent_hunt">Talent-Hunt Event Heads</option>
                            <option value="code_it">Code-it Event Heads</option>
                            <option value="counter_strike">Counter-Strike Event Heads</option>
    						</select>
                        </td>
					</tr>
					<tr>
						<td><textarea name="msg" placeholder="Your Message..." required="required"></textarea></td>
					</tr>
					<tr>
						<td><button type="submit" name="btn_post">Post Message</button></td>
					</tr>
				</table>
			</form>
		</div>
	</center>
    <br /><br />
    <hr /><br />
    <h1>Your Messages...</h1>
    <br /><br />
    <?php
	include_once 'dbconnect.php';
	$login_id=$_SESSION['login_id'];
	$sqlqry=array();
	$q=0;
	$sql_query="SELECT * FROM post_message ORDER BY id DESC LIMIT 20";
	$result_set=mysqli_query($bd,$sql_query);
	if(mysqli_num_rows($result_set)>0)
	{
		while($row=mysqli_fetch_assoc($result_set))
		{
			if($row['to_students']=="all_participating_students")
			{
				$event=$row['reciever'];
				$result=mysqli_query($bd,"SELECT * FROM $event WHERE stud_id='$login_id'");
				$reswp=mysqli_query($bd,"SELECT * FROM workshop_part WHERE stud_id='$login_id' AND act_name='$event'");
				$ressp=mysqli_query($bd,"SELECT * FROM seminar_part WHERE stud_id='$login_id' AND act_name='$event'");
				$respp=mysqli_query($bd,"SELECT * FROM presentation_part WHERE stud_id='$login_id' AND act_name='$event'");
				$rescp=mysqli_query($bd,"SELECT * FROM competition_part WHERE stud_id='$login_id' AND act_name='$event'");
				if($result!=NULL)
					$sqlqry[$q]=$result;
				else if(mysqli_num_rows($ressp)>0)
					$sqlqry[$q]=$ressp;
				else if(mysqli_num_rows($respp)>0)
					$sqlqry[$q]=$respp;
				else if(mysqli_num_rows($rescp)>0)
					$sqlqry[$q]=$rescp;
				else if(mysqli_num_rows($reswp)>0)
					$sqlqry[$q]=$reswp;
			if(isset($sqlqry[$q]))
			{
				if((mysqli_num_rows($sqlqry[$q])>0||$row['sender']==$login_id||$row['reciever']==$event_auth))
				{?>
                	<div class="comments" id="<?php echo $row['id']; ?>" width="70%">
					<div class="titles">
                    	<span class="title">From:</span> &nbsp <?php echo $row['sender']; ?><br />
                    	<span class="title">To:</span> &nbsp Students participating in <?php echo $row['reciever']; ?><br />
                    	<span class="title">Date:</span> &nbsp <?php echo $row['date']; ?><br />
                    	<span class="title">Message:</span> &nbsp <br />
                	</div>
					<div class="msg">
						<?php echo $row['message']; ?><br /><br />
                	</div>
            		<form method="post">
            			<div class="delrep" style="float:right">
                    		<?php
                    		if($row['sender']==$login_id)
							{
								include 'editdelmsg.php';
                        	} 
							else if($row['reciever']==$event_auth)
							{
								include 'replymsg.php';
                       	 	}?>
            			</div><br />
               		</form>
                    </div><br /><br />
				<?php    
				}
			}
			}
			else if($row['to_students']=="unpaid_participating_students")
			{
				$event=$row['reciever'];
				$result=mysqli_query($bd,"SELECT * FROM $event WHERE stud_id='$login_id' AND paid='no'");
				$reswp=mysqli_query($bd,"SELECT * FROM workshop_part WHERE stud_id='$login_id' AND act_name='$event' AND paid='no'");
				$ressp=mysqli_query($bd,"SELECT * FROM seminar_part WHERE stud_id='$login_id' AND act_name='$event' AND paid='no'");
				$respp=mysqli_query($bd,"SELECT * FROM presentation_part WHERE stud_id='$login_id' AND act_name='$event' AND paid='no'");
				$rescp=mysqli_query($bd,"SELECT * FROM competition_part WHERE stud_id='$login_id' AND act_name='$event' AND paid='no'");
				if($result)
					$sqlqry[$q]=$result;
				else if(mysqli_num_rows($reswp)>0)
					$sqlqry[$q]=$reswp;
				else if(mysqli_num_rows($ressp)>0)
					$sqlqry[$q]=$ressp;
				else if(mysqli_num_rows($respp)>0)
					$sqlqry[$q]=$respp;
				else if(mysqli_num_rows($rescp)>0)
					$sqlqry[$q]=$rescp;
			if(isset($sqlqry[$q]))
			{
				if(mysqli_num_rows($sqlqry[$q])>0||$row['sender']==$login_id||$row['reciever']==$event_auth)
				{?>
                	<div class="comments" id="<?php echo $row['id']; ?>" width="70%">
					<div class="titles">
                    	<span class="title">From:</span> &nbsp <?php echo $row['sender']; ?><br />
                    	<span class="title">To:</span> &nbsp Students participating in <?php echo $row['reciever']; ?> (not paid)<br />
                    	<span class="title">Date:</span> &nbsp <?php echo $row['date']; ?><br />
                    	<span class="title">Message:</span> &nbsp <br />
                	</div>
					<div class="msg">
						<?php echo $row['message']; ?><br /><br />
                	</div>
            		<form method="post">
            			<div class="delrep" style="float:right">
                    		<?php
                    		if($row['sender']==$login_id)
							{
								include 'editdelmsg.php';
                        	} 
							else if($row['reciever']==$event_auth)
							{
								include 'replymsg.php';
                       	 	}?>
            			</div><br />
               		</form>
                    </div><br /><br />
				<?php    
				}
			}
			}
			else if($row['sender']==$login_id||($event_auth!=NULL && $row['reciever']==$event_auth)||$row['reply_to']==$login_id||($authority!=NULL && $row['reciever']==$authority))
			{?>
            	<div class="comments" id="<?php echo $row['id']; ?>" width="70%">
				<div class="titles">
                	<span class="title">From:</span> &nbsp <?php echo $row['sender']; ?><br />
                    <?php
                    if($row['reply_to']!=NULL)
                    {?>
                    	<span class="title">Reply-to:</span> &nbsp <?php echo $row['reply_to']; ?><br />
                    <?php
                    }
					else if($row['reciever']=="admin"||$row['reciever']=="$authority")
					{?>
						<span class="title">To:</span> &nbsp <?php echo $row['reciever']; ?><br />	
                    <?php
					}
					else
					{?>
                    	<span class="title">To:</span> &nbsp <?php echo $row['reciever']; ?> heads<br />
                    <?php
					}?>
					<span class="title">Date:</span> &nbsp <?php echo $row['date']; ?><br />
            		<span class="title">Message:</span> &nbsp <br />
                </div>
                <div class="msg">
					<?php echo $row['message']; ?><br /><br />
                </div>
            	<form method="post">
            		<div class="delrep" style="float:right">
                    	<?php
                    	if($row['sender']==$login_id)
						{
							include 'editdelmsg.php';
                        } 
						else
						{
							include 'replymsg.php';
                        }?>
            		</div><br />
                </form>
                </div><br /><br />
            <?php  
			}
            else
            {?>
 
            <?php    
            }
			$q++;
		 }
	}?>
</div>
</div>
</div>
<?php include 'footer.php'; ?>
