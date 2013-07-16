<?php
if(isset($aid)) {
$aid = $aid;
}
else {
$aid = $session->alliance;
}
$allianceinfo = $database->getAlliance($aid);
echo "<h1>".$allianceinfo['id']." - ".$allianceinfo['tag']." - ".$allianceinfo['name']."</h1>";
include("alli_menu.tpl"); 
?>
 
<form name="upload" method="post" action="up_avatar_alli.php" enctype="multipart/form-data"> 
<input type="hidden" name="id" value="<?php echo $allianceinfo['id']; ?>" />
<input type="hidden" name="MAX_FILE_SIZE" value="200000"/>
<table cellpadding="1" cellspacing="1" id="up_avatar_alli" >
  <!--DWLayoutTable-->
<thead><tr>
    <th colspan="2">Upload Avatar Alli </th>
</tr></thead><tbody>
<tr>
    <th>Avatar</th>
    <td><input type="file" name="uploadfile"></td>
</tr>

<tr>
    <th><!--DWLayoutEmptyCell-->&nbsp;</th>
    <td><div align="center">
      <input name="Upload" type="submit" id="Upload" value="Upload">
    </div></td>
</tr>
<tr>
    <th height="1"></th>
    <td></td>
</tr></tbody></table>


</form>


