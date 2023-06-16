<?php

class utils{
    // Metodos estaticos para no instanciar los objetos
    public static function deleteSession($nameSession){
        if (isset($_SESSION[$nameSession])){
            $_SESSION[$nameSession] = NULL;
            unset($_SESSION[$nameSession]);
        }
        return $nameSession;
    }
    
}

?>