<?php

class Genero{
    private int $idGenero;
    private string $nombreGenero;

    public function __construct(int $idGenero, string $nombreGenero){
        $this->idGenero = $idGenero;
        $this->nombreGenero = $nombreGenero;
    }

    public function setIdGenero(int $idGenero){
        $this->idGenero = $idGenero;
    }

    public function getIdGenero(){
        return $this->idGenero;
    }

    public function setGenero(string $nombreGenero){
        $this->nombreGenero = $nombreGenero;
    }

    public function getGenero(){
        return $this->nombreGenero;
    }
}

?>