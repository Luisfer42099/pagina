<?php
// Cargo el modelo
require_once 'models/usuario.php';

class usuarioController{
    
    public function index(){
        echo "Controlador Usuarios, accion index";
    }
    
     public function registro(){
        require_once 'views/usuario/registro.php';
    }

    public function save(){
        if(isset($_POST)){
            // Se crean variables para cada campo y se comprueba si existe desde el post
            $nombre = isset($_POST['nombre']) ? $POST['nombre'] : false;
            $apellido = isset($_POST['apellido']) ? $POST['apellido'] : false;
            $email = isset($_POST['email']) ? $POST['email'] : false;
            $password = isset($_POST['password']) ? $POST['password'] : false;
            
            // Arreglo de errores
            $aErrores = array();
            
            // Patron de Expresiones regulares string
            $patron_string = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
            
            // Validar datos antes de guardar
            
            // Validando el nombre
            if(!empty($nombre)){
                $aErrores['nombre'] = "Debe especificar el nombre";
            }elseif(!preg_match($patron_string, $nombre)){
                $aErrores['nombre'] = "El nombre solo debe contener letras y espacios";
            }
            // Validando el apellido
            if(empty($apellido)){
                $aErrores['apellido'] = "Debe especificar el apellido";
            }elseif(!preg_match($patron_string, $apellido)){
                $aErrores['apellido'] = "El apellido solo debe contener letras y espacios";
            }
            // Validando el correo
            if(empty($email)){
                $aErrores['email'] = "Debe especificar el email";
            }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $aErrores['email'] = "El email debe tener el formato específico";
            }
            // Validando la clave
            if(empty($password)){
                $aErrores['password'] = "Debe especificar el password";
            }
            
            var_dump($aErrores);
            
            //Comprobar si algun campo queda en false 
            if($nombre && $apellido && $email && $password && count($aErrores) == 0){
                // Se crea el objeto y se le pasa las variables a cada setter
                $usuario = new usuario();
                $usuario->setNomUsu($nombre);
                $usuario->setApeUsu($apellido);
                $usuario->setCorreoUsu($email);
                $usuario->setClaveUsu($password);
                
                $save = $usuario->save();
                if ($save){
                    $_SESSION['register'] = 'complete';
                }else{
                    $_SESSION['register'] = 'failed';
                    //$_SESSION['errores'] = $aErrores;
                }
            }else{
                $_SESSION['register'] = 'failed';
                //$_SESSION['errores'] = $aErrores;
            }
        }else{
            $_SESSION['register'] = 'failed';
            //$_SESSION['errores'] = $aErrores;
        }
        header("location:".base_url.'usuario/registro');
    }
}
?>