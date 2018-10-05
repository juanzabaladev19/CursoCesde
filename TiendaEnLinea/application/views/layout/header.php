<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Web Bootstrap</title>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/ropa-favicon.ico" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/estilosIndex.css">
    </head>
    <body>      
        <header>
                    <!-- Image and text -->
                    <nav class="navbar navbar-light barra-nav">
                      <a class="navbar-brand" href="index.php">
                          <img class="img-logo" src="img/logo-ropa.jpg" class="d-inline-block align-top" alt="">
                      </a>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                            <a href="#"type="button" class="btn-iniciar">Iniciar Sesion</a>
                            <a href="registro.php" class="btn-registro">Registro</a>
                      </form>
                    </nav>
        </header>