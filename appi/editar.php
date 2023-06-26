<?php
    include 'conexion.php';

    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $sql_query = "UPDATE Personas SET nombre = '$nombre', apellido ='$apellido' where id = '$codigo'";
    mysqli_query($conn,$sql_query);

    mysqli_close($conn);
?>