<?php include 'header.php';
include 'validation.php';
include 'eventnavbar.php'; ?>
<link href="css/gallery.css" rel="stylesheet" type="text/css">
<div class="col-sm-9">
    <div class="main">
				<h1>College Fest - Sphurti</h1>
				<p>A well maintained football ground (which also doubles up as a cricket ground), a basketball court and a volleyball court are situated within the V.E.S. campus area and it is shared by the various schools under V.E.S.. Additional facilities for high jump and long jump are also available. An annual sports competition is held in this college called as 'Sphurti', where all the student divisions compete in various indoor and outdoor games and competitions. Indoor sports events including carrom, chess, table tennis are held in the odd semester. And, outdoor sports events football, basketball, cricket are held in the even semester. VESIT also participates in various inter college sports festivals.</p>
                <center>
                <h3>Sphurti Head</h3>
                <table class="festtable">
                    <tr>
                        <th>Teacher</th>
                        <td><a href="displayprofile.php?tab=teacher&id=7 ">Nishant Shetty</a></td>
                    </tr>
                    <tr>
                        <th>Student</th>
                        <td><a href="displayprofile.php?tab=student&id=14 ">Nidhi Mishra</a></td>
                    </tr>
                </table>
                </center>
                <br /><br />
             	<div id="events">
             <h1>Sphurti Events</h1>
             <h3>There are vatious events. Some of the are as follows :</h3><br />
             <h2>Cricket</h2>
             <p>Cricket is played at the ground behind the college.Each branch of the college has their teams.Teams consist of all the best players from all the three years classes.Every game is a knock-out game.So your team must win every matches to be the ultimate winner!!.<br />
             <center>
             <b>Event Heads of Cricket:</b><br />
             <h3>Cricket Heads</h3>
                <table class="festtable">
                <tr>
                	<th>Teacher</th>
                	<td><a href="displayprofile.php?tab=teacher&id=11 ">Suraj Yewle</a></td>
                </tr>
                <tr>
                	<th>Student</th>
                	<td><a href="displayprofile.php?tab=student&id=7 ">Ravi Dhoble</a></td>
                </tr>
                </table>
             </center>
           	 </p><br /><br />
             <h2>FootBall</h2>
             <p>Football is played on the football ground behind the college(which also doubles up as a cricket ground).Each branch plays their teams which consist of best players from their respective branches.Player can be from the F.Y ,S.Y and T.Y.The matches are a delight to watch.Playes give their 100% to make their branch win every matches.
             <center><b>Event Heads of Football:</b><br />
             <h3>Football Heads</h3>
                <table class="festtable">
                <tr><th>Teacher</th>
                <td><a href="displayprofile.php?tab=teacher&id=3 ">Robert Villiams</a></td>
                </tr>
                <tr><th>Student</th>
                	<td><a href="displayprofile.php?tab=student&id=17 ">Aditya Chauhan</a></td>
                </tr>
                </table></center>
             </p><br /><br />
             <h2>Carrom</h2>
             <p>Many Indoor games are also included in sphurti.One of those is Carrom.Only a player from the branch gets a chance to play to make his branch win in Carrom.Similiar to other games all of the matches are knockout matches.
             <center><b>Event Heads of Carrom:</b><br />
             <h3>Carrom Heads</h3>
                <table class="festtable">
                <tr><th>Teacher</th>
                <td><a href="displayprofile.php?tab=teacher&id=6 ">Shital Nawale</a></td>
                </tr>
                <tr><th>Student</th>
                	<td><a href="displayprofile.php?tab=student&id=16 ">Ashwini	kamble</a></td>
                </tr>
                </table></center>
             
             </p><br /><br />
             <font style="float:right"><sub>*To participate or more information about events please login</sub></font>
                </div>
                
                <div class="no-touch" id="gallery"> 
  				<h1>Sphurti Gallery</h1>
                <center><h3>Here are the few glorious moments captured:</h3></center>
  <div class="wrap">
    <div class="box">
      <div class="boxInner">
     <a class="fancybox" rel="group" href="Photo Gallery/images/sanskriti.jpg" title="Sanskriti"><img src="Photo Gallery/images/New folder/sanskriti thumb.jpg" width="200" height="120" alt="sanskriti"/></a>
        <div class="titleBox">Sphurti</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
       <a class="fancybox" rel="group" href="Photo Gallery/images/sanskriti1.jpg" title="Auditions"><img src="Photo Gallery/images/New folder/sanskriti1 thumb.jpg"  alt="audition"/></a>
        <div class="titleBox">Audition</div>
      </div>
    </div>
       
  </div>
  <!-- /#wrap -->
  </div>
  <div id="winners">
   	<h1>Sphurti Winners</h1>
    <center>Winners will be declared Soon...</center>
  </div>
</div>
</div>
</div>
<!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="Photo Gallery/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="Photo Gallery/source/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="Photo Gallery/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>

<?php include("footer.php"); ?>