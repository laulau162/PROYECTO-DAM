<?php
include("conection.php");
$con1= conectar();
$nombreUsu=$_POST['nombreUsu'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$pass_fuerte= password_hash($pass, PASSWORD_DEFAULT);

$sql="INSERT INTO usuarios VALUES(null,'$nombreUsu','$pass_fuerte','$email')";
$query=mysqli_query($con1,$sql);
if($query){
     $sql2 = "INSERT INTO usuRol(idUsu, idRol) VALUES (last_insert_id(),3)";
    $quer2 = mysqli_query($con1, $sql2);
     echo '<script language="javascript">alert("USUARIO INSERTADO CORRECTAMENTE");window.location.href="mostrarUsuarios.php"</script>'; 

}else{
    
}

?>