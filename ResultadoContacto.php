<?php
 
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'lau162.z@gmail.com';
$titulo = 'INSPIRE PHOTOGRAPHY';
 
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
 
if ($_POST['submit']) {
if (mail ($para, $titulo, $msjCorreo)) {
 echo '<script language="javascript">alert("El mensaje se ha enviado,será respondido en menos de 24 horas");window.location.href="index.php"'
    . '</script>'; 
} else {
echo 'Falló el envio';
}
}
 
?>
