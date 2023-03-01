<?php

include("conection.php");
$con=conectar();

$idSesion=$_POST['idSesion'];
$nombreSesion=$_POST['nombreS'];
$desc=$_POST['descS'];
$precio=$_POST['precio'];


$sql="UPDATE sesiones SET  nombreSesion='$nombreSesion',descSesion='$desc',precio='$precio' WHERE idSesion='$idSesion'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: mostrarSesiones.php");
    }
?>