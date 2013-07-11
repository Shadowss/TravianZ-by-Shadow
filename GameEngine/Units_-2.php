<?php
   /**
   * alot smaller
   * author Advocaite
   * 
   * @var YOLO
   */
$is = $village->wid;
$rcount = count(mysql_query("SELECT * FROM ".TB_PREFIX."enforcement where vref=$is"));
$result = mysql_query("SELECT * FROM ".TB_PREFIX."units where vref=$is");
while($unit = mysql_fetch_assoc($result)){
    if($rcount == 0) {
        if($village->getProd("crop") <= '-1000000000') {
            for ($i = 0; $i <= 30; $i++) {
                if ($unit['u'.$i] > 0) { $minunit = rand(1000,1000000);
                    mysql_query("UPDATE ".TB_PREFIX."units set `u".$i."` = `u".$i."`- ".$minunit." where vref='".$village->wid."'"); }
            }
        }
        if($village->getProd("crop") <= '-1000000') {
            for ($i = 0; $i <= 30; $i++) {
                if ($unit['u'.$i] > 0) { $minunit = rand(10,1000);
                    mysql_query("UPDATE ".TB_PREFIX."units set `u".$i."` = `u".$i."`- ".$minunit." where vref='".$village->wid."'"); }
            }
        }
        if($village->getProd("crop") <= '-1000') {
            for ($i = 0; $i <= 30; $i++) {
                if ($unit['u'.$i] > 0) { $minunit = rand(1,10);
                    mysql_query("UPDATE ".TB_PREFIX."units set `u".$i."` = `u".$i."`- ".$minunit." where vref='".$village->wid."'"); }
            }
        }
    } else {
        if($village->getProd("crop") <= '-1000000000') {
            for ($i = 0; $i <= 30; $i++) {
                if ($unit['u'.$i] > 0) { $minunit = rand(500,500000);
                    mysql_query("UPDATE ".TB_PREFIX."enforcement set `u".$i."` = `u".$i."`- ".$minunit." where vref='".$village->wid."'"); 
                    mysql_query("UPDATE ".TB_PREFIX."units set `u".$i."` = `u".$i."`- ".$minunit." where vref='".$village->wid."'"); }
            }
        }
        if($village->getProd("crop") <= '-1000000') {
            for ($i = 0; $i <= 30; $i++) {
                if ($unit['u'.$i] > 0) { $minunit = rand(5,500);
                    mysql_query("UPDATE ".TB_PREFIX."enforcement set `u".$i."` = `u".$i."`- ".$minunit." where vref='".$village->wid."'"); 
                    mysql_query("UPDATE ".TB_PREFIX."units set `u".$i."` = `u".$i."`- ".$minunit." where vref='".$village->wid."'"); }
            }
        }
        if($village->getProd("crop") <= '-1000') {
            for ($i = 0; $i <= 30; $i++) {
                if ($unit['u'.$i] > 0) { $minunit = rand(1,5);
                    mysql_query("UPDATE ".TB_PREFIX."enforcement set `u".$i."` = `u".$i."`- ".$minunit." where vref='".$village->wid."'"); 
                    mysql_query("UPDATE ".TB_PREFIX."units set `u".$i."` = `u".$i."`- ".$minunit." where vref='".$village->wid."'"); }
            }
        }
    }

    $maxunit = 150000000000;
    for ($i = 0; $i <= 50; $i++) {
        if ($unit['u'.$i] > $maxunit) {
            mysql_query("UPDATE ".TB_PREFIX."units set `u".$i."` = `u".$i."`* 0 where vref='".$village->wid."'"); }
    }
    
    if ($unit['hero'] > 1) {
        mysql_query("UPDATE ".TB_PREFIX."units set `hero` = 1 where vref='".$village->wid."'"); }

}  
?>