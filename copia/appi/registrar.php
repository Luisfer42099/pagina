<?php
    include 'conexion.php';
    $cdigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $sql_query = "INSERT INTO Personas VALUES (NULL,'$nombre','$apellido')";
    mysqli_query($conn,$sql_query);

    mysqli_close($conn);
?>