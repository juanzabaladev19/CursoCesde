<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller{
    
    public function InsertUser(){
        $datos = $_POST;
        //var_dump($datos);
        $this->RegistroModel->InsertUser($datos);
        /*$this->load->view("layout/HeaderView");
        $this->load->view("RegistroView");
        $this->load->view("layout/FooterView");*/
    }
    
    public function GetUser(){
        $datos = $this->RegistroModel->GetUser();
        $json = array();
        foreach($datos as $dato){
            $json[] = array(
                'id' => $dato->id,
                'nombre' => $dato->nombre,
                'apellido' => $dato->apellido,
                'ciudad' => $dato->ciudad
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
    
    
    public function UpdateUser(){
        $this->RegistroModel->UpdateUser();
    }
    
}

