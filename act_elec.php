<?php 
$act=$_GET['act'];

include_once 'dbconnect.php';
include 'header.php';
include 'validation.php';
include 'act_navbar.php'; ?>

<link href="Photo Gallery/css/style.css" rel="stylesheet" type="text/css">
<div class="col-sm-9">
	<div class="main" id="myprofile">
		<h1>Electronic <?php echo $act."s";?></h1>
        <br />
        <?php
        $sql_query=mysqli_query($bd,"SELECT * FROM $act WHERE branch='electronic' OR branch='ej' OR branch='et' ORDER BY id DESC");
		if(mysqli_num_rows($sql_query)>0)
				{
					while($row=mysqli_fetch_row($sql_query))
					{?>
                    	<h2><?php echo $row[1]; ?></h2>
                    	<div id="<?php echo $row[0]; ?>" class="comments" width="70%">
						<div class="titles">
                		<span class="title">Name:</span> &nbsp <?php echo $row[1]; ?><br />
                        <span class="title">Contucted By:</span> &nbsp <?php echo $row[2]; ?><br />
                        <span class="title">Branch:</span> &nbsp <?php echo $row[3]; ?><br />
                        <span class="title">Year:</span> &nbsp <?php echo $row[4]; ?><br />
                        <span class="title">Date & Time:</span> &nbsp <?php echo $row[5]; ?><br />
                        <span class="title">Fees:</span> &nbsp <?php echo $row[6]; ?><br />
                        <span class="title">Details:</span> &nbsp <?php echo $row[7]; ?><br />
                        </div>
                        </div>
                        <br /><br />
                     <?php
					 }
                }?>
    </div>
</div>
</div>
<?php include("footer.php"); ?>



