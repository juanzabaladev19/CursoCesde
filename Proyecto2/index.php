<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proyecto</title>
    </head>
    <body>
        
        <h1>
            <?php
                //Esto es un comentario
                $PrimeraVariable = 2;
                $SegundaVariable = 5;
                $lenguaje = "PHP";
                if($PrimeraVariable == 2 && $SegundaVariable == 5){
                    echo 'Soy menor';
                }
                else{
                    echo 'soy mayor';
                }
                switch ($lenguaje){
                    case "PHP":
                        echo 'PHP';
                        break;
                    case "Javascript":
                        echo 'Javascript';
                        break;
                    case "html":
                        echo 'html';
                        break;
                }
                echo '<br>';
                $arreglo = array("HOla",1,"hola");
                //echo $arreglo[2] . "<br>" . $arreglo[0];
                //Arreglos
                //echo $SegundaVariable;
            ?>
        </h1>
        <pre>
            <h3>
                <?PHP
                    $dato = array_pop($arreglo);
                    $arreglo = array("HOla",1,"hola");
                  
                    //Arreglos asociativos
                    $usuarios = array('nombre' => "Juan",
                        "Apellido" => "zabala", "Cedula" => 1234);
                    echo "<h1>" . $usuarios['nombre'] . "</h1>";
                    echo 'hola' . "<br>" . "comer" . "<br>";
                    $existe = in_array('Juan', array_values($usuarios));
                    var_dump($existe);
                    //foreach
                    
                ?>
                <ul>
                    <?PHP
                        foreach ($usuarios as $key => $user){
                            echo "<li>" . $key . " " .$user . "</li>";
                        }
                        for($i = 0; $i<4; $i++){
                            echo $i;
                        }
                        echo '<br>';
                        $cont = 0;
                        while($cont<5){
                            echo $cont;
                            if($cont==3){
                                break;
                            }
                            $cont++;
                        }
                    ?>
                </ul>
            </h3>
        </pre>
        
    </body>
</html>
