<?php

class AlumnoItca{
    private int $idCarrera;
    private string $nombreCarrera;

    public function __construct(int $idCarrera, string $nombreCarrera){
        $this->idCarrera = $idCarrera;
        $this->nombreCarrera = $nombreCarrera;
    }

    public function setIdCarrera(int $idCarrera){
        $this->idCarrera = $idCarrera;
    }

    public function getIdCarrera(){
        return $this->idCarrera;
    }

    public function setNombreCarrera(string $nombreCarrera){
        $this->nombreCarrera = $nombreCarrera;
    }

    public function getNombreCarrera(){
        return $this->nombreCarrera;
    }
}

?>