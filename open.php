<?php
//database: id20310606_registro
//user: id20310606_id217212_registro
//host: localhost
//password: ID217212_registro

    $conexion = new mysqli("localhost", "id20310606_id217212_registro", "ID217212_registro", "id20310606_registro");
    if($conexion){
        echo "conexion exitosa";
    } else{
        echo "fallo la conexion";
    }

?>