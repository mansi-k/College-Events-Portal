<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=desktop-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="styles/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-latest.min.js"></script>

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
  <link rel="icon" href="images/ec.jpg" type="image/jpg">
<title>Events Club</title>
 <?php 
function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}
?>
</head>

<body data-spy="scroll" data-target="#sidebar-parent">
<?php include 'validation.php';?>
<div class="se-pre-con"></div>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand myLogo" href="#"><img src="images/elogo.gif" height="45px" width="145px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" <?php echoActiveClassIfRequestMatches("index")?>>Home</a></li>
        <li><a href="notices.php" <?php echoActiveClassIfRequestMatches("notices")?>>Notices <span class="badge">New</span></a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">College Fest <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="college_fest_sphurti.php" <?php echoActiveClassIfRequestMatches("sphurti")?>>Sphurti</a></li>
            <li><a href="college_fest_surbhi.php"<?php echoActiveClassIfRequestMatches("surbhi")?>>Surabhi</a></li>
            <li><a href="college_fest_sanskriti.php" <?php echoActiveClassIfRequestMatches("sanskriti")?>>Sanskriti</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Activities <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="act_common.php?act=workshop"<?php echoActiveClassIfRequestMatches("act_common")?>>Workshops</a></li>
            <li><a href="act_common.php?act=seminar" <?php echoActiveClassIfRequestMatches("act_common")?>>Seminars</a></li>
            <li><a href="act_common.php?act=presentation" <?php echoActiveClassIfRequestMatches("act_common")?>>Presentations</a></li>
            <li><a href="act_common.php?act=competition" <?php echoActiveClassIfRequestMatches("act_common")?>>Competitions</a></li>
          </ul>
        </li>
        <li><a href="login.php" <?php echoActiveClassIfRequestMatches("login")?>>Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="fluid_container" id="top">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/head.jpg" alt="vesp" class="img-responsive" width="1500" height="300">
      </div>

      <div class="item">
        <img src="images/vesp1.jpg" alt="vesp" class="img-responsive" width="1500" height="300">
      </div>
    
      <div class="item">
        <img src="images/banr.png" alt="vesp" class="img-responsive" width="1500" height="300">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
