<?php 
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}

if($_SESSION['branch']=="co")
{
	$ab1="co";
	$ab2="computer";
}
else if($_SESSION['branch']=="cm")
{
	$ab1="cm";
	$ab2="computer";
}
else if($_SESSION['branch']=="ej")
{
	$ab1="ej";
	$ab2="electronic";
}
else if($_SESSION['branch']=="et")
{
	$ab1="et";
	$ab2="electronic";
}



include 'header.php';
include 'validation.php';
include 'teachersidenavbar.php';  
?>
<div class="col-sm-9">
<div class="main" id="logindiv">
	<center>
    <h1><span style="text-transform: uppercase"><?php echo $ab1;?></span> Department Activities</h1>
		<br/><br/><h2>List Of Workshops</h2><br />
        <?php
        $sql_query=mysqli_query($bd,"SELECT * FROM workshop WHERE branch='$ab1' OR branch='$ab2' OR branch='all'");
		?>
		<div class="table-responsive" >
        	<form method="get">
       	 	<table align="center"  width="40%" border="0" class="headtable">
                <tr><th>Sr. No</th>
                <th>Name</th>
            	<th>Author</th>
                <th>Branch</th>
            	<th>Year</th>
                <th>Date & Time</th>
                <th>Fees (Rs)</th>
                <th>Details</th>
            	
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
                        <td><?php echo $row[5]; ?></td>
                        <td><?php echo $row[6]; ?></td>
                        <td>
                        <?php
						if($row[3]=="all")
						{?>
                        <button type="button" class="btn btn-warning" name="bavw">
                        <a  name="bachk" href="act_common.php?act=workshop#<?php echo $row[0]; ?>">
                        View</button>
                        <?php
						}
						else if($row[3]==$ab1 || $row[3]==$ab2)
						{
                        	if($ab2=="computer")
							{?>	
                                <button type="button" class="btn btn-warning" name="bavw">
                                <a  name="bachk" href="act_comp.php?act=workshop#<?php echo $row[0]; ?>">
                                View</button>
                        	<?php
							}
							if($ab2=="electronic")
							{?>	
                                <button type="button" class="btn btn-warning" name="bavw">
                                <a  name="bachk" href="act_elec.php?act=workshop#<?php echo $row[0]; ?>">
                                View</button>
                        	<?php
							}
						}?>
                        </td>
                     	</tr>
                    	<?php
						$i++;
					}
				}?>
            </table>
         </form>
     </div>
         
         <br/><br/><h2>List Of Seminars</h2><br />
        <?php
        $sql_query=mysqli_query($bd,"SELECT * FROM seminar WHERE branch='$ab1' OR branch='$ab2' OR branch='all'");
		?>
		<div class="table-responsive" >
        	<form method="get">
       	 	<table align="center"  width="40%" border="0" class="headtable">
                <tr><th>Sr. No</th>
                <th>Name</th>
            	<th>Author</th>
                <th>Branch</th>
            	<th>Year</th>
                <th>Date & Time</th>
                <th>Fees (Rs)</th>
                <th>Details</th>
            	
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
                        <td><?php echo $row[5]; ?></td>
                        <td><?php echo $row[6]; ?></td>
                        <td>
                        <?php
						if($row[3]=="all")
						{?>
                        <button type="button" class="btn btn-warning" name="bavw">
                        <a  name="bachk" href="act_common.php?act=seminar#<?php echo $row[0]; ?>">
                        View</button>
                        <?php
						}
						else if($row[3]==$ab1 || $row[3]==$ab2)
						{
                        	if($ab2=="computer")
							{?>	
                                <button type="button" class="btn btn-warning" name="bavw">
                                <a  name="bachk" href="act_comp.php?act=seminar#<?php echo $row[0]; ?>">
                                View</button>
                        	<?php
							}
							if($ab2=="electronic")
							{?>	
                                <button type="button" class="btn btn-warning" name="bavw">
                                <a  name="bachk" href="act_elec.php?act=seminar#<?php echo $row[0]; ?>">
                                View</button>
                        	<?php
							}
						}?>
                        </td>
                     	</tr>
                    	<?php
						$i++;
					}
				}?>
            </table>
         </form>
         </div>
         
         <br/><br/><h2>List Of Presentations</h2><br />
        <?php
        $sql_query=mysqli_query($bd,"SELECT * FROM presentation WHERE branch='$ab1' OR branch='$ab2' OR branch='all'");
		?>
		<div class="table-responsive" >
        	<form method="get">
       	 	<table align="center"  width="40%" border="0" class="headtable">
                <tr><th>Sr. No</th>
                <th>Name</th>
            	<th>Author</th>
                <th>Branch</th>
            	<th>Year</th>
                <th>Date & Time</th>
                <th>Fees (Rs)</th>
                <th>Details</th>
            	
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
                        <td><?php echo $row[5]; ?></td>
                        <td><?php echo $row[6]; ?></td>
                        <td>
                        <?php
						if($row[3]=="all")
						{?>
                        <button type="button" class="btn btn-warning" name="bavw">
                        <a  name="bachk" href="act_common.php?act=presentation#<?php echo $row[0]; ?>">
                        View</button>
                        <?php
						}
						else if($row[3]==$ab1 || $row[3]==$ab2)
						{
                        	if($ab2=="computer")
							{?>	
                                <button type="button" class="btn btn-warning" name="bavw">
                                <a  name="bachk" href="act_comp.php?act=presentation#<?php echo $row[0]; ?>">
                                View</button>
                        	<?php
							}
							if($ab2=="electronic")
							{?>	
                                <button type="button" class="btn btn-warning" name="bavw">
                                <a  name="bachk" href="act_elec.php?act=presentation#<?php echo $row[0]; ?>">
                                View</button>
                        	<?php
							}
						}?>
                        </td>
                     	</tr>
                    	<?php
						$i++;
					}
				}?>
            </table>
         </form>
         
         <br/><br/><h2>List Of Competitions</h2><br />
        <?php
        $sql_query=mysqli_query($bd,"SELECT * FROM competition WHERE branch='$ab1' OR branch='$ab2' OR branch='all'");
		?>
		<div class="table-responsive" >
        	<form method="get">
       	 	<table align="center"  width="40%" border="0" class="headtable">
                <tr><th>Sr. No</th>
                <th>Name</th>
            	<th>Author</th>
                <th>Branch</th>
            	<th>Year</th>
                <th>Date & Time</th>
                <th>Fees (Rs)</th>
                <th>Details</th>
            	
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
                        <td><?php echo $row[5]; ?></td>
                        <td><?php echo $row[6]; ?></td>
                        <td>
                        <?php
						if($row[3]=="all")
						{?>
                        <button type="button" class="btn btn-warning" name="bavw">
                        <a  name="bachk" href="act_common.php?act=competition#<?php echo $row[0]; ?>">
                        View</button>
                        <?php
						}
						else if($row[3]==$ab1 || $row[3]==$ab2)
						{
                        	if($ab2=="computer")
							{?>	
                                <button type="button" class="btn btn-warning" name="bavw">
                                <a  name="bachk" href="act_comp.php?act=competition#<?php echo $row[0]; ?>">
                                View</button>
                        	<?php
							}
							if($ab2=="electronic")
							{?>	
                                <button type="button" class="btn btn-warning" name="bavw">
                                <a  name="bachk" href="act_elec.php?act=competition#<?php echo $row[0]; ?>">
                                View</button>
                        	<?php
							}
						}?>
                        </td>
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

                        
					