<?php
session_start();
if(!isset($_SESSION['nombre'])&&($_SESSION['rol'])){
     echo '<script language="javascript">alert("Debes iniciar sesiòn como Administrador");window.location.href="login.php"</script>'; 
}else{
    ?>
<?php
include ("conection.php");
$conn = conectar();
$sql = "SELECT * FROM usuarios";
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
                <form action="insertar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="nombreUsu" placeholder="nombreUsu">
                    <input type="text" class="form-control mb-3" name="email" placeholder="email">
                    <input type="text" class="form-control mb-3" name="password" placeholder="password">
                    <input type="submit" value="ENVIAR" class="btn btn-info">
                </form> 
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th scope="col">IdUsu</th>
                            <th scope="col">nombreUsu</th>
                            <th scope="col">Email</th>
                            <th></th>
                            <th></th> 
                        </tr>    
                    </thead>
                    <tbody>
                                <?php
    foreach ($query as $row) {
    ?>
                            <tr>
                                <th ><?php echo $row['idUsu'] ?></th>
                                <th><?php echo $row['nombreUsu'] ?></th>
                                <th><?php echo $row['email'] ?></th>
                                <th><a href="actualizar.php?idUsu=<?php echo$row['idUsu'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?idUsu=<?php echo$row['idUsu'] ?>" class="btn btn-danger">Eliminar</a></th>
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