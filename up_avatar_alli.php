<?php 

	$id_alli=($_POST['id']);



//apre la connessione al database
	include_once ("GameEngine/Account.php");
        
        mysql_connect(SQL_SERVER, SQL_USER, SQL_PASS);
        mysql_select_db(SQL_DB);
		
		$query = mysql_query("SELECT * FROM ".TB_PREFIX."aavatar WHERE aid  = '".$id_alli."'")or die(mysql_error());
		$check = mysql_num_rows($query);
		
if ($check==0){

	if (file_exists("avatar/" . $_FILES["uploadfile"]["name"])){
		
		$err=1;
		header("Location: allianz.php");
		
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
			header("Location: allianz.php");
			//die("Errore, file troppo grande: il massimo consentito è 1MB"); 
			} 
		else{ 
		
		$err=3;
		header("Location: allianz.php");
		// errore generico 
		//die("Errore, impossibile caricare il file"); 
			} 
		} 
		// Recupero delle informazioni sul file inviato
		$nome_file_temporaneo = $_FILES['uploadfile']['tmp_name'];
		$nome_file_vero = $_FILES['uploadfile']['name'];
		$tipo_file = $_FILES['uploadfile']['type'];
		// Query per inserire il file nel DB
		$query = "INSERT INTO  `".TB_PREFIX ."aavatar`(`aid`, `avatar`) VALUES ('$id_alli','$nome_file_vero') ";             
		mysql_query($query);
		header("Location: allianz.php");
	}
}
else
{


if (file_exists("avatar/" . $_FILES["uploadfile"]["name"])){
		
		$err=1;
		header("Location: allianz.php");
		
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
				header("Location: allianz.php");
				//die("Errore, file troppo grande: il massimo consentito è 200k"); 
				}  
			else{ 
				// errore generico 
				$err=3;
				header("Location: allianz.php");
				} 
			} 
			// Recupero delle informazioni sul file inviato
			$nome_file_temporaneo = $_FILES['uploadfile']['tmp_name'];
			$nome_file_vero = $_FILES['uploadfile']['name'];
			$tipo_file = $_FILES['uploadfile']['type'];
			// Query per inserire il file nel DB
			
			// Query Aggiorna il file nel DB
			$query="UPDATE `".TB_PREFIX ."aavatar` SET avatar='$nome_file_vero' WHERE aid='$id_alli'";
			mysql_query($query);
			// torna alla descrizione dell'ally
			header("Location: allianz.php");
		}
}






?> 
 