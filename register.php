<?php session_start();
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}

	  include_once 'dbconnect.php';
	  include 'header.php';
      include 'validation.php';
      include 'teachersidenavbar.php'; ?>
<div class="col-sm-9">  
<div class="main" id="myprofile">

	<center>
		<h1>Register New User As...</h1>
		<div class="login-form" >
        <table align="center"  width="40%" border="0" class="loggedin">
                	<tr>
						<td>
            				<select onchange="this.options[this.selectedIndex].value && (window.location =this.options[this.selectedIndex].value);" class="logincat" name="regcat" required>
                            <option value="category" disabled="disabled" selected="selected" >Category</option>
                            <option  value="studentreg.php">Student</option>
      						<option  value="teacherreg.php" >Teacher</option>
      						</select>            
                        </td>
					</tr>
  

        </table>
		</div>
	</center>
</div>
</div>
</div>
<?php include 'footer.php'; ?>