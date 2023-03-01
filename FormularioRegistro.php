<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="css/login.css" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="js/validacion.js"></script>
        <style>
            .error{border:solid 2px #FF0000;
            }
        </style>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="/css/login.css" rel="stylesheet">
        <title>Document</title>
    </head>

    <body>
        <?php
        if (!isset($_REQUEST["Registrar"]))
        {
            ?>
             <section class="wrapper">
        <div class="logo">
            <img src="img/logo.JPG" alt=""/>
        </div>
        <div class="text-center mt-4 name">
        REGISTRO
        </div>
   

                <div class="container"> 
                    <form action="registro.php" method="post" class="" > 
       

                        <div class="form-group"> 
                            <label for="lname">Nombre de usuario:</label> 
                            <input id="nombreUsuario" type="text" class="form-control" name="nombreUsu"
                                   placeholder="Introduce el nombre de usuario" required> 
                                   <?php
                                   if (isset($_GET["errorUsuario"]))
                                   {
                                       print('<p style="color: red">EL USUARIO YA EXISTE,INICIA SESIÓN </p>');
                                   }
                                   ?>
                            <p style="color: red" id="errorUsu"></p>
                        </div> 

                        <div class="form-group"> 
                            <label for="email">Introduce tu correo:</label> 
                            <input name="email" type="email" class="form-control" id="email"
                                   placeholder="ejemplo@gmail.com"  required> 
                                   <?php
                                   if (isset($_GET["errorCorreo"]))
                                   {
                                       print('<p style="color: red">EL CORREO YA EXISTE,INICIA SESIÓN </p>');
                                   }
                                   ?>
                             <p style="color: red" id="errorEmail"></p>
                        </div> 

                        <div class="form-group"> 
                            <label for="Password1">Contraseña:</label> 
                            <input type="password" class="form-control" id="pass" name="pass"
                                   placeholder="Introduce tu contraseña" required> 

                        </div> 

                        <div class="form-group"> 
                            <label for="Password2">Repite la contraseña:</label> 
                            <input type="password" class="form-control" id="pass2" name="ConfirmarPass" 
                                   placeholder="Confirma tu contraseña" required> 
                            <p style="color: red" id="errorPass"></p>
                        </div> 
                        <p id="mensajeError"></p>
                        <div class="form-group form-check"> 
                            <label class="form-check-label"> 
                                <input class="form-check-input" type="checkbox" id="condiciones"
                                       name="recuerdame" required> Terminos y condiciones
                            </label> 
                             <p style="color: red" id="errorCondiciones"></p>
                        </div> 
                        <div class="">
                             <button type="submit" class="btn bg-success"id="registrar" name = "Registrar">
                                        REGISTRARSE
                             </button>
                            <button type="submit" class="btn bg-success" onclick="window.location.href='login.php'">INICIAR SESIÓN</button> 
                        </div>

                    </form> 
                </div> 
            </section>






            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous "></script>
            <?php
        }
        else
        {
            include ("comprobacionLogin.php");
            registrarUsuario($_REQUEST['nombreUsu'], $_REQUEST['email'], $_REQUEST['pass']);
        }
        ?>

    </body>

</html>
