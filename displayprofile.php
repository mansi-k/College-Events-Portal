<?php
session_start();
include_once 'dbconnect.php';
$id1 = mysqli_real_escape_string($bd,$_GET['id']);
$tab = mysqli_real_escape_string($bd,$_GET['tab']);
$res=mysqli_query($bd,"SELECT * FROM $tab WHERE id= $id1");
if (!$res) {
    printf("Error: %s\n", mysqli_error($bd));
    exit();
}
while($userrow=mysqli_fetch_array($res))
{
	$_SESSION['login_id']=$userrow['login_id'];
	$_SESSION['full_name']=$userrow['full_name'];
	$_SESSION['mobile_no']=$userrow['mobile_no'];
	if($tab=="teacher")
		$_SESSION['class_tch']=$userrow['class_tch'];
	$_SESSION['authority']=$userrow['authority'];
	$_SESSION['branch']=$userrow['branch'];
	$_SESSION['event_auth']=$userrow['event_auth'];
	$_SESSION['profilepic']=$userrow['images_path'];
	$_SESSION['gender']=$userrow['gender'];
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
      include 'homesidenavbar.php'; ?>
<div class="col-sm-9">  
<div class="main" id="myprofile">
<center>
		<h1> Profile of <?php  echo $_SESSION['full_name'];  ?></h1> <br>
        <div class="cinfo" >
        	<a class="fancybox img-responsive" rel="group" href=<?php echo $_SESSION['profilepic']; ?> title="<?php echo $_SESSION['full_name'];?>"><img src="<?php echo $_SESSION['profilepic']?>" width="50%" height="40%"  alt="<?php echo $_SESSION['profilepic']; ?>" style="border:5px solid #333333;" /></a><br /><br>
            <h3>Name</h3><?php echo $_SESSION['full_name'];?><br /><br>
            <h3>Email ID</h3><?php echo $_SESSION['login_id'];?><br /><br>
            <h3>Mobile No.</h3><?php echo $_SESSION['mobile_no'];?><br /><br>
            <?php
			if($_SESSION['class_tch']!=null)
			{?>
            	<h3>Class Teacher</h3>
				<font style="text-transform:capitalize;"><?php echo $_SESSION['class_tch'];?></font><br /><br>
            <?php
		 	}?>
            <?php
			if(($_SESSION['authority']!=null && $_SESSION['event_auth']!=null) && $_SESSION['authority']!="activity_head")
			{?>
            	<h3>Authority</h3>
				<font style="text-transform:capitalize;"><?php echo $_SESSION['event_auth']." ".$_SESSION['authority'];?>
                </font><br /><br>
            <?php
		 	}
			else if(($_SESSION['authority']!=null && $_SESSION['branch']!=null) || $_SESSION['authority']=="activity_head")
			{?>
            	<h3>Authority</h3>
				<font style="text-transform: capitalize;"><?php echo $_SESSION['branch']." Dept ".$_SESSION['authority'];?>
                </font><br /><br>
            <?php
		 	}
            else if($_SESSION['authority']=="admin")
			{?>
            	<h3>Authority</h3>
				<font style="text-transform: capitalize;"><?php echo $_SESSION['authority'];?>
                </font><br /><br>
            <?php
		 	}?>
        </div>
    </center>
</div>
</div>
</div>
<?php include 'footer.php'; ?>