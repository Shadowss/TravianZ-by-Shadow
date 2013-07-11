 <?php
###################################################################################
#                                       Travian Clone                             #
#---------------------------------------------------------------------------------#
#                                              By : Sultan fixed by Shadow        #
#                                 fix : Units_-.php                               #
#                 message : fix Travian Clone 100% LODING  - negative crop        #
#---------------------------------------------------------------------------------#
###################################################################################
$is = $village->wid;
$result = mysql_query("SELECT * FROM ".TB_PREFIX."units WHERE vref=$is");
$units = mysql_fetch_array($result);
if($village->getProd("crop") <= '-1') {
            if ($units['u1'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u1` = `u1`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u2'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u2` = `u2`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u3'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u3` = `u3`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u4'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u4` = `u4`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u5'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u5` = `u5`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u6'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u6` = `u6`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u7'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u7` = `u7`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u8'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u8` = `u8`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u9'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u9` = `u9`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u10'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u10` = `u10`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u11'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u11` = `u11`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u12'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u12` = `u12`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u13'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u13` = `u13`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u14'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u14` = `u14`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u15'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u15` = `u15`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u16'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u16` = `u16`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u17'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u17` = `u17`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u18'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u18` = `u18`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u19'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u19` = `u19`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u20'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u20` = `u20`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u21'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u21` = `u21`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u22'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u22` = `u22`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u23'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u23` = `u23`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u24'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u24` = `u24`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u25'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u25` = `u25`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u26'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u26` = `u26`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u27'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u27` = `u27`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u28'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u28` = `u28`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u29'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u29` = `u29`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u30'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u30` = `u30`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u31'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u31` = `u31`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u32'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u32` = `u32`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u33'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u33` = `u33`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u34'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u34` = `u34`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u35'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u35` = `u35`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u36'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u36` = `u36`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u37'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u37` = `u37`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u38'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u38` = `u38`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u39'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u39` = `u39`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u40'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u40` = `u40`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u41'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u41` = `u41`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u42'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u42` = `u42`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u43'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u43` = `u43`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u44'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u44` = `u44`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u45'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u45` = `u45`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u46'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u46` = `u46`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u47'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u47` = `u47`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u48'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u48` = `u48`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u49'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u49` = `u49`- 1 where vref='".$village->wid."'"); 
            }
            if ($units['u50'] > 0)
           {
    mysql_query("UPDATE ".TB_PREFIX."units set `u50` = `u50`- 1 where vref='".$village->wid."'"); 
            }
}
?> 