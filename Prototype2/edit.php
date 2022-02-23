<?php  
include 'configuration.php';



    if(isset($_GET['id'])){
        $id = $_GET['id'];
       
        $sqlDelete = "SELECT * FROM person WHERE id=$id";
        
        $result = mysqli_query($connect, $sqlDelete);
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
        
            
            
            $Prenom = $data[0]['prenom'];
            $Nom = $data[0]['nom'];
            $Age = $data[0]['age'];
             
            
       
    }

    if(!empty($_POST)){
        
        $Prenom = $_POST['prenom'];
        $Nom = $_POST['nom'];
        $Age = $_POST['age'];
        
        $Update ="UPDATE person SET 
        prenom='$Prenom',nom='$Nom',age='$Age' WHERE id=$id ";

        $result = mysqli_query($connect, $Update);
        header('location: index.php');
        
    };
    
?>
<form action="" method='post'>
<input type="text"  value="<?=$Prenom ?>" name="prenom">
	<input type="text"  value="<?=$Nom ?>"name="nom">
	<input type="text" value="<?=$Age ?>" name="age">
	
	<button type='submit'>Modifier</button>
	</form>