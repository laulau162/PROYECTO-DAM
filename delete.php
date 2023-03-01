<?php
include("conection.php");
$con= conectar();

$codUsu=$_GET['idUsu'];
$sql="delete usuarios,usuRol
  from usuRol
  join usuarios
  on usuRol.idUsu=usuarios.IdUsu
  where usuarios.IdUsu='$codUsu'
";
$query=mysqli_query($con,$sql);
if($query){
    header("Location:mostrarUsuarios.php");
    
}
?>

