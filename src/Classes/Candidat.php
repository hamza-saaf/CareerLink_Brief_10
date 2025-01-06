<?php  

namespace App\Classes;

class Candidat extends User {
    public function __construct($name,$email,$password)
    {
        parent::__construct($name,$email,$password);
    }
    public function postuler(){

    }
}


?>