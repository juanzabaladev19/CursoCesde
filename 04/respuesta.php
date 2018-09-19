<?php
    //Validar checkbox
    $resultado = $_POST;
    $nombre = $resultado['nombre'];
    //$check = $resultado['tipo'];
    var_dump($resultado);
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
        echo 'Debes agregar un valor en apellido' . "<br>";
    }
    else{
        echo 'todo bien' . "<br>";
    }
    // Se verifica si el checkbox fue presionado
    if(isset($_POST['PHP'])){
        echo 'Ckeckbox marcado'; 
    }
    else {
        echo 'Checkbox no presionado';
    }
    
?>

