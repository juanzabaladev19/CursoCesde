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
                echo "<br>";
                function suma($num1, $num2){
                    //$sumar = $num1 + $num2;
                    //return $sumar;
                    return $num1+$num2;
                }
                $result = suma(2,4);
                echo "Suma: " . $result . "<br>";
                //acceder a variables globales desde función
                $agenda = array();
                function agendar($nombre,$tel){
                    global $agenda;//accedo a la variable global agenda
                    $agenda[] = $nombre;
                    $agenda[] = $tel;
                }
                agendar("Felipe",12345);
                $agenda[] = "camilo";
                print_r($agenda);
            // put your code here
            ?>
        </h1>
    </body>
</html>
