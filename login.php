<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/login.css" rel="stylesheet">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquer







        y.min.js"></script>
        <script src="js/validacion.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <title>Document</title>
    </head>

    <body>


        <section class="wrapper">
            <div class="logo">
                <img src="img/logo.JPG" alt=""/>
            </div>
            <div class="text-center mt-4 name">
                LOGIN
            </div>


            <form class="p-3 mt-3" action="ResultadoLogin.php" method="post" class="form-signin"  > 
                <div class="form-field d-flex align-items-center">
                    <label for="username">Nombre de usuario:</label> 
                    <span class="far fa-user"></span>

                    <input id="nombreUsuario" type="text" class="form-control" name="nombreUsu"
                           placeholder="Introduce el nombre de usuario" required> 
                    <p style="color: red" id="errorUsu"></p>
                </div> 


                <div class="form-field d-flex align-items-center">


                    <label for="password">Contraseña:</label> 
                    <span class="far fa-key"></span>

                    <input type="password" class="form-control" name="pass"
                           placeholder="Introduce tu contraseña" required> 
                    <p style="color: red" id="errorPass"> </p>
                </div> 
                <div class="">
                    <button class="btn mt-3" name="Login">Login</button>                               
                    <div class="text-center fs-6">
                        <a href="FormularioRegistro.php">¿No tienes cuenta? Registrate</a>
                    </div>
                </div>

            </form> 
        </div> 
    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous "></script>

</body>
</html>

