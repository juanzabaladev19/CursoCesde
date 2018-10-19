/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function datosUser(){
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var telefono = $("#telefono").val();
    var email = $("#email").val();
    if(nombre === "" || apellido==="" || telefono ==="" || email===""){
        alert("Debe ingresar todos los campos");
        return false; //falso no envía el formulario
    }   
}


