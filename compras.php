<?php
session_start();
$nombreUsu=$_SESSION['nombre'];
include("conection.php");
$con1= conectar();
$select = $_POST['sesion'];

 $query = "SELECT * from usuarios WHERE nombreUsu='$nombreUsu'";

        $result = mysqli_query($con1, $query);
        
        $rows = mysqli_num_rows($result);
         if ($rows == 1) {
            // Leer consulta
            $datosConsultaUsuario = mysqli_fetch_array($result);
         }
        $idUsu= $datosConsultaUsuario['idUsu'];
        

 $query3 = "SELECT * from sesiones WHERE nombreSesion ='$select'";

        $result3 = mysqli_query($con1, $query3);
        
        $rows3 = mysqli_num_rows($result3);
         if ($rows3 == 1) {
            // Leer consulta
            $datosConsultaSesion = mysqli_fetch_array($result3);
         }
        $idSesion= $datosConsultaSesion['idSesion'];
        $sql2="INSERT INTO compras VALUES(null,$idUsu,$idSesion)";
$query2=mysqli_query($con1,$sql2);
if($query){
     echo '<script language="javascript">alert("COMPRA REALIZADA CORRECTAMENTE");</script>'; 

}else{
        echo '<script language="javascript">alert("NO SE PUDO REALIZAR LA COMPRA");</script>'; 
 
}

?>
