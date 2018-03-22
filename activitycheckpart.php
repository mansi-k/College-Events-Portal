<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
include 'header.php';
include 'validation.php';
include 'teachersidenavbar.php';  
?>
<div class="col-sm-9">
<div class="main" id="logindiv">
	<center>
		<h1>Check Participation As...</h1>
		<div class="login-form" >
        	<form method="get">
           	 	<table align="center"  width="40%" border="0" class="loggedin">
            		<tr>
						<td>
            				<select onchange="this.options[this.selectedIndex].value && (window.location =this.options[this.selectedIndex].value);" class="logincat" name="aptype" required>
                            <option value="category" disabled="disabled" selected="selected" >Activity Type</option>
                            <option  value="checkactnamepart.php?type=workshop">Workshop</option>
      						<option  value="checkactnamepart.php?type=seminar">Seminar</option>
                            <option  value="checkactnamepart.php?type=presentation">Presentation</option>
                            <option  value="checkactnamepart.php?type=competition">Competition</option>
      						</select>            
                        </td>
					</tr>
			</table>
            </form>
		</div>
	</center>
</div>
</div>
</div>
<?php include 'footer.php';?>
