<?php
require_once 'baseDatos/conexion.php';
require_once 'estudiante.php';

class estudianteModel{
    
    private $db;
    
    function __construct() {
        $this->db = new ConexionDB();
    }

    public function listarEstudiantes(){
        $estudiantes = array();
        $this->db->getConeccion();
        $sql="SELECT * FROM ESTUDIANTES";
        $registros = $this->db->executeQueryReturnData($sql);
        $this->db->executeQueryReturnData($sql);
        $this->db->cerrarConeccion();
        
        foreach ($registros as $row){
            $estudiante = new estudiante($row['cedula'],$row['nombre'],$row['apellido'],$row['edad']);
            array_push($estudiantes, $estudiante);
        }
        return $estudiantes;
    } 
}