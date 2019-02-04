<?php

class Crypt {
    
    public static function encriptar($clave, $video) {
        // Se abre módulo de encriptación con nombre "id"
        $id = mcrypt_module_open("cast-128", "", "ecb", "");
        $tamano = mcrypt_enc_get_iv_size($id);
        $arr = mcrypt_create_iv($tamano, MCRYPT_RAND);
        mcrypt_generic_init($id, $clave, $arr);
        
        // Se cifra el vídeo
        $videoCifrado = mcrypt_generic($id, $video);
        
        mcrypt_generic_deinit($id);
        mcrypt_module_close($id);
        
        // Se codifica en base64
        return base64_encode($videoCifrado);
    }
    
    public static function desencriptar($clave, $videoCifrado) {
        // Se decodifica el vídeo
        $video = base64_decode($videoCifrado);
        $id = mcrypt_module_open("cast-128", "", "ecb", "");
        $tamano = mcrypt_enc_get_iv_size($id);
        $arr = mcrypt_create_iv($tamano, MCRYPT_RAND);
        mcrypt_generic_init($id, $clave, $arr);
        
        $videoDescifrado = mdecrypt_generic($id, $video);
        
        mcrypt_generic_deinit($id);
        mcrypt_module_close($id);
        
        return $videoDescifrado;
    }
    
}

?>