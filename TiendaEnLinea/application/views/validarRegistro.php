<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
    }
    if(isset($_POST['apellido'])){
        $apellido = $_POST['apellido'];
    }
    if(isset($_POST['ciudad'])){
        $ciudad = $_POST['ciudad'];
    }
    //realiza la conexión a la base de datos
    try {
        require_once 'bd_conexion.php';
        //query a ejecutar
        $sql = "INSERT INTO `datosusers`(`nombre`,`apellido`,`ciudad`)";
        $sql.= "VALUES ('{$nombre}','{$apellido}','{$ciudad}')";
        //Ejecutamos el query
//        $sql = "SELECT * FROM datosusers";
        $resultado = $conn->query($sql);
        echo 'datos ingresados correctamente';
    } catch (Exception $ex) {
        // muestra el error 
        $error = $ex->getMessage();
    }
