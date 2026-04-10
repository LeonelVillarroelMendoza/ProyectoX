<?php
$direccion="localhost";
$usuario="root";
$contraseña="";
$nombreBase="TaskFlow";

$conexion= new mysqli($direccion,$usuario,$contraseña,$nombreBase);
if($conexion->error){
echo "Hubo un error al conectar a la base de datos";
} else{
    echo "si te conectaste";
}
$sql="SELECT * FROM tarea";
$resultado = $conexion->query($sql);
if ($resultado->num_rows>0){
while($fila=$resultado->fetch_assoc()){
echo $fila['id']."<br>".$fila['nombre']."<br>".$fila['descripcion']."<br>".$fila['estado']."<br>";
$id=$fila['id'];
echo "<a href='form.php?id=$id'><button>Mostrar</button></a><br>";
}
}
?>                                          