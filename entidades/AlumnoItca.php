<?php

class AlumnoItca{
    private int $idAlumno;
    private string $carnet;
    private int $anioIngreso;
    private int $idCandidato;
    private int $idCarrera;

    public function __construct(int $idAlumno, string $carnet, int $anioIngreso, int $idCandidato, int $idCarrera){
        $this->idAlumno = $idAlumno;
        $this->carnet = $carnet;
        $this->anioIngreso = $anioIngreso;
        $this->idCandidato = $idCandidato;
        $this->idCarrera = $idCarrera;
    }

    public function setIdAlumno(int $idAlumno){
        $this->idAlumno = $idAlumno;
    }

    public function getIdAlumno(){
        return $this->idAlumno;
    }

    public function setCarnet(string $carnet){
        $this->carnet = $carnet;
    }

    public function getCarnet(){
        return $this->carnet;
    }

    public function setAnioIngreso(int $anioIngreso){
        $this->anioIngreso = $anioIngreso;
    }

    public function getAnioIngreso(){
        return $this->anioIngreso;
    }

    public function setIdCandidato(int $idCandidato){
        $this->idCandidato = $idCandidato;
    }

    public function getIdCandidato(){
        return $this->idCandidato;
    }

    public function setIdCarrera(int $idCarrera){
        $this->idCarrera = $idCarrera;
    }

    public function getIdCarrera(){
        return $this->idCarrera;
    }
}

?>