<?php
include '../db/autoload.php';
class ControladorProfesor {
    public function mostrarCategoria() {
        $categoria = new Profesor();
        return $categoria->MostrarCategoria();
    }
    
}
