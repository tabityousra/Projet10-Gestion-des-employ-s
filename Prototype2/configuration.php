<?php
   $connect = mysqli_connect('localhost', 'test', 'test1234', 'demo');

   // check connection
 if(!$connect){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>
