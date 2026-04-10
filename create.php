<?php
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBD="TaskFlow";

    $conn= new mysqli($servidor,$usuario,$contraseña,$nombreBD);
    if($conn -> connect_error){
        echo "no te conectaste ";
    }
    else{
        echo "si te conectaste ". "<br>";
    }

    $id = $_POST['id' ];
    $nombre = $_POST['nombre' ];
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado' ];
    $sql = "INSERT INTO tarea (id, nombre, descripcion, estado) VALUES ('$id', '$nombre','$descripcion', '$estado')";

    if($conn->query($sql)===TRUE){
        echo "se registro correctamente";
    } else{
        echo $sql -> error;
    }

    ?>