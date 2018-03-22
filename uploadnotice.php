<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$event_auth=$_SESSION['event_auth'];
if((isset($_POST['remove'])))
{	$id=$_POST['remove'];
	$res1=mysqli_query($bd,"SELECT file FROM tbl_uploads WHERE id=$id");
	$row1=mysqli_fetch_array($res1);
	mysqli_query($bd,"DELETE FROM tbl_uploads WHERE id=$id");
	unlink("images/uploads/".$row1['file']);
}
?>

<?php include 'header.php';
      include 'validation.php';
      include 'teachersidenavbar.php'; ?>
<div class="col-sm-9">  
<div class="main" id="myprofile">
<h1>Upload Notices</h1> 
<br />
<form action="upload.php" method="post" enctype="multipart/form-data">
	<center>
    <div class="table-responsive">
    <table class="headtable">
    <tr>
    <th>Description</th>
    <th>File</th>
    <th>Upload</th>
    </tr>
    <tr>
    <td>
	<input type="text" name="info"></td>
    <td>
	<input type="file" name="file" class="btn btn-warning" />
    </td>
    <td>
	<button name="btn-upload" type="submit" class="btn btn-warning">Upload</button></td>
    </tr>
    </table></div></center>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <center><label>File Uploaded Successfully...  <a href="notices.php">click here to view file.</a></label></center>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <center><label>Problem While File Uploading !</label></center>
        <?php
	}
	else
	{
		?>
        <center><label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label></center>
        <?php
	}
	?>
    <br /><br />
    <h1>Delete Notices</h1><br />
    <center>	
    <div class="table-responsive">
    <table class="headtable">
    <tr>
    <th>No</th>
    <th>File Info</th>
    <th>File Size(KB)</th>
    <th>Delete</th>
    </tr>
    <?php
	$no=1;
	$sql="SELECT * FROM tbl_uploads";
	$result_set=mysqli_query($bd,$sql);
	if(mysqli_num_rows($result_set)){
	while($row=mysqli_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $row['info'] ?></td>
        <td><?php echo $row['size'] ?></td><form method="post">
        <td><button type="submit" name="remove" class="btn btn-warning" value="<?php echo $row['id'] ?>">Remove</button></td></form>
        </tr>
        <?php
	}}
	else{
	?>
    <tr>
    <td colspan="4"><center>Nothing to display!!Will Be updating soon!!</center></td>
    </tr>
    <?php } 
	

?>
    </table></div>
</center>    

</div>
</div>
</div>
<?php include 'footer.php'; ?>