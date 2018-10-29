<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function index(){
        $this->load->view('layout/HeaderView');
        $this->load->view('LoginView');
        $this->load->view('layout/FooterView');
    }
}
/* 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

