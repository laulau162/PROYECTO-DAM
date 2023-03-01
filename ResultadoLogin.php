<?php

session_start();
include("conection.php");
$con = conectar();
if (isset($_POST['Login'])) {
    if (!empty($_POST['nombreUsu']) && !empty($_POST['pass'])) {
        // Obtengo los datos cargados en el formulario de login.
        $password = $_POST['pass'];
        $nombreUsu = $_POST['nombreUsu'];

        $query2 = "SELECT * from usuarios WHERE nombreUsu='$nombreUsu'";

        $result = mysqli_query($con, $query2);
        
        $rows = mysqli_num_rows($result);

       
        if ($rows == 1) {
            // Leer consulta
            $datosConsultaUsuario = mysqli_fetch_array($result);
            // Verificar password
           if (password_verify($password, $datosConsultaUsuario['password'])) {
			echo "Se muestra el id del usuario";
			echo $datosConsultaUsuario['idUsu'];
			
           }
        
          $queryUsuRol = 'SELECT idRol from usuRol WHERE idUsu="' . $datosConsultaUsuario['idUsu'] .'"';
//			
		
           $resultIdRol = mysqli_query($con, $queryUsuRol);
//			
           $rowsIdRol = mysqli_num_rows($resultIdRol);
       
//		
			if ($rowsIdRol == 1)
			{
//				for ($i = 0; $i <$rowsIdRol; $i++)
//				{
					$resultado = mysqli_fetch_array($resultIdRol);
					$rol = $resultado['idRol'];
//					
					
                                        //echo "Este es su rol";
					//echo $rol;
					
					$_SESSION['nombre'] = $nombreUsu;
					$_SESSION['rol'] = $rol;
                                        
                                        echo $rol;
					// Comparar dato
					if ($rol ==3) {
                                            echo'menuAdmin';
						header("Location: mostrarUsuarios.php");
					} else if ($rol == 2) {
                                             echo'cliente';
						header("Location: index.php");
					} else {
                                                                                     //    echo'fuera';

						header("Location: login.php");
					}
//					// Finalizar ejecución de script
					exit;
					
    }}}
//			
       }
?>