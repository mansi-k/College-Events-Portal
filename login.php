<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	if($_SESSION['category']=="teacher")
		header("Location: teachermyprofile.php");
	else if($_SESSION['category']=="student")
		header("Location: studentmyprofile.php");
}

if((isset($_POST['btn-login'])))
{
	$_SESSION['category'] = $_POST['logincat'];
	$login_id = $_POST['email'];
	$password = $_POST['pass'];
	if($_POST['logincat']=="teacher")
	{
		$res=mysqli_query($bd,"SELECT * FROM teacher WHERE login_id='$login_id' and password='$password'");
		$row=mysqli_fetch_array($res);
		if($row['password'] == $password)
		{
			$_SESSION['user'] = $row['id'];
			header("Location: teachermyprofile.php");
		}
	}
	else if($_POST['logincat']=="student")
	{
		$res=mysqli_query($bd,"SELECT * FROM student WHERE login_id='$login_id' and password='$password'");
		$row=mysqli_fetch_array($res);
		if($row['password'] == $password)
		{
			$_SESSION['user'] = $row['id'];
			header("Location: studentmyprofile.php");
		}
	}
	else if($_POST['logincat']=="category")
	{
		?>
        <script>alert('Select a Login Category');</script> 
       	<?php
	}
	if((!isset($_SESSION['user']))&&$_POST['logincat']!="category")
	{
	?>
    <script>alert('Wrong Details');</script> 
   	<?php
	}
}

?>


<?php include 'validation.php';
	  include 'header.php';
      include 'homesidenavbar.php'; ?>
<div class="col-sm-9"> 
<div class="main" id="logindiv">
	<center>
		<h1>Login</h1>
		<div class="login-form" >
			<form method="post">
				<table class="loggedin" style="padding:35px;">
                	<tr>
						<td>
            				<select class="logincat" name="logincat" required="required">
                            <option value="category">Category</option>
                            <option value="student">Student</option>
      						<option value="teacher" >Teacher</option>
      						</select>            
                        </td>
					</tr>
					<tr>
						<td><input type="text" name="email" placeholder="Your Email" required /></td>
					</tr>
					<tr>
						<td><input type="password" name="pass" placeholder="Your Password" required/></td>
					</tr>
					<tr>
						<td><button type="submit" name="btn-login">Log In</button></td>
					</tr>
				</table>
			</form>
		</div>
	</center>
</div>
</div>
</div>
<?php include 'footer.php'; ?>