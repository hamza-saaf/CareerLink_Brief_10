<?php  
namespace App\Classes;
namespace App\Config;
require_once("../../vendor/autoload.php");


// $user= new User('Hamza','hamzasaaf725@gmail.com','hazma8292');
// echo $user;


$db = new DatabaseCon();
$conn = $db->connection();

// var_dump($user);
?>