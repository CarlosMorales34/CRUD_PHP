<?php
 $servidor = "localhost";
 $db = "php_crud";
 $username = "root";
 $password = "";

 try {
    $conexión = new PDO("mysql:host=$servidor;dbname=$db", $username,$password);
    
 } catch (Exception $e) {
    echo $e->getMessage();
 }
?>