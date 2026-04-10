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
$sql="SELECT * FROM tareas";
$resultado = $conexion->query($sql);
if ($resultado->num_rows>0){
while($fila=$resultado->fetch_assoc()){
echo $fila['id']."<br>".$fila['nombre']."<br>".$fila['descripcion']."<br>".$fila['estado']."<br>";
$id=$fila['id'];
echo "<a href='form.php?id=$id'><button >Mostrar</button></a><br>";
}
}
?>                                          