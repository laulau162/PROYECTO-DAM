<?php
include("conection.php");
$con1= conectar();
$nombreSesion=$_POST['nombreS'];
$desc=$_POST['descS'];
$precio=$_POST['precio'];

$sql="INSERT INTO sesiones VALUES(null,'$nombreSesion','$desc','$precio')";
$query=mysqli_query($con1,$sql);
if($query){
         echo '<script language="javascript">alert("SESION INSERTADA CORRECTAMENTE");window.location.href="mostrarSesiones.php"</script>'; 
}else{
    
}

?>
