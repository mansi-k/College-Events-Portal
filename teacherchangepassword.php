<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}

if(isset($_SESSION['user']))
{
	if(isset($_POST['changepass']))
	{
		$oldpass = $_POST['oldpassword'];
		$newpass = $_POST['newpassword'];
		$cfnewpass = $_POST['confirmnewpassword'];
		
		if($newpass==$cfnewpass)
		{
			if(strlen($newpass)>=6)
			{
				$sql_query_old = mysql_query("SELECT password FROM teacher WHERE id=".$_SESSION['user']);
				$old=mysql_fetch_array($sql_query_old);
				if($old['password']== $oldpass)
				{
					$sql_query_up = "UPDATE teacher SET password='$newpass' WHERE id=".$_SESSION['user']." and password='$oldpass'";
					if(mysql_query($sql_query_up))
					{
						?>
						<script type="text/javascript">
						alert('Data Are Updated Successfully');
						window.location.href='teachermyprofile.php';
						</script>
						<?php
					}
					else
					{
						?>
						<script type="text/javascript">
						alert('error occured while updating data');
						</script>
						<?php
					}
				}
				else
				{
					?>
					<script type="text/javascript">
					alert('old password does not match');
					</script>
					<?php
				}
			}
			else
			{
				?>
				<script type="text/javascript">
				alert('Minimum password length is 6 characters!');
				</script>
				<?php
			}
		}
		else
		{
			?>
			<script type="text/javascript">
			alert('Passwords do not match!');
			</script>
			<?php
		}
	}
}
?>

<?php include 'header.php'; 
      include 'validation.php'; 
      include 'teachersidenavbar.php'; ?>
<div class="col-sm-9">  
<div class="main" id="logindiv">
	<center>
    <h1>Change Your Password</h1>
		<h3>Fill the following form to change your password!</h3>
		<div class="login-form">
			<form method="post">
				<table class="loggedin" align="center" width="40%" border="0">
					<tr>
						<td><input type="password" name="oldpassword" placeholder="Your Old Password" required /></td>
					</tr>
					<tr>
						<td><input type="password" name="newpassword" placeholder="Your New Password" required/></td>
					</tr>
                    <tr>
						<td><input type="password" name="confirmnewpassword" placeholder="Confirm New Password" required/></td>
					</tr>
					<tr>
						<td><button type="submit" name="changepass">Change Password</button></td>
					</tr>
				</table>
			</form>
		</div>
	</center>
</div>
</div>
</div>
<?php include 'footer.php'; ?>
