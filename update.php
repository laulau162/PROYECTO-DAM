<?php
require 'conection.php';

$conn = conectar();
$idUsu = $_POST['idUsu'];
$nombreUsu = $_POST['nombreUsu'];
$email = $_POST['email'];
$pass = $_POST['password'];
$pass_fuerte = password_hash($pass, PASSWORD_DEFAULT);
;


$sql = "UPDATE usuarios SET nombreUsu='$nombreUsu',password='$pass_fuerte',email='$email' WHERE idUsu = '$idUsu'";
$resultado = mysqli_query($conn, $sql);
 if($resultado){
        Header("Location: mostrarUsuarios.php");
    }

?>

