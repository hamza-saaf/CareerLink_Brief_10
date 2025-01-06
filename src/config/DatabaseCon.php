<?php
class Database{  

    $servername= "localhost";
    $dbname="careerlink_db";
    $username = "username";
    $password = "";

    try{
        $db= new PDO("mysql:host=$localhost;dbname=careerlink_db",$username,$password);
    
    }
    catch(PDOException $e){
        echo "<p>Erreur:".$e->getMessage();
        die();
    
    }

}


?>