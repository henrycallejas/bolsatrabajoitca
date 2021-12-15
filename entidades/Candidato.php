<?php 

class Candidato{
    private int $idCandidato;
    private string $nombre;
    private string $correo;
    private int $idGenero;
    private int $edad;
    private int $anioGraduacion;
    private string $telefono;

    public function __construct(int $idCandidato, string $nombre, string $correo, 
    int $idGenero, int $edad, int $anioGraduacion, string $telefono){
        $this->idCandidato = $idCandidato;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->idGenero = $idGenero;
        $this->edad = $edad;
        $this->anioGraduacion = $anioGraduacion;
        $this->telefono = $telefono;
    }

    public function setIdCandidato(int $idCandidato){
        $this->idCandidato = $idCandidato;
    }

    public function getIdCandidato(){
        return $this->idCandidato;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setCorreo(string $correo){
        $this->correo = $correo;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function setIdGenero(int $idGenero){
        $this->idGenero = $idGenero;
    }

    public function getIdGenero(){
        return $this->idGenero;
    }

    public function setEdad(int $edad){
        $this->edad = $edad;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setAnioGraduacion(int $anioGraduacion){
        $this->anioGraduacion = $anioGraduacion;
    }

    public function getAnioGraduacion(){
        return $this->anioGraduacion;
    }

    public function setTelefono(string $telefono){
        $this->telefono = $telefono;
    }

    public function getTelefono(){
        return $this->telefono;
    }

}

?>