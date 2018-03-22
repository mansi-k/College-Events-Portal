<div class="row" id="side">
	<div class="col-sm-3" id="sidebar-parent">
    	<div class="sidebar-nav" data-spy="affix" data-offset-top="400" id="sidebar">
      		<div class="navbar navbar-inverse" role="navigation">
    			<div class="navbar-header">
          			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
          			</button>
          			<span class="visible-xs navbar-brand">
                    	Options
                    </span>
       	 		</div>
        		<div class="navbar-collapse collapse sidebar-navbar-collapse">
          			<ul class="nav navbar-nav">
               			<li class="side"><a href="act_common.php?act=<?php echo $act;?>" style="text-transform:capitalize" <?php if(strchr($_SERVER['REQUEST_URI'],"act_common")){?>class="active"<?php } ?>>Common <?php echo $act."s";?></a></li>
            			<li class="side"><a href="act_comp.php?act=<?php echo $act;?>" <?php if(strchr($_SERVER['REQUEST_URI'],"act_comp")){?>class="active"<?php } ?>>
                        Computer Department</a></li>
            			<li class="side"><a href="act_elec.php?act=<?php echo $act;?>"  <?php if(strchr($_SERVER['REQUEST_URI'],"act_elec")){?>class="active"<?php } ?>>
                        Electronic Department</a></li>
						<li class="side"><a href="act_gallery.php?act=<?php echo $act;?>" <?php if(strchr($_SERVER['REQUEST_URI'],"act_gallery")){?>class="active"<?php } ?>>Gallery</a></li>
                        <li role="separator" class=" side nav-divider"></li>
						
						<li class="side1">Stay Connected</li>
                        <li class="ic">
                        <div class="row">
                        <div class="col-sm-4">
                        <a href="#"><img src="images/fbb.png" height="40px"width="40px"/> </a>
                        </div>
                        <div class="col-sm-4">
                        <a href="#"><img src="images/gg.png" height="40px"width="40px"/> </a>
                        </div>
                        <div class="col-sm-4">
                        <a href="#"><img src="images/twt.ico" height="40px"width="40px"/> </a>
                        </div>
                        </div>
                        </li>
          			</ul>
        		</div><!--/.nav-collapse -->
      		</div>
    	</div>
  	</div>
<script>
document.getElementById("navitem").innerHTML = window.location.href;
</script>
  
