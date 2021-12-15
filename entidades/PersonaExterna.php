<?php

class PersonaExterna{
    private int $idPersonaExterna;
    private int $idCandidato;
    private string $diplomado;

    public function __construct(int $idPersonaExterna, int $idCandidato, string $diplomado){
        $this->idPersonaExterna = $idPersonaExterna;
        $this->idCandidato = $idCandidato;
        $this->diplomado = $diplomado;
    }

    public function setIdPersonaExterna(int $idPersonaExterna){
        $this->idGidPersonaExternaenero = $idPersonaExterna;
    }

    public function getIdPersonaExterna(){
        return $this->idPersonaExterna;
    }

    public function setIdCandidato(int $idCandidato){
        $this->idCandidato = $idCandidato;
    }

    public function getIdCandidato(){
        return $this->idCandidato;
    }

    public function setDiplomado(string $diplomado){
        $this->diplomado = $diplomado;
    }

    public function getDiplomado(){
        return $this->diplomado;
    }
}

?>