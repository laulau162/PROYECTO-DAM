

<?php
include("conection.php");
$con= conectar();

$codSesion=$_GET['idSesion'];
$sql="delete 
  from sesiones
  where idSesion='$codSesion'";
$query=mysqli_query($con,$sql);
if($query){
   
     echo '<script language="javascript">alert("La sesión se eliminó correctamente");window.location.href="mostrarSesiones.php"</script>'; 

}




