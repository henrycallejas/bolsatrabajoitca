<?php 

class Usuario{
    private int $idUsuario;
    private string $nombreCompleto;
    private string $usuario;
    private string $contrasena;
    private int $idRolUsuario;


    public function __construct(int $idUsuario, string $nombreCompleto, string $usuario, string $contrasena, int $idRolUsuario){
        $this->idUsuario = $idUsuario;
        $this->nombreCompleto = $nombreCompleto;
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->idRolUsuario = $idRolUsuario;
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
	 * @return Usuario
	 */
	function setIdUsuario(int $idUsuario): self {
		$this->idUsuario = $idUsuario;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getNombreCompleto(): string {
		return $this->nombreCompleto;
	}
	
	/**
	 * 
	 * @param string $nombreCompleto 
	 * @return Usuario
	 */
	function setNombreCompleto(string $nombreCompleto): self {
		$this->nombreCompleto = $nombreCompleto;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getUsuario(): string {
		return $this->usuario;
	}
	
	/**
	 * 
	 * @param string $usuario 
	 * @return Usuario
	 */
	function setUsuario(string $usuario): self {
		$this->usuario = $usuario;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	function getContrasena(): string {
		return $this->contrasena;
	}
	
	/**
	 * 
	 * @param string $contrasena 
	 * @return Usuario
	 */
	function setContrasena(string $contrasena): self {
		$this->contrasena = $contrasena;
		return $this;
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
	 * @return Usuario
	 */
	function setIdRolUsuario(int $idRolUsuario): self {
		$this->idRolUsuario = $idRolUsuario;
		return $this;
	}
}

?>