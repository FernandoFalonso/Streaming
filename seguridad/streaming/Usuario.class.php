<?php

class Usuario {
    
    private $dni;
    private $nombre;
    private $perfiles = [];
    
    public function __construct($dni, $nombre, $perfiles) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->perfiles = $perfiles;
    }
    
    public function __get($attr) {
        if (isset($this->$attr)) {
            return $this->$attr;
        } else {
            return null;
        }
    }
    
}

?>