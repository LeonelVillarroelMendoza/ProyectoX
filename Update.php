<?php
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $nombreBD="TaskFlow";

    $conn= new mysqli($servidor,$usuario,$contraseña,$nombreBD);
    if($conn -> connect_error){
        echo "no te conectaste ";
    }
    $id=$_GET['id'];
$sql="SELECT * FROM tarea WHERE id='$id'";
$resultado = $conn->query($sql);
if ($resultado->num_rows>0){
while($fila=$resultado->fetch_assoc()){
$code=$fila['code'];
$nombre=$fila['nombre'];
$descripcion=$fila['descripcion'];
$estado=$fila['estado'];

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-color: #2563eb;
            color: rgb(0, 0, 0);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 300px;
        }
        div{
            background-color: cornflowerblue;
            width: 300px;
            height: 300px;
            border-radius: 10px;
            border: 4px;
        }

    </style>
    <center>
    <div>                                       
    <form method="post" action="create.php">
        <label for="">Codigo</label><br>
        <input type="number" name="code" value=<?=$code?>><br>
        <label>Nombre</label><br>
        <input type="text" name="nombre" value=<?=$nombre?>><br>
        <label>Descripcion</label><br>
        <input type="text" name="descripcion" value=<?=$descripcion?>><br>
        <label>Estado</label><br>
        <input type="text" name="estado" value=<?=$estado?>><br><br>
        <input id="submit" type="submit" value="Enviar"><br><br>
        <input id="reset" type="reset" name="borrar" value="Borrar"><br><br>
    </form>
    </div>
    </center>
</body>
</html>