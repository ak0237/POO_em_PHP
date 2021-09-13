<?php

class Persona{
    public $aparencia;
    private $tipo;

    public function __construct (){
        $this->aparencia = "Bbl";
    }

    public function getAparencia(){
        return $this->aparencia;
    }
    public function setAparencia($a){
        $this->aparencia = $a;
    }


    public function getTipo(){
        return $this -> tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    
}
