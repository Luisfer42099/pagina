<?php
    include 'conexion.php';

    $codigo=$_GET['codigo'];

    $sql = "select * from Personas where id='$codigo'";
    $resultado = $conn->query($sql);

    while($fila = $resultado->fetch_array()){
        $persona[] = array_map('utf8_encode', $fila);
    }
    echo json_encode($persona);
    $resultado->close();
?>