<?php 
    include("conection.php");
    $con=conectar();

$id=$_GET['idSesion'];

$sql="SELECT * FROM sesiones WHERE idSesion='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <h1>ACTUALIZAR SESION</h1>

                <div class="container mt-5">
                    <form action="updateSesion.php" method="POST">
                    
                                <input type="hidden" name="idSesion" value="<?php echo $row['idSesion']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombreS" placeholder="nombreSesion" value="<?php echo $row['nombreSesion']  ?>">
                                <input type="text" class="form-control mb-3" name="descS" placeholder="desc" value="<?php echo $row['descSesion']  ?>">
                                <input type="text" class="form-control mb-3" name="precio" placeholder="precio" value="<?php echo $row['precio']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>