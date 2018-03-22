<?php 
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}

$actype=$_GET['type'];

if($_SESSION['branch']=="computer")
{
	$actbranch=$_SESSION['branch'];
	$ab1="co";
	$ab2="cm";
}
else if($_SESSION['branch']=="electronic")
{
	$actbranch=$_SESSION['branch'];
	$ab1="ej";
	$ab2="et";
}
else if($_SESSION['branch']=="all")
{
	$actbranch=$_SESSION['branch'];
	$ab1="all";
	$ab2="all";
}



include 'header.php';
include 'validation.php';
include 'teachersidenavbar.php';  
?>
<div class="col-sm-9">
<div class="main" id="logindiv">
	<center>
		<h1>List Of <?php echo $actype."s";?></h1><br />
        <?php
        $sql_query=mysqli_query($bd,"SELECT * FROM $actype WHERE branch='$actbranch' OR branch='$ab1' OR branch='$ab2'");
		?>
		<div class="table-responsive" >
        	<form method="get">
       	 	<table align="center"  width="40%" border="0" class="headtable">
                <tr><th>Sr. No</th>
                <th>Name</th>
            	<th>Author</th>
                <th>Branch</th>
            	<th>Year</th>
                <th>Fees (Rs)</th>
                <th>Details</th>
            	<th>Check</th>
                <th>Edit</th>
                <th>Message</th>
                <th>Delete</th></tr>
                <?php
                if(mysqli_num_rows($sql_query)>0)
				{
					$i=1;
					while($row=mysqli_fetch_row($sql_query))
					{?>
                    	<tr>
                        <td><?php echo $i; ?></td>
						<td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php echo $row[4]; ?></td>
                        <td><?php echo $row[6]; ?></td>
                        <td>
                        <?php
						if($actbranch=="all")
						{?>
                        <button type="button" class="btn btn-warning" name="bavw">
                        <a  name="bachk" href="act_common.php?act=<?php echo $actype; ?>#<?php echo $row[0]; ?>">
                        View</button>
                        <?php
						}
						else if($actbranch=="computer")
						{?>
                        <button type="button" class="btn btn-warning" name="bavw">
                        <a  name="bachk" href="act_comp.php?act=<?php echo $actype; ?>#<?php echo $row[0]; ?>">
                        View</button>
                        <?php
						}
						else if($actbranch=="electronic")
						{?>
                        <button type="button" class="btn btn-warning" name="bavw">
                        <a  name="bachk" href="act_elec.php?act=<?php echo $actype; ?>#<?php echo $row[0]; ?>">
                        View</button>
                        <?php
						}?>
                        </td>
                        <td><button type="button" class="btn btn-warning" name="bachk">
                        	<a  name="bachk" href="actnameparttable.php?aptb=<?php echo $actype."_part"; ?>&apnm=<?php echo $row[1]; ?>&apfee=<?php echo $row[6]; ?>">Check</a> </button></td>
                        <td><button type="button" class="btn btn-warning" name="baedt">
                        <a  name="baedt" href="editact.php?aptbl=<?php echo $actype; ?>&apnme=<?php echo $row[1]; ?>">Edit</a></button></td>
                        <td><button type="button" class="btn btn-warning" name="bamsg">
                        <a name="baedt" href="actheadmsg.php?aptbl=<?php echo $actype; ?>&apnme=<?php echo $row[1]; ?>&apfee=<?php echo $row[6]; ?>">Message</a></button></td>
                        </form>
                        <form method="post">
                        <td><button type="submit" class="btn btn-warning" name="badel" value="<?php echo $row[1]; ?>">Delete</button></td>
						</tr>
                    	<?php
						$i++;
					}
				}?>
                </table>
            </form>
		</div>
	</center>
</div>
</div>
</div>
<?php include 'footer.php';?>

<?php
if(isset($_POST['badel']))
{
	$aname=$_POST['badel'];
	$sql_query=mysqli_query($bd,"DELETE FROM $actype WHERE name='$aname'");
	if($sql_query)
	{
		?>
       		<script>alert('Successfully deleted!');
            window.location.href='checkactnamepart.php?type=<?php echo $actype; ?>';</script> 
     	<?php
	}
}