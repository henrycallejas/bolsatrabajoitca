<?php

class Plaza{
    private int $idPlaza;
    private string $nombrePlaza;
    private int $numeroPlazas;
    private string $requisitos;
    private $masculino;
    private $femenino;
    private $salario;
    private $demandaEsteMes;
    private int $idEmpresa;

    public function __construct(int $idPlaza, string $nombrePlaza, int $numeroPlazas, string $requisitos,
    $masculino, $femenino, $salario, $demandaEsteMes, int $idEmpresa){
        $this->idPlaza = $idPlaza;
        $this->nombrePlaza = $nombrePlaza;
        $this->numeroPlazas = $numeroPlazas;
        $this->requisitos = $requisitos;
        $this->masculino = $masculino;
        $this->femenino = $femenino;
        $this->salario = $salario;
        $this->demandaEsteMes = $demandaEsteMes;
        $this->idEmpresa = $idEmpresa;
    }

    public function setIdPlaza(int $idPlaza){
        $this->idPlaza = $idPlaza;
    }

    public function getIdPlaza(){
        return $this->idPlaza;
    }

    public function setNombrePlaza(string $nombrePlaza){
        $this->nombrePlaza = $nombrePlaza;
    }

    public function getNombrePlaza(){
        return $this->nombrePlaza;
    }

    public function setNumeroPlazas(int $numeroPlazas){
        $this->numeroPlazas = $numeroPlazas;
    }

    public function getNumeroPlazas(){
        return $this->numeroPlazas;
    }

    public function setRequisitos(string $requisitos){
        $this->requisitos = $requisitos;
    }

    public function getRequisitos(){
        return $this->requisitos;
    }

    public function setMasculino($masculino){
        $this->masculino = $masculino;
    }

    public function getMasculino(){
        return $this->masculino;
    }

    public function setFemenino($femenino){
        $this->femenino = $femenino;
    }

    public function getFemenino(){
        return $this->femenino;
    }

    public function getDemandaEsteMes(){
        return $this->demandaEsteMes;
    }

    public function setDemandaEsteMes(int $demandaEsteMes){
        $this->demandaEsteMes = $demandaEsteMes;
    }

    public function setIdEmpresa(int $idEmpresa){
        $this->idEmpresa = $idEmpresa;
    }

    public function getIdEmpresa(){
        return $this->idEmpresa;
    }
}

?>