<?php

class utils
{
    // Metodos estaticos para no instanciar los objetos
    public static function deleteSession($nameSession)
    {
        if (isset($_SESSION[$nameSession])) {
            $_SESSION[$nameSession] = NULL;
            unset($_SESSION[$nameSession]);
        }
        return $nameSession;
    }

    public static function error_form($aerrores, $campo)
    {
        $alerta = '';
        if (isset($aerrores[$campo]) && !empty($campo)) {
            $alerta = "<div class='mensaje_error'>" . $aerrores[$campo] . "</div>";
        }

        return $alerta;
    }
}

?>