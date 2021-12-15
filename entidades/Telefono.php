<?php 

class Telefono{
    private int $idTelefono;
    private string $telefono;
    private int $idEmpresa;

    public function __construct(int $idTelefono, int $telefono, int $idEmpresa){
        $this->idTelefono = $idTelefono;
        $this->telefono = $telefono;
        $this->idEmpresa = $idEmpresa;
    }

	/**
	 * 
	 * @return int
	 */
	function getIdTelefono(): int {
		return $this->idTelefono;
	}
	
	/**
	 * 
	 * @param int $idTelefono 
	 * @return Telefono
	 */
	function setIdTelefono(int $idTelefono): self {
		$this->idTelefono = $idTelefono;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getTelefono(): string {
		return $this->telefono;
	}
	
	/**
	 * 
	 * @param string $telefono 
	 * @return Telefono
	 */
	function setTelefono(string $telefono): self {
		$this->telefono = $telefono;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	function getIdEmpresa(): int {
		return $this->idEmpresa;
	}
	
	/**
	 * 
	 * @param int $idEmpresa 
	 * @return Telefono
	 */
	function setIdEmpresa(int $idEmpresa): self {
		$this->idEmpresa = $idEmpresa;
		return $this;
	}
}

?>