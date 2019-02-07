<?php

class Video {
    
    private $codigo;
    private $titulo;
    private $cartel;
    private $descargable;
    private $codigo_perfil;
    private $sinopsis;
    private $video;
    private $tematica;
    
    public function __construct($codigo, $titulo, $cartel, $descargable, $codigo_perfil, $sinopsis, $video, $tematica) {
        $this->codigo = $codigo;
        $this->titulo = $titulo;
        $this->cartel = $cartel;
        $this->descargable = $descargable;
        $this->codigo_perfil = $codigo_perfil;
        $this->sinopsis = $sinopsis;
        $this->video = $video;
        $this->tematica = $tematica;
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