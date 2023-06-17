<?php

class errorController{
    
    public function index(){
        echo "<h1>La página solicitada no existe </h1>";
    }
    
    public function error_form($aerrores, $campo){
        $alerta = '';
        if(isset($aerrores[$campo]) && !empty($campo)){
            $alerta = "<div class='alerta alerta_error'.$aerrores[$campo].</div>";
        }
        
        return $alerta;
    }
}

?>
