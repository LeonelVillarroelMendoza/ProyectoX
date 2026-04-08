<?php
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBD="TaskFlow";

    $conn= new mysqli($servidor,$usuario,$contraseña,$nombreBD);
    if($conn ->error){
        echo "no te conectaste ";
    }

    $id = $_POST['id' ];
    $nombre = $_POST['nombre' ];
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado' ];
    $sql = "INSERT INTO produc (id, nombre, descripcion, estado) VALUES ('$id', '$nombre','$descripcion', '$estado')";
    if($conn->query($sql)===TRUE){
        echo"se registro correctamente"
    }
    else{
        echo sql->error;
    }
    ?>