<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller{
    
    //debe estar el método index para que se pueda ejecutar la vista principal
    public function index(){
        $this->load->view('layout/HeaderView');
        $this->load->view('InicioView');
        $this->load->view('layout/FooterView');
    }
    public function Contacto(){
        $this->load->view('layout/HeaderView');
        $this->load->view('ContactoView');
        $this->load->view('layout/FooterView');
    }
    public function Registro(){
        $this->load->view('layout/HeaderView');
        $this->load->view('RegistroView');
        $this->load->view('layout/FooterView');
        //$this->load->model('RegistroModel');
        
    }
    public function singin(){
        $this->load->view('layout/HeaderView');
        $this->load->view('SinginView');
        $this->load->view('layout/FooterView');
    }
}
