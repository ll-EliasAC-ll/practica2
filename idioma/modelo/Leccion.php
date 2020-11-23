<?php

class Leccion {
    private $idLeccion;
    private $numero;
    private $estatus;
    private $com_profesor;
    private $com_estudiante;
    
    function getIdLeccion() {
        return $this->idLeccion;
    }

    function getNumero() {
        return $this->numero;
    }

    function getEstatus() {
        return $this->estatus;
    }

    function getCom_profesor() {
        return $this->com_profesor;
    }

    function getCom_estudiante() {
        return $this->com_estudiante;
    }

    function setIdLeccion($idLeccion) {
        $this->idLeccion = $idLeccion;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

    function setCom_profesor($com_profesor) {
        $this->com_profesor = $com_profesor;
    }

    function setCom_estudiante($com_estudiante) {
        $this->com_estudiante = $com_estudiante;
    }


    function GuardarCategoria() {
        require_once '../db/ConexionDB.php';
        $conexionDB = new ConexionDB();
        $conn = $conexionDB->abrirConexion();
        if ((int) $this->idLeccion != 0) {
            $sql = "UPDATE categorias SET "
                    . "nombre_categoria='" . $this->nombre_producto . "',"
                    . "descripcion='" . $this->descripcion . "',"
                    . "estado='" . $this->estado . "'"
                    . " WHERE id_categoria=" . $this->id_categoria;
        } else {
            $sql = "INSERT INTO leccion(numero,estatus,comentario_profesor,comentario_estudiante) VALUES "
                    . "('" . $this->numero . "',"
                    . "'" . $this->estatus . "',"
                    . "'" . $this->com_profesor . "'n"
                    . "'" . $this->com_estudiante . "'"
                    . ")";
        }

        $conn->query($sql);
        $conexionDB->cerrarConexion();
    }
    
}
