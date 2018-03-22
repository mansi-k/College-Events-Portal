
<?php  session_start();
    include 'dbconnect.php';
	if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}

if((isset($_POST['btn-login'])))
{
	$name     = $_POST['name'];
    $login_id = $_POST['email_id'];
    $password = $_POST['pass'];
	$branch	  = $_POST['branch'];
	$mobno	  = $_POST['mobno'];
	$gender   = $_POST['gender'];
	if($gender=="male")
	{$images_path="images/teacher_dp/male.jpg";
	}
	else{
	$images_path="images/teacher_dp/female.jpg";
	}
    $result = mysqli_num_rows(mysqli_query($bd,"SELECT * FROM teacher WHERE login_id = '$login_id'"));

    if($result == 1)
    {?>
    <script>alert("The username you have chosen already exists!");</script>
    <?php
    }
    else
    {
        $ab=mysqli_query($bd,"INSERT INTO teacher(id,login_id,full_name,password,gender, branch, mobile_no, authority, event_auth,images_path,submission_date) VALUES (NULL,'$login_id','$name','$password','$gender','$branch',$mobno,'','','$images_path','')");
		if(!$ab){echo mysqli_error($bd);}
		?>
        <script>alert("Successfully Registered");
        window.location.href='teachermyprofile.php';</script>
        <?php
    }
}
?>   
   
<?php 
	  include 'header.php';
      include 'validation.php';
      include 'teachersidenavbar.php'; ?>
<div class="col-sm-9">  
<div class="main" id="myprofile">
	<center>
		<h1>Register As Teacher</h1>
		<div class="login-form" >
   		<form method="post">
        <table class="loggedin" align="center"  width="40%" border="0">
                	<tr>
						<td><input type="text" name="name" placeholder="Full Name" required /></td>
					</tr>
					<tr>
						<td><input type="text" name="email_id" placeholder="Your College Email ID" required/></td>
					</tr>
                    <tr>
                        <td><input type="password" name="pass" placeholder="Your Password" required/></td>
                     </tr>
                     <tr>
                     <td>	<input type="radio" name="gender" value="male"><center> Male</center>
						<input type="radio" name="gender" value="female" checked><center> Female</center></td>
                     </tr>
                     <tr>
                        <td><select class="logincat" name="branch" required>
                            <option value="branch" disabled="disabled" selected="selected" >Branch</option>
                            <option value="co">CO</option>
      						<option value="cm">CM</option>
                            <option value="ie">IE</option>
      						<option value="ev">EV</option>
                            <option value="et">ET</option>
      						</select>     
						</td>
                    </tr>
                    <tr>
                    <td><input type="text" name="mobno" placeholder="Your Mobile No"></td>
                    </tr>
                    <tr>
					
						<td><button type="submit" name="btn-login">Register</button></td>
					</tr>                                        

        </table>
		</form>
		</div>
	</center>
</div>
</div>
</div>

<?php include 'footer.php'; ?>

