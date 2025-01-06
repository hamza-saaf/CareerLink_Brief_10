<?php 

namespace App\Classes;

class Offre{
    private int $id;
    private string $post;
    private string $qualification;
    private string $lieu;
    public function __construct($id,$post,$qualification,$lieu)
    {
        $this->id=$id;
        $this->post=$post;
        $this->qualification=$qualification;
        $this->lieu=$lieu;
    }
    public function arrcheverOffre(){

    }
    public function creerOffre(){

    }
    public function modiferOffre(){

    }
    public function spprimeOffre(){
        
    }
    
}


?>