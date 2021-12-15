<?php

class PlazaCandidato{
    private int $idRolUsuario;
    private int $idRol;
    private int $idUsuario;

    public function __construct(int $idRolUsuario, int $idRol, int $idUsuario){
        $this->idRolUsuario = $idRolUsuario;
        $this->idRol = $idRol;
        $this->idUsuario = $idUsuario;
    }

	/**
	 * 
	 * @return int
	 */
	function getIdRolUsuario(): int {
		return $this->idRolUsuario;
	}
	
	/**
	 * 
	 * @param int $idRolUsuario 
	 * @return PlazaCandidato
	 */
	function setIdRolUsuario(int $idRolUsuario): self {
		$this->idRolUsuario = $idRolUsuario;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	function getIdRol(): int {
		return $this->idRol;
	}
	
	/**
	 * 
	 * @param int $idRol 
	 * @return PlazaCandidato
	 */
	function setIdRol(int $idRol): self {
		$this->idRol = $idRol;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	function getIdUsuario(): int {
		return $this->idUsuario;
	}
	
	/**
	 * 
	 * @param int $idUsuario 
	 * @return PlazaCandidato
	 */
	function setIdUsuario(int $idUsuario): self {
		$this->idUsuario = $idUsuario;
		return $this;
	}
}

?>