<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       anleitung.php                                               ##
##  Developed by:  Dzoki                                                       ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################

include("GameEngine/config.php");
include("GameEngine/Database.php");
include("GameEngine/Lang/".LANG.".php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo SERVER_NAME; ?></title>
	<link rel="stylesheet" type="text/css" href="img/tutorial/main.css"/>
	<link rel="stylesheet" type="text/css" href="img/tutorial/flaggs.css"/>
	<meta name="content-language" content="en"/>
	<meta http-equiv="imagetoolbar" content="no"/>
	<script src="mt-core.js" type="text/javascript"></script>
	<script src="new.js" type="text/javascript"></script>
	<style type="text/css" media="screen">

	</style>
</head>
<body class="webkit contentPage">
<div class="wrapper">
<div id="country_select">

</div>
<div id="header">
	<h1>Welcome to <?php echo SERVER_NAME; ?></h1>
</div>

<div id="navigation">

<a href="index.php" class="home"><img src="img/x.gif" alt="Travian"/></a>

	<table class="menu">

	<tr>

		<td><a href="tutorial.php"><span>Tutorial</span></a></td>

		<td><a href="anleitung.php"><span>Manual</span></a></td>

		<td><a href="http://forum.travian.com/" target="_blank"><span>Forum</span></a></td>





		<td><a href="index.php?signup"><span>Register</span></a></td>

		<td><a href="index.php?login"><span>Login</span></a></td>

</tr>

	</table>

</div>






<div id="content">

	<div class="grit">


<h1>ScreenShoot</h1>

<p class="submenu">

<div id="lmid1">
<div id="lmid2">
<div class="headline">

		 			</div>
		 			<div class="wholebox">
		 				<table width="80%" align="center" cellspacing="1" cellpadding="10" class="f10">
		 					<tr valign="top">
		 						<td class="screener" >

		 							Village overview
		 							<a href="img/en/s/s1.png"><img src="img/en/s/s1.png" width="130" height="92" alt="Village overview"></a>
					 			</td>
		 						<td class="screener">
		 							Send troops
		 							<a href="img/en/s/s3.png"><img src="img/en/s/s3.png" width="130" height="78" alt="Send troops"></a>
		 						</td>
		 						<td class="screener">
		 							Battle report
		 							<a href="img/en/s/s5.png"><img src="img/en/s/s5.png" width="130" height="103" alt="Battle report"></a>

		 						</td>
		 					</tr>
		 					<tr valign="top">
		 						<td class="screener" >
		 							Granary
		 							<a href="img/en/s/s6.png"><img src="img/en/s/s6.png" width="130" height="81" alt="Granary"></a>
					 			</td>
		 						<td class="screener">
		 							Map
		 							<a href="img/en/s/s8.png"><img src="img/en/s/s8.png" width="130" height="95" alt="Map"></a>

		 						</td>
		 						<td class="screener">
		 							Village centre
		 							<a href="img/en/s/s7.png"><img src="img/en/s/s7.png" width="130" height="107" alt="Village centre"></a>
		 						</td>
		 					</tr>
		 				</table>
</div></div>
</div></div>

</p>

</ul>

<div class="footer"></div>

</div>

</div>

<div id="iframe_layer" class="overlay">



<div class="mask closer"></div>







<div class="overlay_content">

<a href="index.php" class="closer"><img class="dynamic_img" alt="Close" src="img/un/x.gif" /></a>

<h2>Anleitung</h2>



<div id="frame_box" >

</div>

<div class="footer"></div>

</div>



</div>




</body>
</html>