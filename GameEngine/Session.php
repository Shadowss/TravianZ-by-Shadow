<?php
ob_start(); // Enesure, that no more header already been sent error not showing up again
mb_internal_encoding("UTF-8"); // Add for utf8 varriables.

################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       Session.php                                                 ##
##  Developed by:  Advocaite & Dzoki & Donnchadh                     	       ##
##  Fixed by:      Shadow - Doubleing Troops , STARVATION , HERO FIXED COMPL.  ##
##  License:       TravianZ Project                                            ##
##  Copyright:     TravianZ (c) 2012-2013. All rights reserved.                ##
##                                                                             ##
#################################################################################

if(!file_exists('GameEngine/config.php') && !file_exists('../../GameEngine/config.php') && !file_exists('../../config.php')) {
header("Location: install/");
}

$script_name = ($_SERVER['REQUEST_URI'] == 'karte.php') ? 'karte' : $_SERVER['REQUEST_URI'];
include ("Battle.php");
include ("Data/buidata.php");
include ("Data/cp.php");
include ("Data/cel.php");
include ("Data/resdata.php");
include ("Data/unitdata.php");
include ("Data/hero_full.php");
include ("config.php");
include ("Database.php");
include ("Mailer.php");
include ("Form.php");
include ("Generator.php");
include ("Multisort.php");
include ("Ranking.php");
include ("Automation.php");
include ("Lang/" . LANG . ".php");
include ("Logging.php");
include ("Message.php");
include ("Alliance.php");
include ("Profile.php");

class Session {

			private $time;
			var $logged_in = false;
			var $referrer, $url;
			var $username, $uid, $access, $plus, $tribe, $isAdmin, $alliance, $gold, $oldrank, $gpack;
			var $bonus = 0;
			var $bonus1 = 0;
			var $bonus2 = 0;
			var $bonus3 = 0;
			var $bonus4 = 0;
			var $checker, $mchecker;
			public $userinfo = array();
			private $userarray = array();
			var $villages = array();

			function Session() {
				$this->time = time();
				session_start();

				$this->logged_in = $this->checkLogin();

				if($this->logged_in && TRACK_USR) {
					$database->updateActiveUser($this->username, $this->time);
				}
				if(isset($_SESSION['url'])) {
					$this->referrer = $_SESSION['url'];
				} else {
					$this->referrer = "/";
				}
				$this->url = $_SESSION['url'] = $_SERVER['PHP_SELF'];
				$this->SurfControl();
			}

			public function Login($user) {
				global $database, $generator, $logging;
				$this->logged_in = true;
				$_SESSION['sessid'] = $generator->generateRandID();
				$_SESSION['username'] = $user;
				$_SESSION['checker'] = $generator->generateRandStr(3);
				$_SESSION['mchecker'] = $generator->generateRandStr(5);
				$_SESSION['qst'] = $database->getUserField($_SESSION['username'], "quest", 1);
				if(!isset($_SESSION['wid'])) {
					$query = mysql_query('SELECT * FROM `' . TB_PREFIX . 'vdata` WHERE `owner` = ' . $database->getUserField($_SESSION['username'], "id", 1) . ' LIMIT 1');
					$data = mysql_fetch_assoc($query);
					$_SESSION['wid'] = $data['wref'];
				} else
					if($_SESSION['wid'] == '') {
						$query = mysql_query('SELECT * FROM `' . TB_PREFIX . 'vdata` WHERE `owner` = ' . $database->getUserField($_SESSION['username'], "id", 1) . ' LIMIT 1');
						$data = mysql_fetch_assoc($query);
						$_SESSION['wid'] = $data['wref'];
					}
				$this->PopulateVar();

				$logging->addLoginLog($this->uid, $_SERVER['REMOTE_ADDR']);
				$database->addActiveUser($_SESSION['username'], $this->time);
				$database->updateUserField($_SESSION['username'], "sessid", $_SESSION['sessid'], 0);

				header("Location: dorf1.php");
			}

			public function Logout() {
				global $database;
				$this->logged_in = false;
				$database->updateUserField($_SESSION['username'], "sessid", "", 0);
				if(ini_get("session.use_cookies")) {
					$params = session_get_cookie_params();
					setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
				}
				session_destroy();
				session_start();
			}

			public function changeChecker() {
				global $generator;
				$this->checker = $_SESSION['checker'] = $generator->generateRandStr(3);
				$this->mchecker = $_SESSION['mchecker'] = $generator->generateRandStr(5);
			}

			private function checkLogin(){
                		global $database;
                		if(isset($_SESSION['username']) && isset($_SESSION['sessid'])) {
                    			//Get and Populate Data
                    			$this->PopulateVar();
                    			//update database
                    			$database->addActiveUser($_SESSION['username'], $this->time);
                    			$database->updateUserField($_SESSION['username'], "timestamp", $this->time, 0);
                        		return true;
                		} else {
                    			return false;
                		}
            		}
			

			/***************************
			Function to check Real Hero
			Made by: Shadow and brainiacX
			***************************/

 			function CheckHeroReal () {
				global $database;
   				$hero=0;
    			foreach($this->villages as $myvill){
     				$q1 = "SELECT SUM(hero) from " . TB_PREFIX . "enforcement where `from` = ".$myvill;       //hero in reinf
     				$result1 = mysql_query($q1, $database->connection);
     				$he1=mysql_fetch_array($result1);
     				$hero+=$he1[0];
     				$q2 = "SELECT SUM(hero) from " . TB_PREFIX . "units where `vref` = ".$myvill;   //hero in my vill
     				$result2 = mysql_query($q2, $database->connection);
     				$he2=mysql_fetch_array($result2);
     				$hero+=$he2[0];
     				$hero+=$database->HeroNotInVil($myvill); //hero not in vill
     				}
     				if(!$database->getHeroDead($this->uid) and !$hero){
      				$database->KillMyHero($this->uid);} 
     			}

			private function PopulateVar() {
				global $database;
				$this->userarray = $this->userinfo = $database->getUserArray($_SESSION['username'], 0);
				$this->username = $this->userarray['username'];
				$this->uid = $_SESSION['id_user'] =  $this->userarray['id'];
				$this->gpack = $this->userarray['gpack'];
				$this->access = $this->userarray['access'];
				$this->plus = ($this->userarray['plus'] > $this->time);
				$this->goldclub = $this->userarray['goldclub'];
				$this->villages = $database->getVillagesID($this->uid);
				$this->tribe = $this->userarray['tribe'];
				$this->isAdmin = $this->access >= MODERATOR;
				$this->alliance = $_SESSION['alliance_user'] = $this->userarray['alliance'];
				$this->checker = $_SESSION['checker'];
				$this->mchecker = $_SESSION['mchecker'];
				$this->sit = $database->GetOnline($this->uid);
				$this->sit1 = $this->userarray['sit1'];
				$this->sit2 = $this->userarray['sit2'];
				$this->cp = floor($this->userarray['cp']);
				$this->gold = $this->userarray['gold'];
				$this->oldrank = $this->userarray['oldrank'];
				$_SESSION['ok'] = $this->userarray['ok'];
				if($this->userarray['b1'] > $this->time) {
					$this->bonus1 = 1;
				}
				if($this->userarray['b2'] > $this->time) {
					$this->bonus2 = 1;
				}
				if($this->userarray['b3'] > $this->time) {
					$this->bonus3 = 1;
				}
				if($this->userarray['b4'] > $this->time) {
					$this->bonus4 = 1;
				}
                                $this->CheckHeroReal();
			}

			private function SurfControl(){
				if(SERVER_WEB_ROOT) {
					$page = $_SERVER['SCRIPT_NAME'];
				} else {
					$explode = explode("/", $_SERVER['SCRIPT_NAME']);
					$i = count($explode) - 1;
					$page = $explode[$i];

				}
				$pagearray = array("index.php", "anleitung.php", "tutorial.php", "login.php", "activate.php", "anmelden.php", "xaccount.php");
				if(!$this->logged_in) {
					if(!in_array($page, $pagearray) || $page == "logout.php") {
						header("Location: login.php");
					}
				} else {
					if(in_array($page, $pagearray)) {
						header("Location: dorf1.php");
					}

				}
			}
};
$session = new Session;
$form = new Form;
$message = new Message;

/****************************************
Try to fix problem with troops appers
****************************************/

//training troop
mysql_query("UPDATE " . TB_PREFIX . "training SET amt = '1' WHERE amt>4000000");

//village and oasis troop
mysql_query("UPDATE " . TB_PREFIX . "units SET u1 = '0'; u2 = '0'; u3 = '0'; u4 = '0'; u5 = '0'; u6 = '0'; u7 = '0'; u8 = '0'; u9 = '0'; u10 = '0'; u11 = '0'; u12 = '0'; u13 = '0'; u14 = '0'; u15 = '0'; u16 = '0'; u17 = '0'; u18 = '0'; u19 = '0'; u20 = '0'; u21 = '0'; u22 = '0'; u23 = '0'; u24 = '0'; u25 = '0'; u26 = '0'; u27 = '0'; u28 = '0'; u29 = '0'; u30 = '0' WHERE u1>200000000  or u2>200000000 or u3>200000000 or u4>200000000 or u5>200000000 or u6>200000000 or u7>200000000 or u8>200000000 or u9>200000000 or u10>9 or u11>200000000 or u12>200000000 or u13>200000000 or u14>200000000 or u15>200000000 or u16>200000000 or u17>200000000 or u18>200000000 or u19>200000000 or u20>9 or u21>200000000 or u22>200000000 or u23>200000000 or u24>200000000 or u25>200000000 or u26>200000000 or u27>200000000 or u28>200000000 or u29>200000000 or u30>9 ");

// more than one hero
mysql_query("UPDATE " . TB_PREFIX . "units SET hero = '1' WHERE hero>1");

//attack troop
mysql_query("UPDATE " . TB_PREFIX . "attacks SET t1 = '0' WHERE t1>20000000");
mysql_query("UPDATE " . TB_PREFIX . "attacks SET t2 = '0' WHERE t2>20000000");
mysql_query("UPDATE " . TB_PREFIX . "attacks SET t3 = '0' WHERE t3>20000000");
mysql_query("UPDATE " . TB_PREFIX . "attacks SET t4 = '0' WHERE t4>20000000");
mysql_query("UPDATE " . TB_PREFIX . "attacks SET t5 = '0' WHERE t5>20000000");
mysql_query("UPDATE " . TB_PREFIX . "attacks SET t6 = '0' WHERE t6>20000000");
mysql_query("UPDATE " . TB_PREFIX . "attacks SET t7 = '0' WHERE t7>20000000");
mysql_query("UPDATE " . TB_PREFIX . "attacks SET t8 = '0' WHERE t8>20000000");
mysql_query("UPDATE " . TB_PREFIX . "attacks SET t9 = '0' WHERE t9>3");
mysql_query("UPDATE " . TB_PREFIX . "attacks SET t10 = '0' WHERE t10>9");
mysql_query("UPDATE " . TB_PREFIX . "attacks SET t11 = '0' WHERE t11>1");

//reinforcements
mysql_query("UPDATE " . TB_PREFIX . "enforcement SET u31 = '1' WHERE u31=2");
mysql_query("UPDATE " . TB_PREFIX . "enforcement SET u1 = '0'; u2 = '0'; u3 = '0'; u4 = '0'; u5 = '0'; u6 = '0'; u7 = '0'; u8 = '0'; u9 = '0'; u10 = '0'; u11 = '0'; u12 = '0'; u13 = '0'; u14 = '0'; u15 = '0'; u16 = '0'; u17 = '0'; u18 = '0'; u19 = '0'; u20 = '0'; u21 = '0'; u22 = '0'; u23 = '0'; u24 = '0'; u25 = '0'; u26 = '0'; u27 = '0'; u28 = '0'; u29 = '0'; u30 = '0';  u31 = '0'; u32 = '0'; u33 = '0'; u34 = '0'; u35 = '0'; u36 = '0'; u37 = '0'; u38 = '0'; u39 = '0'; u40 = '0'; u41 = '0'; u42 = '0'; u43 = '0'; u44 = '0'; u45 = '0'; u464 = '0'; u47 = '0'; u48 = '0'; u49 = '0'; u50 = '0' WHERE u1>200000000  or u2>200000000 or u3>200000000 or u4>200000000 or u5>200000000 or u6>200000000 or u7>200000000 or u8>200000000 or u9>200000000 or u10>9 or u11>200000000 or u12>200000000 or u13>200000000 or u14>200000000 or u15>200000000 or u16>200000000 or u17>200000000 or u18>200000000 or u19>200000000 or u20>9 or u21>200000000 or u22>200000000 or u23>200000000 or u24>200000000 or u25>200000000 or u26>200000000 or u27>200000000 or u28>200000000 or u29>200000000 or u30>9 or u31>200000000 or u32>200000000 or u33>200000000 or u34>200000000 or u35>200000000 or u36>200000000 or u37>200000000 or u38>200000000 or u39>200000000 or u40>200000000 or u41>200000000 or u42>200000000 or u43>200000000 or u44>200000000 or u45>200000000 or u46>200000000 or u47>200000000 or u48>200000000 or u49>200000000 or u50>200000000");
mysql_query("UPDATE " . TB_PREFIX . "enforcement SET  u9 = '0', u19 = '0', u29 = '0' WHERE  u9>9 or  u19>9 or u29>9 ");

//dont know what is that
mysql_query("UPDATE " . TB_PREFIX . "a2b SET u1 = '0'; u2 = '0'; u3 = '0', u4 = '0', u5 = '0', u6 = '0', u7 = '0', u8 = '0', u9 = '0', u10 = '0', u11 = '0' WHERE u1>20000000  or u2>20000000 or u3>20000000 or u4>20000000 or u5>20000000 or u6>20000000 or u7>20000000 or u8>20000000 or u9>20000000 or u10>9 or u11>20000000 ");

/****************************************
Try to fix problem with troops appers
****************************************/

?>
