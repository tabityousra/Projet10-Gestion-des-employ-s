<?php

include "employeManager.php";
// Trouver tous les employés depuis la base de données 
$gestionEmployes = new GestionEmployes();


if(!empty($_POST)){
	$employe = new Employe();
	$employe->setPrenom($_POST['prenom']);
	$employe->setNom($_POST['nom']);
	$employe->setage($_POST['age']);
	$gestionEmployes->Ajouter($employe);
	
	// Redirection vers la page index.php
	header("Location: index.php");
}
?>

<form action="" method="POST">                                                          
Prenom : <input type="text" name="prenom" >
Nom: <input type="text" name="nom" >
age : <input type="date"  name="age" >
   
<button type="submit">modifier</button>
</form>