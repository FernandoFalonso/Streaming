<?php

require_once ("../../smarty/libs/Smarty.class.php");

class Pantalla extends Smarty {
    
    public function __construct() {
		parent::__construct();
        date_default_timezone_set("Europe/Madrid");
		$this->template_dir = "../../pantallas/streaming/templates/";
		$this->compile_dir = "../../pantallas/streaming/templates_c/";
		$this->config_dir = "../../pantallas/streaming/configs/";
		$this->cache_dir = "../../pantallas/streaming/cache/";
    }
    
    public function mostrar($nombrePantalla, $parametros){

		foreach ($parametros as $variable => $valor){
			$this->assign($variable, $valor);
		}
		
		$this->display($nombrePantalla);
        
	}
    
}

?>