<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       version.php                                                 ##
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
<?php include("Templates/version.tpl"); ?>
<h1>Version Changes</h1>
<div id="products">

1. Modified register page with pictures.</br>
2. Modified names of tribes with colours.</br>
3. Modified Plus System with packages.</br>
4. Modified in Plus System and added Account Statement.</br>
5. Enabled Report Player in Profile. Send message to Multihunter. </br>
6. Enabled Graphic Pack in Profile (NOT CODED YET).</br>
7. Enabled in Profile : Auto Completation , Large Map , Report Filter and Time Preferences (NOT CODED YET).</br>
8. Added Vacation Mod . Can be set from profile , cannot attack player on vacation mode , can view on profile (overview), cannot login on vacation mode. (thanks to advocaite).</br>
9. Integrate Support Section in game.</br>
10. Modified footer and menu and added version and bugs (I mean detailed version.php and bugs.php).</br>
11. Modified all admin page , now all pictures appers correctly.</br>
12. Added night / day pictures. (thanks to advocaite).</br>
13. Activate inactive player in Admin Panel.</br>
14. Added Server Maintenence in Admin Panel (Not working 100% , i mean mode ban all players).</br>
15. Activate Player Report in Admin Panel (NOT CODED YET).</br>
16. Many bug fixed in Admin Panel.</br>
17. Negative crop fixed , now units die (starvation).</br>
18. Medal fixed.</br>
19. Added image in Profile (like beginner protection) for tribes [#roman] , [#gaul] , [#teuton]</br>
20. Added image in profile for Multihunter and Admin [#MH] automaticaly set on install.</br>
21. Added image in profile for Taskmaster and Nature [#TASKMASTER] , [#NATURE] , automaticaly set on install.</br>
22. Added numbers of village in overview Villages  [ 35 ]</br>
23. Added oassis type in Profile / Overview </br>
24. Added in karte.php (vilview.tpl) if you are in vacation mode , you cannot send resource.</br>
25. Added in reports images for every report (reinforcement , attacks , resource , peace).</br>
26. Added new quests (alliance , main building 5 , granary level 3 , warehouse level 5 , palace or residence , 3 settlers , new village , wall).</br>
27. Winner decoded end time fixed , 403 , 404 , 500 errors are now decoded.</br>
28. Populate and regenerate oasis automation function added and fixed.</br>
29. Fixed palace , now cannot be build more than one palace / accout.</br>
30. Now you need a warehouse and granary level 20 to build great granary and great warehouse.</br>
31. Cannot send attacks and send resource to banned / vacation players.</br>
32. Now banned palyer and vacation mode player cannot recive resource from marketplace.</br>
33. Fix message replay , now can be viwed from who came message.</br>
34. Added in instalation Nature Regeneration Time.</br>
35. Fix oasis.tpl in instalation files.</br>
36. Fix ranking search from everyware.</br>
37. Fix "Finish all constructions for 2 gold." now you dont lose gold when you simply click.</br>
38. Fix bonus on artefacts , now show what bonus gives you.</br>
39. Fix settler bug , now you cannot train settlers if you dont have resource. And also modifyResource function updated.</br>
40. Fix brewerey now can be build only on capital.</br>
41. Fix treasurey and palace , now cannot be build on WW village.</br>
42. Fix greatbarraks.</br>
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