<?php 

	$user=($_POST['uid']);

//apre la connessione al database
	include_once ("GameEngine/Account.php");
        
        mysql_connect(SQL_SERVER, SQL_USER, SQL_PASS);
        mysql_select_db(SQL_DB);
		
		$query = mysql_query("SELECT * FROM ".TB_PREFIX."uavatar WHERE uid  = '".$user."'")or die(mysql_error());
		$check = mysql_num_rows($query);

if ($check==0){

	if (file_exists("avatar/" . $_FILES["uploadfile"]["name"])){
		
		$err=1;
		header("Location: spieler.php?s=5&err=".$err);
		
		}
		else
		{
		// controllo che non ci siano stati errori nell'upload (codice = 0)  
		if ($_FILES['uploadfile']['error'] == 0){ 
			copy($_FILES['uploadfile']['tmp_name'], "avatar/".$_FILES['uploadfile']['name']) or die(mysql_error()); 
			} 
		else{ 
			// controllo il tipo di errore 
			if ($_FILES['uploadfile']['error'] == 2){ 
			// errore, file troppo grande (> 1MB) 
			$err=2;
			header("Location: spieler.php?s=5&err=".$err);
			//die("Errore, file troppo grande: il massimo consentito è 1MB"); 
			} 
		else{ 
		
		$err=3;
		header("Location: spieler.php?s=5&err=".$err);
		// errore generico 
		//die("Errore, impossibile caricare il file"); 
			} 
		} 
		// Recupero delle informazioni sul file inviato
		$nome_file_temporaneo = $_FILES['uploadfile']['tmp_name'];
		$nome_file_vero = $_FILES['uploadfile']['name'];
		$tipo_file = $_FILES['uploadfile']['type'];
		// Query per inserire il file nel DB
		$query = "INSERT INTO  `".TB_PREFIX ."uavatar`(`uid`, `avatar`) VALUES ('$user','$nome_file_vero') ";             
		mysql_query($query);
		header("Location: spieler.php?uid=".$user);
	}
}
else
{


if (file_exists("avatar/" . $_FILES["uploadfile"]["name"])){
		
		$err=1;
		header("Location: spieler.php?s=5&err=".$err);
		
		}
		else
		{

			// controllo che non ci siano stati errori nell'upload (codice = 0)  
			if ($_FILES['uploadfile']['error'] == 0){ 
			copy($_FILES['uploadfile']['tmp_name'], "avatar/".$_FILES['uploadfile']['name']) or die(mysql_error()); 
			} 
			else
			{ 
				if ($_FILES['uploadfile']['error'] == 2){ 
				// errore, file troppo grande (> 200k) 
				$err=2;
				header("Location: spieler.php?s=5&err=".$err);
				//die("Errore, file troppo grande: il massimo consentito è 200k"); 
				}  
			else{ 
				// errore generico 
				$err=3;
				header("Location: spieler.php?s=5&err=".$err); 
				} 
			} 
			// Recupero delle informazioni sul file inviato
			$nome_file_temporaneo = $_FILES['uploadfile']['tmp_name'];
			$nome_file_vero = $_FILES['uploadfile']['name'];
			$tipo_file = $_FILES['uploadfile']['type'];
			// Query per inserire il file nel DB
			
			// Query Aggiorna il file nel DB
			$query="UPDATE `".TB_PREFIX ."uavatar` SET avatar='$nome_file_vero' WHERE uid='$user'";
			mysql_query($query);
			header("Location: spieler.php?uid=".$user);
		}
}






?> 

