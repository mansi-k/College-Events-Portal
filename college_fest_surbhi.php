<?php include 'header.php';
include 'validation.php';
include 'eventnavbar.php'; ?>
<link href="css/gallery.css" rel="stylesheet" type="text/css">
<div class="col-sm-9">
    <div class="main">
				<h1>College Fest - Surabhi</h1>
				<p>'Surbhi' - the art festival, which truly brought out the art and creativity of the students takes place, VESP is truly decorated at every corner with different colors of joy and happiness. Students enthusiastically comes forward to participate in different competitions such as Rangoli nail Art, Mimicry, Mehendi, Mr. & Mrs. VESP, etc. Every year new events are introduced such as tattoo, making sudoku, pot painting etc.</p>
                <center><h3>Surabhi Head</h3>
                <table class="festtable">
                <tr><th>Teacher</th>
                <td><a href="displayprofile.php?tab=teacher&id=13 ">Himani Sonak</a></td>
                </tr>
                <tr><th>Student</th>
                	<td><a href="displayprofile.php?tab=student&id=8 ">Roshni Sangar</a></td>
                </tr>
                </table></center>
                <br /><br />
             <div id="events">
             <h1>Surabhi Events</h1>
             <h3>There are vatious events. Some of the are as follows :</h3><br />
             <h2>Code It</h2>
             <p>It is an technical events.It is specially arranged for Computer branch students.There are various rounds.<br />
            Allowable programming languages in which participant can make the programs for the given problems are:
			<b>C, C++ and Java </b><br />
             <center><b>Event Heads of Code It:</b><br />
             <h3>Code It Heads</h3>
                <table class="festtable">
                <tr><th>Teacher</th>
                <td><a href="displayprofile.php?tab=teacher&id=1 ">Sunita Raut</a></td>
                </tr>
                <tr><th>Student</th>
                	<td><a href="displayprofile.php?tab=student&id=2 ">Rushabh Doshi</a></td>
                </tr>
                </table></center>
             </p><br /><br />
             <h2>Counter Strike</h2>
             <p>It is an non-technical events.It is played in a group of 4.Students enjoy to participate in such events.It is played against another team of four.each game in it is a knock out game.Team gets a chance to be both-<b>Terrorist</b> and <b>CT</b>.The map used is <b>dust2</b>
             <center><b>Event Heads of Counter Strike:</b><br />
             <h3>Counter Strike Heads</h3>
                <table class="festtable">
                <tr><th>Teacher</th>
                <td><a href="displayprofile.php?tab=teacher&id=16 ">Farhan Shaikh</a></td>
                </tr>
                <tr><th>Student</th>
                	<td><a href="displayprofile.php?tab=student&id=12 ">Piyush Nandankar</a></td>
                </tr>
                </table></center> 
             </p><br /><br />
             <h2>Talent Hunt</h2>
             <p>Also Known as <b>VESPian's Got Talent</b>. In this event participants get a chance to show thier talent.Some show their talent in dance,some in singing ,some in acting.The perfomance can be solo or in a group.
             <center><b>Event Heads of Talent Hunt:</b><br />
             <h3>Talent Hunt Heads</h3>
                <table class="festtable">
                <tr><th>Teacher</th>
                <td><a href="displayprofile.php?tab=teacher&id=10 ">Minal Pable</a></td>
                </tr>
                <tr><th>Student</th>
                	<td><a href="displayprofile.php?tab=student&id=5 ">Vidhi Barve</a></td>
                </tr>
                </table></center>
             
             </p><br /><br />
             <font style="float:right"><sub>*To participate or more information about events please login</sub></font>
                </div>
                
                <div class="no-touch" id="gallery"> 
  				<h1>Surabhi Gallery</h1>
                <center><h3>Here are the few glorious moments captured:</h3></center>
  <div class="wrap">
    <div class="box">
      <div class="boxInner">
     <a class="fancybox" rel="group" href="Photo Gallery/images/fifa.jpg" title="Fifa"><img src="Photo Gallery/images/New folder/fifa thumb.jpg"     	alt="Fifa"/></a>
        				<div class="titleBox">Fifa</div>
     					</div>
    				</div>
    				<div class="box">
      					<div class="boxInner">
        				<a class="fancybox" rel="group" href="Photo Gallery/images/Surbhi.jpg" title="Surbhi"><img src="Photo Gallery/images/New folder/Surbhi thumb.jpg" alt="Surbhi"/></a>
        				<div class="titleBox">Surbhi</div>
      </div>
    </div>      
  </div>
  </div>
                 <div id="winners">
                <h1>Surabhi Winners</h1>
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