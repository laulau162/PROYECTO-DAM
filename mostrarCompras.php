<?php
session_start();
if(!isset($_SESSION['nombre'])&&($_SESSION['rol'])){
     echo '<script language="javascript">alert("Debes iniciar sesiòn como Administrador");window.location.href="login.php"</script>'; 
}else{
    ?>
<?php
include ("conection.php");
$conn = conectar();
$sql = "SELECT * FROM compras";
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
    <h1>RESUMEN DE COMPRAS</h1>
    <div class="container mt-5">
        
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th scope="col">IdCompra</th>
                            <th scope="col">IdUsu</th>
                                <th scope="col">IdSesion</th>
                             
                        </tr>    
                    </thead>
                    <tbody>
                                <?php
    foreach ($query as $row) {
    ?>
                            <tr>
                                <th ><?php echo $row['idCompra'] ?></th>
                                <th><?php echo $row['idUsu'] ?></th>
                                <th><?php echo $row['idSesion'] ?></th>     
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