<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       Dailygold.php                                               ##
##  Developed by:  noonn			                               		       ##
##  License:       TravianZ Project		                                       ##
##  Copyright:     TravianZ (c) 2013. All rights reserved.						##
##                                                                             ##
#################################################################################


include("GameEngine/Village.php");
$amount = $_SESSION['amount'];
$start = $generator->pageLoadTimeStart();
if(isset($_GET['newdid'])) {
	$_SESSION['wid'] = $_GET['newdid'];
	header("Location: ".$_SERVER['PHP_SELF']);
}
else {
	$building->procBuild($_GET);
}
$automation->isWinner();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
	<title><?php echo SERVER_NAME ?></title>
	<link REL="shortcut icon" HREF="favicon.ico"/>
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<script src="mt-full.js?0faaa" type="text/javascript"></script>
	<script src="unx.js?0faaa" type="text/javascript"></script>
	<script src="new.js?0faaa" type="text/javascript"></script>
	<link href="<?php echo GP_LOCATE; ?>lang/en/lang.css?f4b7c" rel="stylesheet" type="text/css" />
	<link href="<?php echo GP_LOCATE; ?>lang/en/compact.css?f4b7c" rel="stylesheet" type="text/css" />
	<?php
	if($session->gpack == null || GP_ENABLE == false) {
	echo "
	<link href='".GP_LOCATE."travian.css?e21d2' rel='stylesheet' type='text/css' />
	<link href='".GP_LOCATE."lang/en/lang.css?e21d2' rel='stylesheet' type='text/css' />";
	} else {
	echo "
	<link href='".$session->gpack."travian.css?e21d2' rel='stylesheet' type='text/css' />
	<link href='".$session->gpack."lang/en/lang.css?e21d2' rel='stylesheet' type='text/css' />";
	}
	?>
	<script type="text/javascript">

		window.addEvent('domready', start);
	</script>
</head>


<body class="v35 ie ie8">
<div class="wrapper">
<img style="filter:chroma();" src="img/x.gif" id="msfilter" alt="" />
<div id="dynamic_header">
	</div>
<?php include("Templates/header.tpl"); ?>
<div id="mid">
<?php include("Templates/menu.tpl"); ?>
		<div id="content"  class="village2">


<?php

if(isset($_GET['daily'])){
			
			$timestamp=time(60*60*24);
			$query3 = mysql_query("SELECT * FROM ".TB_PREFIX."users WHERE id = ".$session->uid);
			$data3 = mysql_fetch_assoc($query3);

	if($data3['dailygold'] == 1 && $session->access > 1)
	{
		if($data3['dailygoldtime']<=$timestamp-(60*60*24))
		{
			$entsperren = mysql_query("UPDATE ".TB_PREFIX."users SET dailygold = '0' WHERE id = ".$session->uid);
			$entsperren2 = mysql_query("UPDATE ".TB_PREFIX."users SET dailygoldtime = '0' WHERE id = ".$session->uid) or die(mysql_error());
			echo "<h1>Daily Bonus</h1><br><br><br>";
			echo "<font color=blue><b>Daily Bonus</b></font> Time.<br>Click on the link below and get the 1 gold.<br><br><br>";
			echo "<h3><a href=\"?daily\">Go to get 1 gold</a></h3>";
		}
		else
		{

			$zeit_vergangen=$timestamp-$data3['dailygoldtime'];
			echo "<h1>Daily Bonus</h1><br><br><br>";
			echo "Already won <b>1 gold</b><br><br>";
			echo "Remaining time: Total <b>86400</b>second. <b>$zeit_vergangen</b> seconds have passed.";
			
		}
	}


	if($data3['dailygold'] == 0  && $session->access > 1)	

	{

		if($session->access != 0)
		{
			$goldok = mysql_query("UPDATE ".TB_PREFIX."users SET gold=gold+1 WHERE id = ".$session->uid);
			echo "<h1>Daily Bonus</h1><br><br><br>";
			echo "Won<font color=red><b> 1 gold</b></font>. <br> You can get back after a day.";
		}

		$dailytime=time(60*60*24);
		$gold1= mysql_query("UPDATE ".TB_PREFIX."users SET dailygold = '1' WHERE id= ".$session->uid);
		$goldtime=mysql_query("UPDATE ".TB_PREFIX."users SET dailygoldtime='".$dailytime."' WHERE id = ".$session->uid) or die(mysql_error());
	}

}


else{ ?>
<h1>Daily Bonus</h1><br><br><br>
Gold Award in one day by one day to get one, and again after 24 hours is possible.
Day 60 seconds * 60 minutes * 24 hours = 86,400 seconds to go through, and the remaining time can be shown
Acquisition and the remaining time is gold, please click on the link below.<br><br><br>

<h3><a href="?daily">Go to get 1 gold</a></h3>

<?php } ?>


</div>
</br></br></br></br><div id="side_info">
<?php
include("Templates/multivillage.tpl");
include("Templates/quest.tpl");
include("Templates/news.tpl");
include("Templates/links.tpl");
?>
</div>
<div class="clear"></div>
</div>
<div class="footer-stopper"></div>
<div class="clear"></div>
<?php
include("Templates/footer.tpl");
include("Templates/res.tpl");
?>
<div id="stime">
<div id="ltime">
<div id="ltimeWrap">
Calculated in <b><?php
echo round(($generator->pageLoadTimeEnd()-$start)*1000);
?></b> ms

<br />Server time: <span id="tp1" class="b"><?php echo date('H:i:s'); ?></span>
</div>
	</div>
</div>
<div id="ce"></div>
</body>
</html>
<?php mysql_close(); ?>