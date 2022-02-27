<?php 

class EmployeManager {


    // getEmployes =  pour affichage dans index.php
    public function getEmployes($connectData){
        $getData = 'SELECT id,prenom,nom,age,departement,fonction,salaire,photo FROM person';
        $resulta = mysqli_query($connectData,$getData);
        $data = mysqli_fetch_all($resulta,MYSQLI_ASSOC);
        return $data ; 
    }

    // insertEmploye = pour ajoute les information dans fichier insert.php 
    public function insertEmploye($connectData,$employe){
        $Prenom = $employe->getFirstName();
        $Nom = $employe->getLastName();
        $Age = $employe->getAge();
        $Fonction = $employe->setFonction();
        $Photo = $employe->setPhoto();
        $Salaire = $employe->getSalaire();
        $Departement = $employe->getDepartement();

        $insertData = "INSERT INTO person(prenom,nom,age,departement,fonction,salaire,photo)
        VALUE ('$Prenom','$Nom','$Age''$Fonction''$Photo''$Salaire''$Departement')";
        
        mysqli_query($connectData,$insertData);
    }

    
    // SelectRowEdit = pour selection row et afficher dans input 
    public function SelectRowEdit($connectData,$id){
        $getRow = "SELECT * FROM person WHERE id=$id";
        $resulta= mysqli_query($connectData, $getRow);
       // musqli_fetch_assoc = change data  en array 
        $data = mysqli_fetch_assoc($resulta);
        return $data;
    } 


    // EditEmploye = modification row
    public function EditEmloye($connectData,$employe,$id){
        $Prenom = $employe->getFirstName();
        $Nom = $employe->getLastName();
        $Age = $employe->getAge();
        $Fonction = $employe->setFonction();
        $Photo = $employe->setPhoto();
        $Salaire = $employe->getSalaire();
        $Departement = $employe->getDepartement();

        $EditData = "UPDATE person 
                    SET prenom='$Prenom',nom='$Nom',age='$Age',fonction='$Fonction',photo='$Photo',salaire='$Salaire',departement='$Departement'
                    WHERE id=$id";

        mysqli_query($connectData,$EditData);

    }    

    
    // DeleteEmloye = pour supprime row 
    public function DeleteEmploye($connectData,$id){
        $DeletRow = "DELETE FROM person where id=$id";
        mysqli_query($connectData,$DeletRow);
    }

}
?>