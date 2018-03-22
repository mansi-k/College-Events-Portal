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
            			<li class="side"><a href="studentmyprofile.php" <?php echoActiveClassIfRequestMatches("studentmyprofile")?>>
                        	My Profile</a></li>
            			<li class="side"><a href="changedp.php" <?php echoActiveClassIfRequestMatches("changedp")?>>
                        	Change Profile Picture</a></li>
      					<li class="side">
                        	<a href="studentchangepassword.php"<?php echoActiveClassIfRequestMatches("studentchangepassword")?>>
                        	Change Password</a></li>
                        <li class="side"><a href="studentparticipate.php" <?php echoActiveClassIfRequestMatches("studentparticipate")?>>
                        	Participate <span class="badge">New</span></a></li>
    					<li class="side"><a href="studentpostmessage.php"<?php echoActiveClassIfRequestMatches("studentpostmessage")?>>
                        	Messages <span class="badge">New</span></a></li>
						<li class="side"><a href="logout.php?logout"<?php echoActiveClassIfRequestMatches("logout")?>>
                        	Logout</a></li>
          			</ul>
        		</div><!--/.nav-collapse -->
      		</div>
    	</div>
  	</div>
