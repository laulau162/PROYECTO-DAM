<?php
if(!isset($_SESSION['nombre'])){
     echo '<script language="javascript">alert("Debes iniciar sesiòn para acceder a la compra de sesiones");window.location.href="login.php"</script>'; 
}else{
    
?>
    
<form name="usuarios" action="mostrarUsuarios.php" method="POST">
    <input type="submit" value="ADMINISTRAR USUARIOS" class="btn btn-info">
</form>
<form name="usuarios" action="mostrarSesiones.php" method="POST">
    <input type="submit" value="ADMINISTRAR SESIONES" class="btn btn-info">
</form>
  <?php
}
?>