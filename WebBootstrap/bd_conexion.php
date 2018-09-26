<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// conexion con la base de datos

$conn = new mysqli('localhost','root','','usuarios'); // (servidor, usuario, password, bd)
if($conn->connect_error){
    echo $error = $conn->connect_error;
}
?>
