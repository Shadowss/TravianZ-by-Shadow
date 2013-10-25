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

$start = $generator->pageLoadTimeStart();
if(isset($_GET['newdid'])) {
	$_SESSION['wid'] = $_GET['newdid'];
	header("Location: ".$_SERVER['PHP_SELF']);
}
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

<h1 align="left">Daily bonus </h1>
<p align="left"><br>
  <br><br>
  Every 24 hours you can claim your gold daily.   <img src="../gpack/travian_default/img/misc/dailygold.png" width="48" height="48" align="baseline" /><br>
    Time and Gold!!</p>
  <br><br>
<?php
			
			$timestamp=time(60*60*24);
			$query3 = mysql_query("SELECT * FROM ".TB_PREFIX."users WHERE id = ".$session->uid);
			$data3 = mysql_fetch_assoc($query3);



	if($data3['dailygold'] == 1 && $session->access > 1)
	{
		if($data3['dailygoldtime']<=$timestamp-(60*60*24))
		{
			$entsperren = mysql_query("UPDATE ".TB_PREFIX."users SET dailygold = '0' WHERE id = ".$session->uid);
			$entsperren2 = mysql_query("UPDATE ".TB_PREFIX."users SET dailygoldtime = '0' WHERE id = ".$session->uid) or die(mysql_error());
			
			echo "<h3><a href=\"?daily\">and 50 more here! :)</a></h3>";
			

		}
		else
		{
			
			$zeit_vergangen=$timestamp-$data3['dailygoldtime'];
			$seconds = 86400-$zeit_vergangen;
			$hours = floor($seconds / 3600);
			$seconds -= $hours * 3600;
			$minutes = floor($seconds / 60);
			$seconds -= $minutes * 60;
			echo "You have earned today <b>50 gold</b><br><br>";
			echo "You are almost lacking <b>$hours:$minutes:$seconds h</b>"; 
		}
	}


	if($data3['dailygold'] == 0  && $session->access > 1)	

	{

		if($session->access != 0)
		{
			$goldok = mysql_query("UPDATE ".TB_PREFIX."users SET gold=gold+50 WHERE id = ".$session->uid);
			echo "UAUUUU 50 Gold. In about 24 hours you can go back for more ...";
		}

		$dailytime=time(60*60*24);
		$gold1= mysql_query("UPDATE ".TB_PREFIX."users SET dailygold = '1' WHERE id= ".$session->uid);
		$goldtime=mysql_query("UPDATE ".TB_PREFIX."users SET dailygoldtime='".$dailytime."' WHERE id = ".$session->uid) or die(mysql_error());
	}


?>

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
Calculado em <b><?php
echo round(($generator->pageLoadTimeEnd()-$start)*1000);
?></b> ms

<br />Hora do Server: <span id="tp1" class="b"><?php echo date('H:i:s'); ?></span>
</div>
	</div>
</div>
<div id="ce"></div>
</body>
</html>
<?php mysql_close(); ?>