<?php include 'header.php';
include 'validation.php';
include 'homesidenavbar.php'; ?>
<link href="css/gallery.css" rel="stylesheet" type="text/css">
<div class="col-sm-9">
	<div class="main">
		<div class="no-touch" id="gallery"> 
  			<h1>College Gallery</h1>
  			<div class="wrap">
    			<div class="box">
      				<div class="boxInner">
     					<a class="fancybox" rel="group" href="Photo Gallery/images/01.jpg" title="VESP"><img src="Photo Gallery/images/New folder/01 thumb.jpg" alt=""/></a>
       		 			<div class="titleBox">VESP</div>
      				</div>
    			</div>
    			<div class="box">
      				<div class="boxInner">
						<a class="fancybox" rel="group" href="Photo Gallery/images/02.jpg" title="Computer Lab"><img src="Photo Gallery/images/New folder/02 thumb.jpg" alt=""/></a>
        				<div class="titleBox">Computer Lab</div>
      				</div>
    			</div>
   				<div class="box">
      				<div class="boxInner">
        				<a class="fancybox" rel="group" href="Photo Gallery/images/03.jpg" title="Mechanical Lab"><img src="Photo Gallery/images/New folder/03 thumb.jpg"  alt=""/></a>
        				<div class="titleBox">Mechanical Lab</div>
      				</div>
    			</div>
    			<div class="box">
      				<div class="boxInner">
						<a class="fancybox" rel="group" href="Photo Gallery/images/04.jpg" title="Library"><img src="Photo Gallery/images/New folder/04 thumb.jpg"  alt=""/></a>
        				<div class="titleBox">Library</div>
    				</div>
    			</div>
    			<div class="box">
     	 			<div class="boxInner">
						<a class="fancybox" rel="group" href="Photo Gallery/images/05.jpg" title="Physics Lab"><img src="Photo Gallery/images/New folder/05 thumb.jpg"  alt=""/></a>
        				<div class="titleBox">Physics Lab</div>
      				</div>
    			</div>
   				<div class="box">
      				<div class="boxInner">
						<a class="fancybox" rel="group" href="Photo Gallery/images/06.jpg" title="Lab"><img src="Photo Gallery/images/New folder/06 thumb.jpg"  alt=""/></a>
        				<div class="titleBox">Lab</div>
     				 </div>
    			</div>
    			<div class="box">
      				<div class="boxInner">
						<a class="fancybox" rel="group" href="Photo Gallery/images/07.jpg" title="Library"><img src="Photo Gallery/images/New folder/07 thumb.jpg"  alt=""/></a>
        				<div class="titleBox">Library</div>
    				</div>
    			</div>
    			<div class="box">
      				<div class="boxInner">
						<a class="fancybox" rel="group" href="Photo Gallery/images/08.jpg" title="Canteen"><img src="Photo Gallery/images/New folder/08 thumb.jpg"  alt=""/></a>
       				<div class="titleBox">Canteen</div>
    				</div>
    			</div>
    			<div class="box">
      				<div class="boxInner">
						<a class="fancybox" rel="group" href="Photo Gallery/images/09.jpg" title="Board Room"><img src="Photo Gallery/images/New folder/09 thumb.jpg"  alt=""/></a>
        				<div class="titleBox">Board Room</div>
     				</div>
    			</div>
    			<div class="box">
      				<div class="boxInner">
						<a class="fancybox" rel="group" href="Photo Gallery/images/10.jpg" title="Quadrangle"><img src="Photo Gallery/images/New folder/10 thumb.jpg"  alt=""/></a>
        				<div class="titleBox">Quadrangle</div>
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

