<?php
    include('database.php');
    $search = $_POST['search'];
    if(!empty($search)){
        $query = "SELECT * FROM task WHERE name LIKE '$search%'";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die('Query Error'.mysqli_error($connection));
        }
        $json = array();
        //llena un array con los datos de la consulta
        // para luego transformarlo en un json
        while($row = mysqli_fetch_array($result)){
            $json[] = array(
                'name' => $row['name'],
                'description' =>$row['description'],
                'id' => $row['id']
            );    
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
        //selecciona de la tabla task el nombre qeu coincida con lo obtenido en search
        // el porcentaje es para traer todos los elementos que se le parezcan
    }
?>