<?php
//page de tests de connexion à la BDD et des requetes
	//connexion ; debut de session
	$host = "localhost"; //var host = "localhost";
	$user = "root";
	$password = "";
	$database = "bob_bob";//nom de la base de données
	
	$conn = mysqli_connect($host, $user, $password, $database);
	
	// try{
		// if(!$conn){
			// die("Error 502 - " .mysqli_connect_error());//die("Error 502 - " + mysqli_connect_error());
		// }
	// }catch(){
		
		
	// }

	if(!$conn)//lorsqu'il n'y a qu'une seule ligne, les accolades ne sont pas obligatoires
		die("Error 502 - " .mysqli_connect_error());//die("Error 502 - " + mysqli_connect_error());
	else
		// echo "OK MIKE, YESSSS, CHUIS LA MEILLEURE !!";
	
	// LES REQUETES
	//les SELECTS
	$sql = "SELECT * FROM client";
	$result = mysqli_query($conn, $sql);
	//var_dump($result) ;//affiche un tableau vide

	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			//echo "nom : ".$row["nom"]."<br>";
		}
	}
	
	//les INSERT	
	$sql = "INSERT INTO `client` (`nom`, `prenom`, `adresse`) 
			VALUES ('rt', 'yyfrtyf', 'yftyft');";
	if(mysqli_query($conn, $sql)){
		echo "Ajout fait!!";
	}
	
	//Deconnexion; fin de session
	mysqli_close($conn);
	
?>