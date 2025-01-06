<?php 

namespace App\Classes;

class User{
    protected string $name;
    protected string $email;
    protected string $password;
    public function __construct($name,$email,$password)
    {
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;
        
    }
    public function __toString() {
        return "User:{$this->name}, Email: {$this->email}, Password:{$this->password }";
    }
    public function connecte(){

    }
    public function desconnecte(){

    }
    public function inscrire(){
        
    }
}
?>