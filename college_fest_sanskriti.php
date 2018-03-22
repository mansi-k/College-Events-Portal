<?php include 'header.php';
include 'validation.php';
include 'eventnavbar.php'; ?>
<link href="css/gallery.css" rel="stylesheet" type="text/css">
<div class="col-sm-9">
    <div class="main">
				<h1 id="events">College Fest - Sanskriti</h1>
                <p>And finally afte Sphurti and Surabhi comes 'Sanskriti'- the grand cultural program conducted by the students , which is witnessed by a huge audience. Every year a new theme is decided. It epitomizes humanity and the feeling of oneness. Function starts with Sarawati Vandana. Principal Mr. Vikrant Joshi addresses the gathering by presenting VESP annual report, & highlighting student activities of the previous academic year & their achievements, its latest updates and its association with MSBTE activities.</p>
                <center><h3>Sanskriti Head</h3>
                <table class="festtable">
                <tr><th>Teacher</th>
                <td><a href="displayprofile.php?tab=teacher&id=17 ">Sarika Deshmukh</a></td>
                </tr>
                <tr><th>Student</th>
                	<td><a href="displayprofile.php?tab=student&id=9 ">Omkar Mehta</a></td>
                </tr>
                </table></center><br /><br />
				<div class="no-touch" id="gallery"> 
  				<h1>Sanskriti Gallery</h1>
                                <center><strong>Here are the few glorious moments captured:</strong></center>
										                        
  <div class="wrap">
    
    <!-- Define all of the tiles: -->
  
    <div class="box">
      <div class="boxInner">
     <a class="fancybox" rel="group" href="Photo Gallery/images/sanskriti.jpg" title="Sanskriti"><img src="Photo Gallery/images/New folder/sanskriti thumb.jpg" alt="sanskriti"/></a>
        <div class="titleBox">Sanskriti</div>
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