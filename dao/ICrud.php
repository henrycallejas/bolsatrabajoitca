<?php

interface ICrud{

    public function agregar($entidad);
    public function eliminar($id);
    public function obtenerTodos();
    public function obtenerPorId($id);
}

?>