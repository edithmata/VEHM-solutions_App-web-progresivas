<?php
include 'mdl_conexion.php';

class login{

    private $db;
    private $lista;

    public function __construct()
    {
        $this->db = conexion::db_connection();
        $this->arraybd =  array();
    }

    public function login_usuario($usuario,$pass){
        $resultado = $this->db->query("SELECT * FROM usuario WHERE usuario_email = '$usuario' AND usuario_contrasena='$pass'");
        while ($filas = $resultado->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }
}


?>