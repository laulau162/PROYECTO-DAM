<?php
session_start();
if(!isset($_SESSION['nombre'])){
     echo '<script language="javascript">alert("Debes iniciar sesiòn como administrador");window.location.href="login.php"</script>'; 
}else{
    ?>
<?php
include ("conection.php");
$conn = conectar();
$sql = "SELECT * FROM sesiones";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>USUARIOS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <?PHP
    include ("menuAdmin.php");
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Ingrese datos</h1>
                <form action="insertarSesion.php" method="POST">
                    <input type="text" class="form-control mb-3" name="nombreS" placeholder="nombreSesion">
                    <input type="text" class="form-control mb-3" name="descS" placeholder="descripcion">
                    <input type="text" class="form-control mb-3" name="precio" placeholder="precio">
                    <input type="submit" value="ENVIAR" class="btn btn-info">
                </form> 
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th scope="col">Id Sesion</th>
                            <th scope="col">Nombre Sesion</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Precio</th>
                            <th></th>
                            <th></th> 
                        </tr>    
                    </thead>
                    <tbody>
                        <?php
                        foreach ($query as $row) {
                            ?>
                            <tr>
                                <th ><?php echo $row['idSesion'] ?></th>
                                <th><?php echo $row['nombreSesion'] ?></th>
                                <th><?php echo $row['descSesion'] ?></th>
                                <th><?php echo $row['precio'] ?></th>
                                <th><a href="actualizarSesion.php?idSesion=<?php echo$row['idSesion'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="deleteSesion.php?idSesion=<?php echo$row['idSesion'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table> 
            </div>
        </div>
</body>
</html> 
      <?php
                        }
                        ?>