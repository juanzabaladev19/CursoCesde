<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InicioController extends CI_Controller{
    
    public function Inicio(){
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
        $this->load->view('registroView');
        $this->load->view('layout/FooterView');
    }
    public function singin(){
        $this->load->view('layout/HeaderView');
        $this->load->view('SinginView');
        $this->load->view('layout/FooterView');
    }
}
