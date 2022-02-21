<?php 

class EmployeManager {


    // getEmplyoes =  pour affichage dans index.php
    public function getEmployes($connectData){
        $getData = 'SELECT id,prenom,nom,age FROM person';
        $resulta = mysqli_query($connectData,$getData);
        $data = mysqli_fetch_all($resulta,MYSQLI_ASSOC);
        return $data ; 
    }

    // insertEmploye = pour ajoute les information dans fichier insert.php 
    public function insertEmploye($connectData,$employe){
        $Prenom = $employe->getFirstName();
        $Nom = $employe->getLastName();
        $Age = $employe->getAge();

        $insertData = "INSERT INTO person(prenom,nom,age)
        VALUE ('$Prenom','$Nom','$Age')";
        
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

        $EditData = "UPDATE person 
                    SET prenom='$Prenom',nom='$Nom',age='$Age'
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