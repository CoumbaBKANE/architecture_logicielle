<?php 
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=mglsi_news', 'root', '');
	}
	catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	}
 ?>