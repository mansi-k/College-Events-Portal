<?php include 'header.php';
include 'validation.php';
include 'homesidenavbar.php';
include_once 'dbconnect.php' ?>

<div class="col-sm-9">
<div class="main">
	<h1>Notices</h1>
	<br />
	<div align="center" > 
		<table class"notice" bgcolor="white" border="06"  width="80%">
        	<tr>
				<td>
                	<marquee bgcolor="#ffc184" direction="up" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();" loop="80" width="100%" height="100">
						<font size="2" color=black>
                        <center><b><i>
                        	* Winter 2015 Ordinary Verification and Photocopy Verification Result is Declared on 10/02/2016. <span class="badge">New</span><br><br>
                        	* Last date for filling exam forms with normal fees for S-2016 is 10/02/2016. <span class="badge">New</span><br><br>
                            * Exam Form and COB module for Summer 16 exam is live in respective institutes login <span class="badge">New</span> <br><br>
                            * For latest update on events,<a href="login.php">login</a> here. <span class="badge">New</span><br><br>
						</font></b></i>
						</center>
					</marquee>
				</td>
			</tr>
        </table>
	</div>
	<br><br>
	<h2>Latest Downloads Available:</h2><br />
	<center>	
    <table class="headtable" width="80%" border="1">
    	<tr>
            <th>No</th>
            <th>File Info</th>
            <th>File Size(KB)</th>
            <th>View</th>
    	</tr>
		<?php
        $no=1;
        $sql="SELECT * FROM tbl_uploads";
        $result_set=mysqli_query($bd,$sql);
        if(mysqli_num_rows($result_set))
		{
        	while($row=mysqli_fetch_array($result_set))
            {
                ?>
                <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['info'] ?></td>
                <td><?php echo $row['size'] ?></td>
                <td><a href="images/uploads/<?php echo $row['file'] ?>" target="_blank">View file</a></td>
                </tr>
                <?php
            }
		}
		else
		{
			?>
			<tr>
			<td colspan="4"><center>Nothing to display!!Will Be updating soon!!</center></td>
			</tr>
			<?php 
		} ?>
    </table>
	</center>    
</div>
</div>
</div>
<?php include 'footer.php'; ?>
