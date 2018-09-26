<?php
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
    }
    if(isset($_POST['apellido'])){
        $apellido = $_POST['apellido'];
    }
    //realiza la conexión a la base de datos
    try {
        require_once 'bd_conexion.php';
        //query a ejecutar
//        $sql = "INSERT INTO `datosusers`(`nombre`,`apellido`)";
//        $sql.= "VALUES ('{$nombre}','{$apellido}')";
        //Ejecutamos el query
        $sql = "SELECT * FROM datosusers";
        $resultado = $conn->query($sql);
    } catch (Exception $ex) {
        // muestra el error 
        $error = $ex->getMessage();
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Web Bootstrap</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/estilosIndex.css">
    </head>
    <body>
        <header>
            <!-- Image and text -->
            <nav class="navbar navbar-light barra-nav">
              <a class="navbar-brand" href="#">
                  <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Bootstrap
              </a>
            </nav>
        </header>
        <section>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                    </tr>
                    
                </thead>
                <tbody>
                    <?php
            //verifica si la conexión fue exitosa
//                if($resultado){
//                   echo "Usuario Registrado";
//                }
//                else{
//                    echo 'Error' . $conn->error;
//                }
//                
                // Cierra la conexión con la base de datos
                        while($registros = $resultado->fetch_assoc()){
            //                
            //                echo '<pre>';
            //                var_dump($registros);
            //                echo '</pre>';
                            echo '<tr>';
                            echo '<td>'.$registros['nombre'].'</td>';
                            echo '<td>'.$registros['apellido'].'</td>';
                            echo '</tr>';

                        }
                            $conn->close();
                    ?>
                </tbody>
                
            </table>
            
        </section>
        <footer>
            <div class="container-fluid style-footer">
                <h2>&copy Derechos Reservados</h2>
            </div>
        </footer>
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
