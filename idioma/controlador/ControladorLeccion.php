<?php

class ControladorLeccion {
    public function guardarCliente(array $datos){
        $cliente= new Cliente();
        if(isset($datos['id'])){
            $cliente->setId_cliente($datos['id']);
        }
        $cliente->setNombres($datos['nombres']);
        $cliente->setApellidos($datos['apellidos']);
        $cliente->setDni($datos['dni']);
        $cliente->setDireccion($datos['direccion']);        
        $cliente->GuardarCliente();
    }
}
