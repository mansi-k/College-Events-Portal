<?php 
$act=$_GET['act'];
include 'header.php';
include 'validation.php';
include 'act_navbar.php'; ?>
<link href="css/gallery.css" rel="stylesheet" type="text/css">
<div class="col-sm-9">
	<div class="main">
		<div class="no-touch" id="gallery"> 
  			<h1>Activity Gallery</h1>
  			<div class="wrap">
    			<div class="box">
      				<div class="boxInner">
     					<a class="fancybox" rel="group" href="Photo Gallery/images/android-dev.png" title="Android Development"><img src="Photo Gallery/images/New folder/android-dev thumb.png" alt=""/></a>
       		 			<div class="titleBox">Android Development</div>
      				</div>
    			</div>
                <div class="box">
      				<div class="boxInner">
     					<a class="fancybox" rel="group" href="Photo Gallery/images/edc.jpg" title="Android Development"><img src="Photo Gallery/images/New folder/edc thumb.jpg" alt=""/></a>
       		 			<div class="titleBox">Seminar</div>
      				</div>
    			</div>
    			<div class="box">
      				<div class="boxInner">
						<a class="fancybox" rel="group" href="Photo Gallery/images/Convo1.jpg" title="Seminar"><img src="Photo Gallery/images/New folder/Convo1 thumb.jpg" alt=""/></a>
        				<div class="titleBox">Seminar</div>
      				</div>
    			</div>
   				<div class="box">
      				<div class="boxInner">
        				<a class="fancybox" rel="group" href="Photo Gallery/images/php-mysql.jpg" title="PHP-MYSQL"><img src="Photo Gallery/images/New folder/php-mysql thumb.jpg"  alt=""/></a>
        				<div class="titleBox">Php-MYSql</div>
      				</div>
    			</div>
    			<div class="box">
      				<div class="boxInner">
						<a class="fancybox" rel="group" href="Photo Gallery/images/poster.jpg" title="Poster"><img src="Photo Gallery/images/New folder/poster thumb.jpg"  alt=""/></a>
        				<div class="titleBox">Poster</div>
    				</div>
    			</div>
			</div>
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


<?php include 'footer.php'; ?>

