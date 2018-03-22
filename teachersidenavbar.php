
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
            			<li class="side"><a href="teachermyprofile.php" <?php echoActiveClassIfRequestMatches("teachermyprofile")?>>
                        	My Profile</a></li>
          				<li class="side"><a href="changetdp.php" <?php echoActiveClassIfRequestMatches("changetdp")?>>
                        	Change Profile Picture</a></li>    					
                        <li class="side">
                      	<a href="teacherchangepassword.php" <?php echoActiveClassIfRequestMatches("teacherchangepassword")?>>
                       	Change Password</a></li>
                        <?php
						if($_SESSION['authority']=="event_head" && ($_SESSION['event_auth']!="sphurti" && $_SESSION['event_auth']!="surabhi" && $_SESSION['event_auth']!="sanskriti"))
						{?> 
                        	<li class="side"><a href="teachereditevent.php" <?php echoActiveClassIfRequestMatches("teachereditevent")?>>
                        	View / Edit Event</a></li>   
                        	<li class="side"><a href="teachercheckpart.php" <?php echoActiveClassIfRequestMatches("teachercheckpart")?>>
                        	Check Participation <span class="badge">New</span></a></li>
                        <?php
						}
						else if($_SESSION['event_auth']=="sphurti" || $_SESSION['event_auth']=="surabhi")
						{?>
                         <li class="side"><a href="teacherheadviewevents.php" <?php echoActiveClassIfRequestMatches("teacherheadviewevent")?>>
                        	View Events</a></li>
                         <?php
						}
						else if($_SESSION['authority']=="activity_head")
						{?>    
                        <li class="side"><a href="postnewact.php" <?php echoActiveClassIfRequestMatches("postnewact")?>>
                        	Post an Activity</a></li>
                        <li class="side"><a href="activitycheckpart.php" <?php echoActiveClassIfRequestMatches("activitycheckpart")?>>
                        	Check Activities <span class="badge">New</span></a></li>
                        <?php
			            }   
						else if($_SESSION['authority']=="hod")
						{?>
                         <li class="side"><a href="hodcheckacts.php" <?php echoActiveClassIfRequestMatches("hodcheckacts")?>>
                        	View Activities <span class="badge">New</span></a></li>
                         <?php
						}
                        else if($_SESSION['authority']=="admin")
						{?>
                         <li class="side"><a href="uploadnotice.php" <?php echoActiveClassIfRequestMatches("uploadnotice")?>>
                        	Upload Notices</a></li>
                         <li class="side"><a href="register.php" <?php echoActiveClassIfRequestMatches("register")?>>
                        	Register New User</a></li>
                                                  <?php
						 }?>     
    					<li class="side"><a href="teacherpostmessage.php" <?php echoActiveClassIfRequestMatches("teacherpostmessage")?>>
                        	Messages <span class="badge">New</span></a></li>
						<li class="side"><a href="logout.php?logout" <?php echoActiveClassIfRequestMatches("logout")?>>
                        	Logout</a></li>
          			</ul>
        		</div><!--/.nav-collapse -->
      		</div>
    	</div>
  	</div>
