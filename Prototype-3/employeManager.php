<?php
 include 'employe.php';
class GestionEmployes{

    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'test', 'test1234', 'demo');
           
         
       
        
        return $this->Connection;
        
    }
    
    public function Ajouter($employe){

        $nom = $employe->getNom();
        $prenom = $employe->getPrenom();
        $age = $employe->getage();
        // requête SQL
        $insertRow="INSERT INTO person(nom, prenom, age) 
                                VALUES('$nom', '$prenom', '$age')";

        mysqli_query($this->getConnection(), $insertRow);
    }

    

    public function afficher(){
        $SelctRow = 'SELECT id, nom, prenom, age FROM person';
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $employes_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($employes_data as $value_Data) {
            $employe = new Employe();
            $employe->setId($value_Data['id']);
            $employe->setNom($value_Data['nom']);
            $employe->setPrenom ($value_Data['prenom']);
            $employe->setage ($value_Data['age']);
            array_push($TableData, $employe);
        }
        return $TableData;
    }


    public function RechercherParId($id){
        $SelectRowId = "SELECT * FROM person WHERE id= $id";
        $result = mysqli_query($this->getConnection(),  $SelectRowId);
        // Récupère une ligne de résultat sous forme de tableau associatif
        $employe_data = mysqli_fetch_assoc($result);
        $employe = new Employe();
        $employe->setId($employe_data['id']);
        $employe->setNom($employe_data['nom']);
        $employe->setPrenom ($employe_data['prenom']);
        $employe->setage ($employe_data['age']);
        
        return $employe;
    }

    public function Supprimer($id){
        $RowDelet = "DELETE FROM person WHERE id= '$id'";
        mysqli_query($this->getConnection(), $RowDelet);
    }

    public function Modifier($id,$nom,$prenom,$age){
        // Requête SQL
        $RowUpdate = "UPDATE person SET 
        nom='$nom', prenom='$prenom', age='$age'
        WHERE id=$id";

        mysqli_query($this->getConnection(),$RowUpdate);

    }

}
?>