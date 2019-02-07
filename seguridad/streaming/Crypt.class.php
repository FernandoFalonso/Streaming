<?php

class Crypt {
    
    public static function encriptar($clave, $ruta) {
		$id = mcrypt_module_open("cast-128", "", "ecb", "");
		$length = mcrypt_enc_get_iv_size($id);
		// Crea el vector con valores aleatorios de soporte para la encriptación
		$vector = mcrypt_create_iv($length, MCRYPT_RAND);
		// Inicialización
		mcrypt_generic_init($id, $clave, $vector);
        
		// Encripta la ruta
		$rutaCifrada = mcrypt_generic($id, $ruta);
        
		// Limpia la memoria
		mcrypt_generic_deinit($id);
        // Cierra el cifrado
		mcrypt_module_close($id);
		
		return base64_encode($rutaCifrada);
    }
    
    public static function desencriptar($clave, $rutaCodificada){
		$rutaCifrada = base64_decode($rutaCodificada);
		$id = mcrypt_module_open("cast-128", "", "ecb", "");
		$length = mcrypt_enc_get_iv_size($id);
		$vector = mcrypt_create_iv($length, MCRYPT_RAND);
		mcrypt_generic_init($id, $clave, $vector);
        
		// Desencripta la ruta
		$ruta = mdecrypt_generic($id, $rutaCifrada);
		
		mcrypt_generic_deinit($id);
		mcrypt_module_close($id);
        
		return $ruta;
	}
    
}

?>