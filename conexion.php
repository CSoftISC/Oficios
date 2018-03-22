<?php 
    $user="root";
    $pass="";
    $url="localhost";
    $db="oficios";
   
    $conn = new mysqli($url, $user, $pass, $db);
    if($conn->connect_error){
        die('Error de conexion a db'.mysqli_connect_error());
    }

?>

