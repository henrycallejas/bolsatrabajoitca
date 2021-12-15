<?php 

class Rol{
    private int $idRol;
    private int $nombreRol;

    public function __construct(int $idRol, int $nombreRol){
        $this->idRol = $idRol;
        $this->nombreRol = $nombreRol;
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
	 * @return Rol
	 */
	function setIdRol(int $idRol): self {
		$this->idRol = $idRol;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	function getNombreRol(): int {
		return $this->nombreRol;
	}
	
	/**
	 * 
	 * @param int $nombreRol 
	 * @return Rol
	 */
	function setNombreRol(int $nombreRol): self {
		$this->nombreRol = $nombreRol;
		return $this;
	}
}

?>