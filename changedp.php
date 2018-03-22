<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}

if(isset($_SESSION['user']))
{	
	if(isset($_POST['UploadNow']))
	{    function GetImageExtension($imagetype)
   	 	{
       	if(empty($imagetype)) return false;
       	switch($imagetype)
       	{
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       	}
     	}
		if (!empty($_FILES["uploadedimage"]["name"]))
 		{
		$file_size=$_FILES["uploadedimage"]["size"];
		$file_name=$_FILES["uploadedimage"]["name"];
		$temp_name=$_FILES["uploadedimage"]["tmp_name"];
		$imgtype=$_FILES["uploadedimage"]["type"];
		$ext= GetImageExtension($imgtype);
		$imagename=date("d-m-Y")."-".time().$ext;
		$target_path = "images/student_dp/".$imagename;
		$oldtargetpath = $_SESSION['profilepic'];
		$date=date("y-m-d");

			if(move_uploaded_file($temp_name, $target_path))
	 		{
				 if(($oldtargetpath!="images/student_dp/male.jpg") && ($oldtargetpath!="images/student_dp/female.jpg")){
				unlink($oldtargetpath);
				}
 			$query_upload="UPDATE student SET images_path='$target_path',submission_date='$date' WHERE id=".$_SESSION['user'];
			mysqli_query($bd,$query_upload) or die("error in $query_upload == ----> ".mysqli_error($bd));?>
    
			<script type="text/javascript">
			alert('Data Are Updated Successfully');
			window.location.href='studentmyprofile.php';
			</script>
     		<?php  
	 		}
			else
	 		{?>

			<script type="text/javascript">
			alert('Data Are Not Updated');
			window.location.href='studentmyprofile.php';
			</script>
    		 <?php
			} 

		}
		
	}
	if(isset($_POST['remove']))
{$oldtargetpath = $_SESSION['profilepic'];
$gender=$_SESSION['gender'];
	if($gender=="male"){
	$query_remove="UPDATE student SET images_path='images/student_dp/male.jpg' WHERE id=".$_SESSION['user'];
			mysqli_query($bd,$query_remove) or die("error in $query_remove == ----> ".mysqli_error($bd));}
	else if($gender=="female"){
	$query_remove="UPDATE student SET images_path='images/student_dp/female.jpg' WHERE id=".$_SESSION['user'];
			mysqli_query($bd,$query_remove) or die("error in $query_remove == ----> ".mysqli_error($bd));}		
    		 if(($oldtargetpath!="images/student_dp/male.jpg") && ($oldtargetpath!="images/student_dp/female.jpg")){
				unlink($oldtargetpath);
				}?>

			<script type="text/javascript">
			alert('Profile Picture removed successfully');
			window.location.href='studentmyprofile.php';
			</script>
    		 <?php

	}
}
?>



<?php include 'header.php'; 
      include 'validation.php';
      include 'studentsidenavbar.php'; ?>
      <div class="col-sm-9"> 
<div class="main" >
<h1><center>Change Profile Picture</center></h1><br />
<table style="margin:auto" class="festtable">
<tr>
	<th width="200px" height="200px"> Current Profile Picture</th>
    <td><img src="<?php echo $_SESSION['profilepic']?>" width="100" height="100" alt="No Profile Picture" /><form enctype="multipart/form-data" method="post">
    <input name="remove"  class="btn btn-warning" type="submit" value="Remove" <?php $targetpath=$_SESSION['profilepic'] ;if($targetpath=="images/student_dp/male.jpg" ||$targetpath=="images/student_dp/female.jpg"){ ?> disabled="disabled" title="Cannot Remove"<?php }else{?> title="Remove"<?php }?>style="margin-top:10px" /></td>
</tr>
<tr>
	<th>*New Profile Pic</th>
    <td >	 
	<table>
	<tbody><tr>
	<td height="50px"><input class="btn btn-warning"  name="uploadedimage" type="file">
	</td>
	</tr>
	<tr><td>
	<input name="UploadNow"  class="btn btn-warning" type="submit" value="Upload Image">
	</td>
    <td>
    <sub>*Select image less than 3mb</sub>
    </td>
	</tr>
	</tbody></table>
	</form>
 
</td>
</tr>
</table></div>
</div>
</div>

<?php include 'footer.php'; ?>


 
