<?php
    include "configuration.php";

    
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sqlDelete = "DELETE FROM person WHERE id= '$id'";

            mysqli_query($connect, $sqlDelete);
            header('Location: index.php');
            
        
    }
?>