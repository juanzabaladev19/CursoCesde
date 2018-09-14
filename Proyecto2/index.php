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
                //Arreglos
                
                //echo $SegundaVariable;
            ?>
        </h1>
        <p>
            <h2>
                <?PHP
                    echo 'Esta es otra sección';
                ?>
            </h2>
        </p>
        
    </body>
</html>
