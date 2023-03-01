


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="css/principal.css">


<div class="container">

    <div class="col-md-12 ">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="contenedor">
                <a class="navbar-brand" href="#navbarSupportedContent">

                    <a class="navbar-brand" id="insp" href="index.php">INSPIRE PHOTOGRAPHY</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">

                        </ul>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class= "navbar-nav md">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#SobreMi" id="SobreMiM">Sobre mi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#Portfolio" id="PortfolioM">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="informacion.php" id="InfoM">Informacion de interés</a> 
                            <li class="nav-item">
                                <a class="nav-link" href="sesiones.php" id="SesionesM">Sesiones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="formularioContacto.php" id="ContactoM">Contacto</a>
                            </li>


                        </ul>  
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <?PHP if (!isset($_SESSION['nombre'])) {
                            ?>

                            <ul class="nav navbar-nav navbar-right"> 
                                <li><a href="FormularioRegistro.php"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>

                                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            </ul>

                        <?PHP } else { ?>
                            <ul class="nav navbar-nav navbar-right"> 
                                    </span><?PHP echo " " . $_SESSION['nombre'] ?></li>
                                <li><a href="logOut.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">CERRAR SESION</button></span> </a></li>                            

                            </ul><?PHP }
                        ?>

                    </div>

            </div>

        </nav>


