<?php if($_SESSION['login'])
{?>
<div class="top-header" style="background-color:black;margin-bottom:-20px;height:140px;">
	<div class="container">
		<ul class="footer-btm " style="display:block;background-color:transparent;">
			<li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li class="prnt"><a href="profile.php">My Profile</a></li>/
				<li class="prnt"><a href="change-password.php">Change Password</a></li>
			<li class="prnt"><a href="tour-history.php">My Tour History</a></li>
			<li class="prnt"><a href="issuetickets.php">Issue Tickets</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Welcome :</li>				
			<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
			<li class="sigi"><a href="logout.php" >/ Logout</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<div class="top-header" style="background-color:black;height:60px;">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li><a href="admin/index.php" id="">Admin Login</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
					
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Sign In</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php }?>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo " data-wow-delay=".5s">
		<span class="w" style="margin-top:40px;"><a href="index.php">Tours  Travels</a>	</span>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->


				<!-- Collect the nav links, forms, and other content for toggling -->
			
					
						
					
		<div class="clearfix"></div>
	</div>
</div>
