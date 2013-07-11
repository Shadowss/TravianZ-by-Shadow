<?php
$link = mysql_connect('hostname','username','password');
if (!$link) {
	die('Could not connect to MySQL: ' . mysql_error());
}
echo 'Connection OK'; mysql_close($link);
?>