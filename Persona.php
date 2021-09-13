<?php

class Persona{
    public $aparencia;
    public $cor;
    private $tipo;

    public function __construct (){
        $this->aparencia = "B";
        $this->cor = "Br";
    }

    public function getAparencia(){
        return $this->aparencia;
    }
    public function setAparencia($a){
        $this->aparencia = $a;
    }


    public function getCor(){
        return $this->cor;
    }
    public function setCor($c){
        $this->cor = $c;
    }

    public function getTipo(){
        return $this -> tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }

}
