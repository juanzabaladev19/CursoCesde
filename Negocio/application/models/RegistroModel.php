<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class RegistroModel extends CI_Model{
    //Inserta user
    public function InsertUser($datos){
        $usuario = array(
            "nombre" =>$datos['nombre'],
            "apellido" => $datos['apellido']);
        $this->db->insert("usuarios",$usuario); //(tabla, datos)
    }
    
    public function GetUser(){
       
        $query = $this->db->query("SELECT * FROM usuarios");
        if($query->num_rows()>0){
            return $query->result();
        }
        else{
            return null;
        }
    }
    
    public function UpdateUser(){
        $datos = array(
            "nombre" => "david",
            "apellido" => "correa"
        );
        $this->db->where("id",5);
        $this->db->update("usuarios",$datos);
    }
    
}

