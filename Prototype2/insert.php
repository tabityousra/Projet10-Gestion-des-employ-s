<?php

    include 'configuration.php';
    if(!empty($_POST)){
        $Prenom = $_POST['prenom'];
        $Nom = $_POST['nom'];
        $Age = $_POST['age'];
        $person = array($Prenom, $Nom, $Age);

        // sql insert query
        $sqlInsert= "INSERT INTO person(prenom,nom, age ) 
                                VALUES('$Prenom', '$Nom', '$Age')";
        
        mysqli_query($connect, $sqlInsert);
     
        header("Location: index.php");

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        
		<h3>Create a User</h3>
		<form action="" method='post'>
	
	<input type="text" name="prenom">
	<input type="text" name="nom">
	<input type="text" name="age">
	
	<button type='submit'>ajoute</button>
	</form>
	
</body>
</html>