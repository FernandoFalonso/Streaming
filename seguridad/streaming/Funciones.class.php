<?php

require_once ("BD.class.php");

class Funciones {
    
    public function __construct() {}
    
    public static function sesion() {
        session_cache_limiter("nocache");
        session_start();
    }
    
    public static function validar() {
        if (isset($_SESSION["usuario"])) {
            return true;
        } else {
            return false;
        }
    }
    
    public static function conexion(&$canal) {
        $canal = new mysqli(BD::IP, BD::USER, BD::PASS, BD::BD);
        if ($canal->connect_errno) {
            header ("Location: index.php?mensaje=" . urlencode("Error en la base de datos"));
            exit;
        }
        $canal->set_charset("UTF-8");
    }
    
}

?>