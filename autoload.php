<?php

/* Este archivo se utiliza para realizar el auto cargado de clase mediante una funcion.
   Entra a la carpeta controller e incluye cada uno de los controladores */

function controllers_autoload($classname){

    include 'controllers/' . $classname . '.php';

}

spl_autoload_register('controllers_autoload');

?>
