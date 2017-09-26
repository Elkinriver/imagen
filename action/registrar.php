<?php
include ("../conexion.php");

$nombre=$_POST['nombre'];
$imagen= addslashes(move_uploaded_file($_FILES['imagen']['tmp_name'],"../upload/".$_FILES['imagen']['name']));
$query= "INSERT INTO productos(nombre,imagen) VALUES ('$nombre','$imagen')";
$resultado= $conexion->query($query);

if($resultado){
    header("location:../productos.php");
}
else{
echo"No se subio";
    }