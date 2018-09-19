<?php
    //Validando multiples checkbox
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
    // Se verifica si se creó la variable cursos en el método post
    if(isset($_POST['cursos'])){
        // se obtiene solo los valores de los cursos
        $cursos = $_POST['cursos'];
        echo 'Tus cursos son';
        //Se imprimen los cursos seleccionados
        foreach ($cursos as $curso){
            echo $curso . "<br>";
        }
    }
    else {
        echo 'No elegiste cursos';
    }
    
?>

