 <?php 
$cancel = 0;
function RemoveTroops($u, $negative, $temp_crop, $vill_id)
{
global $cancel;
if ($cancel == 0)
{
$unit='u'.$u;
mysql_query("UPDATE ".TB_PREFIX."units set `$unit` = `$unit`-$negative where vref='".$vill_id."'"); 
$cancel++;
}
}
$select= mysql_query("SELECT * FROM ".TB_PREFIX."units WHERE vref=".$village->wid."")or die(mysql_error());
$troops = mysql_fetch_array($select);   
      for ($u = 1; $u<=30; $u++){
        if ($village->getProd("crop") < 0){                
                    if ($troops['u'.$u] > 0){
                    switch($u){
                    case 7:
                    $test_crop = $village->getProd("crop");
                    $test_crop= ($test_crop/3)*-1;
                    break;
                    
                     case 17:
                    $test_crop = $village->getProd("crop");
                    $test_crop= ($test_crop/3)*-1;
                    break;
                    
                     case 27:
                    $test_crop = $village->getProd("crop");
                    $test_crop= ($test_crop/3)*-1;
                    break;
                    
                    case 8:
                    $test_crop = $village->getProd("crop");
                    $test_crop= ($test_crop/6)*-1;
                    break;
                    
                    case 18:
                    $test_crop = $village->getProd("crop");
                    $test_crop= ($test_crop/6)*-1;
                    break;
                    
                    case 28:
                    $test_crop = $village->getProd("crop");
                    $test_crop= ($test_crop/6)*-1;
                    break;
                    
                    default:
                    $test_crop = $village->getProd("crop");
                    $test_crop*=-1;
                    
                    switch($session->tribe)
                    {
                    case 1:
                         if ($u == 4)
                         {
                         $test_crop = $village->getProd("crop");
                         $test_crop= ($test_crop/2)*-1;
                    
                         }
                         else if ($u == 5)
                         {
                         $test_crop = $village->getProd("crop");
                         $test_crop= ($test_crop/3)*-1;
                         
                         }
                         else if ($u == 6)
                         {
                            $test_crop = $village->getProd("crop");
                            $test_crop= ($test_crop/4)*-1;
                         
                         }
                         break;
                         
                    case 2:
                        
                         if ($u == 15)
                         {
                         $test_crop = $village->getProd("crop");
                         $test_crop= ($test_crop/2)*-1;
                         
                         }
                         else if ($u == 16)
                         {
                            $test_crop = $village->getProd("crop");
                            $test_crop= ($test_crop/3)*-1;
                         
                         }
                         break;
                    
                         
                    case 3:
                         if ($u == 23)
                         {
                         $test_crop = $village->getProd("crop");
                         $test_crop= ($test_crop/2)*-1;
                    
                         }
                         else if ($u == 24)
                         {
                         $test_crop = $village->getProd("crop");
                         $test_crop= ($test_crop/2)*-1;
                         
                         } else if ($u == 25)
                         {
                         $test_crop = $village->getProd("crop");
                         $test_crop= ($test_crop/2)*-1;
                         
                         } else if ($u == 26)
                         {
                         $test_crop = $village->getProd("crop");
                         $test_crop= ($test_crop/3)*-1;
                         
                         }
                        break;
                                         
                    }
                    
                    
                    break;
                    
                    }
                    
                    if ($test_crop >= $troops['u'.$u])
                    {
                    $negative = $troops['u'.$u];
                    }else{
                    $negative = $test_crop;
                    }
                      RemoveTroops($u, $negative, $village->getProd("crop"),$village->wid);
                    }                   
                   
        }
            
}

               
?> 