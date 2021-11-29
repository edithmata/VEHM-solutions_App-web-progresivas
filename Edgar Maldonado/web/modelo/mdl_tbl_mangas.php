<?php
include 'mdl_conexion.php';

class tablas_manga{
    private $lista;
    private $db;


    public function __construct()
    {
        $this->db = conexion::connect_db();
        $this->arraydb = array();
    }

    public function ver_tabla_mangas(){
        $resultado = $this->db->query("SELECT * FROM mangas");
        while ($filas = $resultado->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }

    public function add_mangas($nombre,$precio,$cantidad){
        $resultado = $this->db->query("INSERT INTO mangas 
        (
        nombre_manga,
        precio,
        cantidad,
        )
        VALUES
        (
        '$nombre',
        '$precio',
        '$cantidad'
        )
        ");
        if(!$resultado){
            return false;
        }else{
            return true;
        }
    }

    public function eliminar_manga($id_manga){
        $resultado = $this->db->query("DELETE FROM mangas WHERE id_manga='$id_manga'");
        if(!$resultado){
            return false;
        }else{
            return true;
        }
    }

    public function busqueda_manga($id_manga){
        $resultado = $this->db->query("SELECT * FROM mangas WHERE id_manga = '$id_manga'");
        while ($filas = $resultado->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }

    public function modificar_informacion_mangas($id_manga,$nombre,$precio,$cantidad){
        $resultado = $this->db->query("UPDATE mangas 
        SET 
        nombre_manga='$nombre',
        precio='$precio',
        cantidad='$cantidad'
        WHERE
        id_manga = '$id_manga'");
         if(!$resultado){
            return false;
        }else{
            return true;
        }

    }
}
?>