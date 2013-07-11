<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////
//                                             TRAVIANX                                             //
//            Only for advanced users, do not edit if you dont know what are you doing!             //
//                                Made by: Dzoki & Dixie (TravianX)                                 //
//                              - TravianX = Travian Clone Project -                                //
//                                 DO NOT REMOVE COPYRIGHT NOTICE!                                  //
//////////////////////////////////////////////////////////////////////////////////////////////////////
									//                         //
									//         Romania         //
									//      Author: Shadow     //
									/////////////////////////////

//MAIN MENU
define("TRIBE1","Romani");
define("TRIBE2","Barbari");
define("TRIBE3","Daci");
define("TRIBE4","Natura");
define("TRIBE5","Natari");
define("TRIBE6","Animale");

define("HOME","Prima Pagina");
define("INSTRUCT","Instructiuni");
define("ADMIN_PANEL","Pagina Admin");
define("MASS_MESSAGE","Mass Message");
define("LOGOUT","Iesire");
define("PROFILE","Profil");
define("SUPPORT","Support");
define("UPDATE_T_10","Update Top 10");
define("SYSTEM_MESSAGE","System message");
define("TRAVIAN_PLUS","Travian <b><span class=\"plus_g\">P</span><span class=\"plus_o\">l</span><span class=\"plus_g\">u</span><span class=\"plus_o\">s</span></span></span></b>");
define("CONTACT","Contacteaza-ne!");
define("GAME_RULES","Regilile Jocului");

//MENU
define("REG","Inregistreaza-te");
define("FORUM","Forum");
define("CHAT","Chat");
define("IMPRINT","Imprint");
define("MORE_LINKS","More Links");
define("TOUR","Game Tour");


//ERRORS
define("USRNM_EMPTY","(Username gol)");
define("USRNM_TAKEN","(Numele este deja utilizat.)");
define("USRNM_SHORT","(min. ".USRNM_MIN_LENGTH." caractere)");
define("USRNM_CHAR","(Caractere invalide)");
define("PW_EMPTY","(Parola goala)");
define("PW_SHORT","(min. ".PW_MIN_LENGTH." caractere)");
define("PW_INSECURE","(Parola nesigura. Te rugam sa alegi o parola mai securizata.)");
define("EMAIL_EMPTY","(Email gol)");
define("EMAIL_INVALID","(Adresa de email invalida)");
define("EMAIL_TAKEN","(Email-ul este deja utilizat)");
define("TRIBE_EMPTY","<li>Te rugam alege un trib.</li>");
define("AGREE_ERROR","<li>Trebuie sa accepti regulile jocului precum si termenii & conditiile pentru a te putea inregistra.</li>");
define("LOGIN_USR_EMPTY","Introduce nume.");
define("LOGIN_PASS_EMPTY","Introduce parola.");
define("EMAIL_ERROR","Emailul nu corespunde cu cel existent");
define("PASS_MISMATCH","Parola nu corespunde");
define("ALLI_OWNER","Te rugam stabileste un administrator de alianta inaintea stergerii.");
define("SIT_ERROR","Inlocuitor deja setat");
define("USR_NT_FOUND","Numele nu exista.");
define("LOGIN_PW_ERROR","Parola este gresite.");
define("WEL_TOPIC","Informatii si trucuri utile");
define("ATAG_EMPTY","Nick gol");
define("ANAME_EMPTY","Nume gol");
define("ATAG_EXIST","Nick ocupat");
define("ANAME_EXIST","Nume ocupat");
define("NOT_OPENED_YET","Serverul nu a inceput deja.");
define("REGISTER_CLOSED","Inregistrarile sunt inchise. Nu te poti inregistra pe acest server.");
define("NAME_EMPTY","Te rugam introduce nume");
define("NAME_NO_EXIST","Nu exista niciun utilizator cu acest nume ");
define("ID_NO_EXIST","Nu exista niciun utilizator cu acest id ");
define("SAME_NAME","Nu te poti invita pe sine");
define("ALREADY_INVITED"," deja invitat");
define("ALREADY_IN_ALLY"," deja in alianta");

//COPYRIGHT
define("TRAVIAN_COPYRIGHT","Travian ro1 100% Open Source.");

//BUILD.TPL
define("CUR_PROD","Productie curenta");
define("NEXT_PROD","Productie la nivelul ");

//BUILDINGS
define("B1","Padure");
define("B1_DESC","Taietorul de lemne taie copacii pentru a produce cherestea. Cu cat se extinde taietorul de lemne mai mult cu atat cheresteaua produsa de acesta este mai mare.");
define("B2","Put de lut");
define("B2_DESC","Lut-ul este produs aici. Crescandu-i nivelul vei produce mai mult lut.");
define("B3","Mina de fier");
define("B3_DESC","Aici minerii produc cea mai pretioasa resursa , fierul. Crescand nivelul minei vei creste productia de fier.");
define("B4","Hrana");
define("B4_DESC","Mancarea populatiei tale este produsa aici. Crescand nivelul fermei vei mari nivelul de hrana.");

//DORF1
define("LUMBER","Lemn");
define("CLAY","Lut");
define("IRON","Fier");
define("CROP","Hrana");
define("LEVEL","Nivel");
define("CROP_COM",de hrana." Consum");
define("PER_HR","pe ora");
define("PROD_HEADER","Productie");
define("MULTI_V_HEADER","Sat");
define("ANNOUNCEMENT","Anunt");
define("GO2MY_VILLAGE","Du-te la satul meu");
define("VILLAGE_CENTER","Centrul satului");
define("FINISH_GOLD","Termina toate constructiile si cercetarile care le-ai comandat in acest sat imediat pentru 2 AUR?");
define("WAITING_LOOP","(asteapta)");
define("HRS","(ore.)");
define("DONE_AT","gata la");
define("CANCEL","anuleaza");
define("LOYALTY","Loialitate:");
define("CALCULATED_IN","Calculat in");
define("SEVER_TIME","Timpul Serverului:");

//QUEST
define("Q_CONTINUE","Continua cu urmatoarea cerinta.");
define("Q_REWARD","Recompensa ta:");
define("Q0","Bine ai venit la ");
define("Q0_DESC","As I see you have been made chieftain of this little village. I will be your counselor for the first few days and never leave your (right hand) side.");
define("Q0_OPT1","Catre prima cerinta.");
define("Q0_OPT2","Look around on your own.");
define("Q0_OPT3","Joaca fara cerinte.");

define("Q1","Task 1: Woodcutter");
define("Q1_DESC","There are four green forests around your village. Construct a woodcutter on one of them. Lumber is an important resource for our new settlement.");
define("Q1_ORDER","Order:<\/p>Construct a woodcutter.");
define("Q1_RESP","Yes, that way you gain more lumber.I helped a bit and completed the order instantly.");
define("Q1_REWARD","Woodcutter instantly completed.");

define("Q2","Task 2: Crop");
define("Q2_DESC","Now your subjects are hungry from working all day. Extend a cropland to improve your subjects' supply. Come back here once the building is complete.");
define("Q2_ORDER","Order:<\/p>Extend one cropland.");
define("Q2_RESP","Very good. Now your subjects have enough to eat again...");

define("Q3","Task 3: Your Village's Name");
define("Q3_DESC","Creative as you are you can grant your village the ultimate name.\r\n<br \/><br \/>\r\nClick on 'profile' in the left hand menu and then select 'change profile'...");
define("Q3_ORDER","Order:<\/p>Change your village's name to something nice.");
define("Q3_RESP","Wow, a great name for their village. It could have been the name of my village!...");

define("Q4","Task 4: Other Players");
define("Q4_DESC","In ". SERVER_NAME ." you play along with billions of other players. Click 'statistics' in the top menu to look up your rank and enter it here.");
define("Q4_ORDER","Order:<\/p>Look for your rank in the statistics and enter it here.");
define("Q4_BUTN","complete task");
define("Q4_RESP","Exactly! That's your rank.");

define("Q5","Task 5: Two Building Orders");
define("Q5_DESC","Build an iron mine and a clay pit. Of iron and clay one can never have enough.");
define("Q5_ORDER","Order:<\/p><ul><li>Extend one iron mine.<\/li><li>Extend one clay pit.<\/li><\/ul>");
define("Q5_RESP","As you noticed, building orders take rather long. The world of ". SERVER_NAME ." will continue to spin even if you are offline. Even in a few months there will be many new things for you to discover.\r\n<br \/><br \/>\r\nThe best thing to do is occasionally checking your village and giving you subjects new tasks to do.");

define("Q6","Message From The Taskmaster");
define("Q6_DESC","You are to be informed that a nice reward is waiting for you at the taskmaster.<br /><br />Hint: The message has been generated automatically. An answer is not necessary.");

define("Q5","Task 5: Two Building Orders");
define("Q5_DESC","Build an iron mine and a clay pit. Of iron and clay one can never have enough.");
define("Q5_ORDER","Order:<\/p><ul><li>Extend one iron mine.<\/li><li>Extend one clay pit.<\/li><\/ul>");
define("Q5_RESP","As you noticed, building orders take rather long. The world of ". SERVER_NAME ." will continue to spin even if you are offline. Even in a few months there will be many new things for you to discover.\r\n<br \/><br \/>\r\nThe best thing to do is occasionally checking your village and giving you subjects new tasks to do.");

//======================================================//
//================ UNITS - DO NOT EDIT! ================//
//======================================================//
define("U0","Hero");

//ROMAN UNITS
define("U1","Legionar");
define("U2","Pretorian");
define("U3","Imperian");
define("U4","Equites Legati");
define("U5","Equites Imperatoris");
define("U6","Equites Caesaris");
define("U7","Berbec");
define("U8","Catapulta");
define("U9","Senator");
define("U10","Colonist");

//TEUTON UNITS
define("U11","Clubswinger");
define("U12","Spearman");
define("U13","Executor");
define("U14","Spion");
define("U15","Paladin");
define("U16","Teutonic Knight");
define("U17","Berbec");
define("U18","Catapulta");
define("U19","General");
define("U20","Colonist");

//GAUL UNITS
define("U21","Phalanx");
define("U22","Swordsman");
define("U23","Pathfinder");
define("U24","Theutates Thunder");
define("U25","Druidrider");
define("U26","Haeduan");
define("U27","Berbec");
define("U28","Catapulta");
define("U29","Capetenie");
define("U30","Settler");
define("U99","Trap");

//NATURE UNITS
define("U31","Soarece");
define("U32","Paianjen");
define("U33","Sarpe");
define("U34","Bat");
define("U35","Wild Boar");
define("U36","Lup");
define("U37","Urs");
define("U38","Crocodil");
define("U39","Tigru");
define("U40","Elefant");

//NATARS UNITS
define("U41","Pikeman");
define("U42","Thorned Warrior");
define("U43","Guardsman");
define("U44","Birds Of Prey");
define("U45","Axerider");
define("U46","Natarian Knight");
define("U47","War Elephant");
define("U48","Ballista");
define("U49","Natarian Emperor");
define("U50","Natarian Settler");

//MONSTER UNITS
define("U51","Monster Peon");
define("U52","Monster Hunter");
define("U53","Monster Warrior");
define("U54","Ghost");
define("U55","Monster Steed");
define("U56","Monster War Steed");
define("U57","Monster Ram");
define("U58","Monster Catapult");
define("U59","Monster Chief");
define("U60","Monster Settler");

// RESOURCES
define("R1","Lemn");
define("R2","Lut");
define("R3","Fier");
define("R4","Hrana");

//INDEX.php
define("LOGIN","Logare");
define("PLAYERS","Jucatori");
define("ACTIVE","Activi");
define("ONLINE","Online");
define("TUTORIAL","Tutorial");
define("PLAYER_STATISTICS","Statistici jucatori");
define("TOTAL_PLAYERS","".PLAYERS." in total");
define("ACTIVE_PLAYERS","Jucatori activi");
define("ONLINE_PLAYERS","".PLAYERS." online");
define("MP_STRATEGY_GAME","".SERVER_NAME." - the multiplayer strategy game");
define("WHAT_IS","".SERVER_NAME." is one of the most popular browser games in the world. As a player in ".SERVER_NAME.", you will build your own empire, recruit a mighty army, and fight with your allies for game world hegemony.");
define("REGISTER_FOR_FREE","Inregistreaza-te aici gratuit!");
define("LATEST_GAME_WORLD","Ulitma lume de joc");
define("LATEST_GAME_WORLD2","Register on the latest<br/>game world and enjoy<br/>the advantages of<br/>being one of the<br/>first players.");
define("PLAY_NOW","Joaca ".SERVER_NAME." acum");
define("LEARN_MORE","Invata mai multe <br/>despre ".SERVER_NAME."!");
define("LEARN_MORE2","Now with a revolutionised<br>server system, completely new<br>graphics <br>This clone is The Shiz!");
define("COMUNITY","Comunitate");
define("BECOME_COMUNITY","Devin-o parte a comunitatii noastre!");
define("BECOME_COMUNITY2","Become a part of one of<br>the biggest gaming<br>communities in the<br>world.");
define("NEWS","Stiri");
define("SCREENSHOTS","Screenshots");
define("LEARN1","Upgrade your fields and mines to increase your resource production. You will need resources to construct buildings and train soldiers.");
define("LEARN2","Construct and expand the buildings in your village. Buildings improve your overall infrastructure, increase your resource production and allow you to research, train and upgrade your troops.");
define("LEARN3","View and interact with your surroundings. You can make new friends or new enemies, make use of the nearby oases and observe as your empire grows and becomes stronger.");
define("LEARN4","Follow your improvement and success and compare yourself to other players. Look at the Top 10 rankings and fight to win a weekly medal.");
define("LEARN5","Receive detailed reports about your adventures, trades and battles. Don't forget to check the brand new reports about the happenings taking place in your surroundings.");
define("LEARN6","Exchange information and conduct diplomacy with other players. Always remember that communication is the key to winning new friends and solving old conflicts.");
define("LOGIN_TO","Intra in ". SERVER_NAME);
define("REGIN_TO","Inregistreaza-te in ". SERVER_NAME);
define("P_ONLINE","Jucatori online: ");
define("P_TOTAL","Jucatori in total: ");
define("CHOOSE","Te rugam alege un server.");
define("STARTED"," Serverul a inceput cu ". round((time()-COMMENCE)/86400) ." zile in urma.");

//ANMELDEN.php
define("NICKNAME","Nick");
define("EMAIL","Email");
define("PASSWORD","Paroma");
define("ROMANS","Romani");
define("TEUTONS","Barbari");
define("GAULS","Daci");
define("NW","Nord Vest");
define("NE","Nord Est");
define("SW","Sud vest");
define("SE","Sud est");
define("RANDOM","aleatoriu");
define("ACCEPT_RULES"," Accept regulile jocului precum termenii si conditiile.");
define("ONE_PER_SERVER","Fiecare jucator poate avea DOAR UN SINGUR CONT per server.");
define("BEFORE_REGISTER","Inainte de a inregistra contul ar trebui sa citesti <a href='../anleitung.php' target='_blank'>instructiunile</a> Travian pentru a vedea specificatiile , avantajele precum si dezavantajele celor trei triburi.");
define("BUILDING_UPGRADING","Constructie:");
define("HOURS","ore");


//ATTACKS ETC.
define("TROOP_MOVEMENTS","Trupe in miscare:");
define("ARRIVING_REINF_TROOPS","Arriving reinforcing troops");
define("ARRIVING_REINF_TROOPS_SHORT","Reinf.");
define("OWN_ATTACKING_TROOPS","Trupe de atac");
define("ATTACK","Atac");
define("OWN_REINFORCING_TROOPS","Own reinforcing troops");
define("TROOPS_DORF","Trupe:");


//LOGIN.php
define("COOKIES","You must have cookies enabled to be able to log in. If you share this computer with other people you should log out after each session for your own safety.");
define("NAME","Nume");
define("PW_FORGOTTEN","Ai uitat parola?");
define("PW_REQUEST","Poti solicita una trimitand-o pe email-ul tau.");
define("PW_GENERATE","Genereaza o noua parola.");
define("EMAIL_NOT_VERIFIED","Email-ul este neverificat!");
define("EMAIL_FOLLOW","Urmareste urmatorul link pentru a activa contul.");
define("VERIFY_EMAIL","Verifica Email-ul.");
define("SERVER_STARTS_IN","Serverul va porni in: ");
define("START_NOW","PORNESTE ACUM");


//404.php
define("NOTHING_HERE","Nimic aici!");
define("WE_LOOKED","We looked 404 times already but can't find anything");

//TIME RELATED
define("CALCULATED","Calculated in");
define("SERVER_TIME","Server time:");

//MASSMESSAGE.php
define("MASS","Continutul mesajului");
define("MASS_SUBJECT","Subiect:");
define("MASS_COLOR","Culoarea mesajului:");
define("MASS_REQUIRED","Toate casutele obligatorii");
define("MASS_UNITS","Images (units):");
define("MASS_SHOWHIDE","Vezi/Ascunde");
define("MASS_READ","Read this: after adding smilie, you have to add left or right after number otherwise image will won't work");
define("MASS_CONFIRM","Confirmare");
define("MASS_REALLY","Chiar vrei sa trimiti MassIGM?");
define("MASS_ABORT","Anuleaza acum");
define("MASS_SENT","Mass IGM trimis");


/*
|--------------------------------------------------------------------------
|   Index
|--------------------------------------------------------------------------
*/

	   $lang['index'][0][1] = "Bine ati venit pe " . SERVER_NAME . "";
	   $lang['index'][0][2] = "Manual";
	   $lang['index'][0][3] = "Joaca acum , gratis!";
	   $lang['index'][0][4] = "Ce este " . SERVER_NAME . "";
	   $lang['index'][0][5] = "" . SERVER_NAME . " is a <b>browser game</b> featuring an engaging ancient world with thousands of other real players.</p><p>It`s <strong>free to play</strong> and requires <strong>no downloads</strong>.";
	   $lang['index'][0][6] = "Apasa aici pentru a juca " . SERVER_NAME . "";
	   $lang['index'][0][7] = "Total jucatori";
	   $lang['index'][0][8] = "Jucatori activi";
	   $lang['index'][0][9] = "Jucatori online";
	   $lang['index'][0][10] = "Despre joc";
	   $lang['index'][0][11] = "You will begin as the chief of a tiny village and will embark on an exciting quest.";
	   $lang['index'][0][12] = "Build up villages, wage wars or establish trade routes with your neighbours.";
	   $lang['index'][0][13] = "Play with and against thousands of other real players and conquer the the world of Travian.";
	   $lang['index'][0][14] = "Stiri";
	   $lang['index'][0][15] = "FAQ";
	   $lang['index'][0][16] = "Screenshots";
	   $lang['forum'] = "Forum";
	   $lang['register'] = "Inregistrare";
	   $lang['login'] = "Intrare";


?>
