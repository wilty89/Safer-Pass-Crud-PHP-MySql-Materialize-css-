<?php
session_start();
   define('DB_SERVER', "localhost");
   define('DB_USERNAME', "root");
   define('DB_PASSWORD', "");
   define('DB_DATABASE', "prueba");
   $con=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
   if(mysqli_connect_errno()) {  
       die("Failed to connect with MySQL: ". mysqli_connect_error());  
   }  
?>  



