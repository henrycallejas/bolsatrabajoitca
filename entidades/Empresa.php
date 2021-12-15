<?php

class Empresa{
    private int $idEmpresa;
    private string $nombreEmpresa;
    private string $direccion;
    private string $email;
    private string $logo;
    private string $giroEmpresa;
    private int $tamanoEmpresa;
    private string $representante;
    private string $responsable;
    private $fechaRegistro;

    public function __construct(int $idEmpresa, string $nombreEmpresa, string $direccion, string $email,
    string $logo, string $giroEmpresa, int $tamanoEmpresa,string $representante, string $responsable, $fechaRegistro){
        $this->idEmpresa = $idEmpresa;
        $this->nombreEmpresa = $nombreEmpresa;
        $this->direccion = $direccion;
        $this->logo = $logo;
        $this->giroEmpresa = $giroEmpresa;
        $this->tamanoEmpresa = $tamanoEmpresa;
        $this->representante = $representante;
        $this->responsable = $responsable;
        $this->email = $email;
        $this->fechaRegistro = $fechaRegistro;
    }

    public function setIdEmpresa(int $idEmpresa){
        $this->idEmpresa = $idEmpresa;
    }

    public function getIdEmpresa(){
        return $this->idEmpresa;
    }

    public function setNombreEmpresa(string $nombreEmpresa){
        $this->nombreEmpresa = $nombreEmpresa;
    }

    public function getNombreEmpresa(){
        return $this->nombreEmpresa;
    }

    public function setDireccion(string $direccion){
        $this->direccion = $direccion;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setLogo(string $logo){
        $this->logo = $logo;
    }

    public function getLogo(){
        return $this->logo;
    }

    public function setGiroEmpresa(string $giroEmpresa){
        $this->giroEmpresa = $giroEmpresa;
    }

    public function getGiroEmpresa(){
        return $this->giroEmpresa;
    }

    public function setTamanoEmpresa(int $tamanoEmpresa){
        $this->tamanoEmpresa = $tamanoEmpresa;
    }

    public function getTamanoEmpresa(){
        return $this->tamanoEmpresa;
    }

    public function setRepresentante(string $representante){
        $this->representante = $representante;
    }

    public function getRepresentante(){
        return $this->representante;
    }

    public function setResponsable(string $responsable){
        $this->responsable = $responsable;
    }

    public function getResponsable(){
        return $this->responsable;
    }

    public function setFechaRegistro($fecharegistro){
        $this->fecharegistro = $fecharegistro;
    }

    public function getFechaRegistro(){
        return $this->fecharegistro;
    }
}

?>