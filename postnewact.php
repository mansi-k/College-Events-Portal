<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
?>

<?php include 'validation.php';
	  include 'header.php';
      include 'teachersidenavbar.php'; ?>
<div class="col-sm-9"> 
<div class="main" id="logindiv">
	<center>
		<h1>Post A New Activity</h1><br />
        <b>* Please fill all the details before posting!</b>
        <br /><br /><br />
		<?php include 'act_post.php'; ?>
	
    </center>
</div>
</div>
</div>
<?php include 'footer.php'; ?>