<?php
    //Validando que un campo de texto no llegue vavío
    $resultado = $_POST;
    $nombre = $resultado['nombre'];
    //Muestro los resultados
    //echo "Nombre: " . $resultado['nombre'] . "<br>";
    //echo "Apellido: " . $resultado['nombre'];
    //validando
    if(!(filter_has_var(INPUT_POST, 'nombre') && (strlen(filter_input(INPUT_POST,'nombre'))>0))){
        echo 'Debes agregar un valor en nombre';
    }
    else{
        echo 'todo bien';
    }
    if(!(filter_has_var(INPUT_POST, 'apellido') && (strlen(filter_input(INPUT_POST,'apellido'))>0))){
        echo 'Debes agregar un valor en apellido';
    }
    else{
        echo 'todo bien';
    }
?>

