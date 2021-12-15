<?php

class PlazaCandidato{
    private int $idPlazaCandidato;
    private int $idPlaza;
    private int $idCandidato;

    public function __construct(int $idPlazaCandidato, int $idPlaza, int $idCandidato){
        $this->idPlazaCandidato = $idPlazaCandidato;
        $this->idPlaza = $idPlaza;
        $this->idCandidato = $idCandidato;
    }

    
	/**
	 * 
	 * @return int
	 */
	function getIdPlazaCandidato(): int {
		return $this->idPlazaCandidato;
	}
	
	/**
	 * 
	 * @param int $idPlazaCandidato 
	 * @return PlazaCandidato
	 */
	function setIdPlazaCandidato(int $idPlazaCandidato): self {
		$this->idPlazaCandidato = $idPlazaCandidato;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	function getIdPlaza(): int {
		return $this->idPlaza;
	}
	
	/**
	 * 
	 * @param int $idPlaza 
	 * @return PlazaCandidato
	 */
	function setIdPlaza(int $idPlaza): self {
		$this->idPlaza = $idPlaza;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	function getIdCandidato(): int {
		return $this->idCandidato;
	}
	
	/**
	 * 
	 * @param int $idCandidato 
	 * @return PlazaCandidato
	 */
	function setIdCandidato(int $idCandidato): self {
		$this->idCandidato = $idCandidato;
		return $this;
	}
}

?>