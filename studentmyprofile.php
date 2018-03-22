<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
include_once 'dbconnect.php';

$res=mysqli_query($bd,"SELECT * FROM student WHERE id=".$_SESSION['user']);
while($userrow=mysqli_fetch_array($res))
{
	$_SESSION['login_id']=$userrow['login_id'];
	$_SESSION['full_name']=$userrow['full_name'];
	$_SESSION['mobile_no']=$userrow['mobile_no'];
	$_SESSION['year']=$userrow['year'];
	$_SESSION['authority']=$userrow['authority'];
	$_SESSION['branch']=$userrow['branch'];
	$_SESSION['event_auth']=$userrow['event_auth'];
	$_SESSION['profilepic']=$userrow['images_path'];
	$_SESSION['gender']=$userrow['gender'];
}

if($_SESSION['branch']=="co"||$_SESSION['branch']=="cm")
{
	$actbranch="computer";
}
else if($_SESSION['branch']=="ej"||$_SESSION['branch']=="et")
{
	$actbranch="electronic";
}
?>

<?php include 'header.php'; 
      include 'validation.php';
      include 'studentsidenavbar.php'; ?>
<div class="col-sm-9"> 
	<div class="main" id="myprofile">
    <center>
		<h1>Welcome To Your Profile!</h1> <br>
        <div class="cinfo" >
        	<a class="fancybox img-responsive" rel="group" href=<?php echo $_SESSION['profilepic']; ?> title="<?php echo $_SESSION['full_name'];?>"><img src="<?php echo $_SESSION['profilepic']?>" width="60%" height="60%"  alt="<?php echo $_SESSION['profilepic']; ?>" style="border:5px solid #333333;" /></a><br /><br>
            <h3>Name</h3><?php echo $_SESSION['full_name'];?><br /><br>
            <h3>Email ID</h3><?php echo $_SESSION['login_id'];?><br /><br>
            <h3>Branch</h3></h3><font style="text-transform:uppercase;">
				<?php echo $_SESSION['branch'];?></font><br /><br>
            <h3>Year</h3><?php echo $_SESSION['year'];?><br /><br>
            <h3>Mobile No.</h3><?php echo $_SESSION['mobile_no'];?><br /><br>
            <?php
			if($_SESSION['authority']!=null && $_SESSION['event_auth']!=null)
			{?>
            	<h3>Authority</h3><font style="text-transform:capitalize;">
				<?php echo $_SESSION['event_auth']." ".$_SESSION['authority'];?></font><br /><br>
            <?php
		 	}?>
        </div>
    </center>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>
		