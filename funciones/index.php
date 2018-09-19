<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>
            <?php
                //Función si parámetros
                function saludar(){
                    echo '<h2>' . 'Hola a todos' . '</h2'. '<br>';
                }
                saludar();
                //Función con parámetros
                function usuario($nombres, $tel){
                    foreach($nombres as $nombre){
                        echo "Nombre:" . $nombre . '<br>';
                    }
                    echo 'Teléfono: '.$tel . '<br>';
                }
                
                echo "<br>";
                $usuarios = ["juan","felipe","alejandro"];
                usuario($usuarios,12345);
                
            // put your code here
            ?>
        </h1>
    </body>
</html>
