 <?php
/**
 * @package TravianX
 * @author Genesis 
 * @copyright You may not copy this code to any other sites than RageZone.com
 * @name Multiaccount searcher
 */

include ("GameEngine/Account.php");
define('PREFIX', TB_PREFIX);
if ($session->access < ADMIN)
    die("This is only for admins mate :) Admin is access level ".ADMIN." and you've got only access level ".$session->access);  


$logins = mysql_query("SELECT * FROM ".PREFIX."login_log");
while($login = mysql_fetch_assoc($logins)){
    if (count($login_list)){
        if (!isset($login_list[$login['ip']][$login['uid']])){
            $login_list[$login['ip']][$login['uid']] = $login;
        }
    }
    else{
        $login_list[$login['ip']][$login['uid']] = $login;
    }    
}

foreach($login_list as $ip => $data){
    if (count($login_list[$ip]) > 1){
        $multi_accounts[$ip] = $data;  
    }
}


echo '<table>';
foreach($multi_accounts as $uid => $data){
    $output = "";
    foreach($data as $dataB){
        $data_new[] = $dataB;
    }
    
    foreach($data_new as $index => $multiaccount_data){
        $userdata[] = mysql_fetch_assoc(mysql_query("SELECT * FROM ".PREFIX."users WHERE id = ".$multiaccount_data['uid']));    
    }
    
    
    echo '<tr>
        <td>
            ';
    
    foreach($userdata as $u){
        $output[] = '<a href="spieler.php?uid='.$u['id'].'">'.$u['username'].'</a>';
    }  
    
    echo $output = implode(' and ', $output);
    
    echo '
        </td>
        <td>
            with IP '.$data_new[0]['ip'].'
        </td>
    </tr>';
    
}
echo '</table>'; 