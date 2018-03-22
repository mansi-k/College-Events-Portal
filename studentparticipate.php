<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
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
		<h1>Participate In Various College Events!</h1><br />
		<center>
			<h2>Participate in Sphurti!</h2><br />
			<div class="eventtable table-responsive">
				<?php include 'sphurtitable.php'; ?>
			</div>
			<br /><br />
			<h2>Participate in Surabhi!</h2><br />
			<div class="eventtable table-responsive">
				<?php include 'surabhitable.php'; ?>
			</div><br /><br />
            <h2>Participate In Workshops!</h2><br />
            <div class="eventtable table-responsive">
				<?php include 'workshopparticipate.php'; ?>
			</div><br /><br />
            <h2>Participate In Seminars!</h2><br />
            <div class="eventtable table-responsive">
				<?php include 'seminarparticipate.php'; ?>
			</div><br /><br />
            <h2>Participate In Presentations!</h2><br />
            <div class="eventtable table-responsive">
				<?php include 'presentationparticipate.php'; ?>
			</div><br /><br />
            <h2>Participate In Competitions!</h2><br />
            <div class="eventtable table-responsive">
				<?php include 'competitionparticipate.php'; ?>
			</div><br /><br />
		</center>
	</div>
</div>
</div>
<?php include 'footer.php'; ?>


 
