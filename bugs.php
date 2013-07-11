<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       bugs.php                                                    ##
##  Developed by:  Shadow                                                      ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
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
<?php include("Templates/bugs.tpl"); ?>
<h1>Version BUGS</h1>
<div id="products">

1. Automatic Conquering Protection (isn't added):</br></br>
The conquering limitations must be hard coded.</br>
These limitations are not that complicated but also connected to the relationship between the accounts in question.</br>
The different connection types are:</br>
Type 1 Players were not sitters and have not used the same computer or the same network (IP) recently.</br>
Type 2 Players have been sitters recently or have used the same network (IP).</br>
Type 3 Players are currently sitters or used the same PC recently.</br>
Rules for connection type 1</br>
*can conquer village when both players have not been in the same or an allied alliance within the last 2 days</br>
Rules for connection type 2</br>
*can conquer village when there has been NO active sitter connection within the last 14 days AND both players have not been in the same or an allied alliance within the last 2 days</br>
Rules for connection type 3</br>
*can NOT conquer village of each other.</br></br>
2. Alliance forum don't work 100%.</br></br>
3. Battle simulator calculate don't work 100%.</br></br>
4. Gold Club not fixed complete</br>
- raid statistics</br></br>
5. If you have plus account activated you cannot see the attck/deff/scout images when you attack a village (i mean img on villages : red swords etc..)</br></br>
6. Capital doesnt apper on dorf1.php under village name</br></br>
7. In Statistics Multihunter doesnt apper with underline (BUG in /Templates/Ranking/overview.tpl </br></br>
8. Artefactele nu functioneaza corect (Slight storage masterplan - granar si hambar extins nu merge sa faci pe capitala daca iei artefactul pe capitala iar Great storage masterplan pentru cont merge peste tot in afara de capitala).</br></br>
9. 403 , 404 , 500 Errors doesnt work.</br></br>
</div>
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