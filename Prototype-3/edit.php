<?php

include "employeManager.php";
$gestionEmployes = new GestionEmployes();

if(isset($_GET['id'])){
    $afficherValue = $gestionEmployes->RechercherParId($_GET['id']);
}

if(!empty($_POST)){
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $gestionEmployes->Modifier($id,$nom,$prenom,$age);
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modifier : </title>
</head>
<body>

<body>


<form action="" method="POST">
id :<input type="number" value=<?php echo $afficherValue->getId()?>  name="id" >                                                             
Prenom : <input type="text" value=<?php echo $afficherValue->getPrenom()?> name="prenom" >
Nom: <input type="text" value=<?php echo $afficherValue->getNom()?>  name="nom" >
date de naissance : <input type="date" value=<?php echo $afficherValue->getage()?>  name="age" >
   
<button type="submit">modifier</button>
</form>
