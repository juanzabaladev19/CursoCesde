
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
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/estilosIndex.css">
    </head>
    <body>
        <header>
            <!-- Image and text -->
            <nav class="navbar navbar-light barra-nav">
              <a class="navbar-brand" href="#">
                  <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Bootstrap
              </a>
            </nav>
        </header>
        <section>
            <div class="container contenedor">
                <div class="registro">
                    <img class="img-responsive logo-registro" src="img/registro.png" alt="">
                </div>
                <form class="my-5" action="registro.php" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                                <small id="nombreHelp" class="form-text text-muted">Sus datos nunca serán compartidos.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Apellido">Apellido</label>
                                <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="apellido">
                            </div>
                        </div>
                        
                    </div>
                    
                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="pais">País</label>
                                <select class="form-control" id="Pais" name="pais">
                                    <option value="Colombia">Colombia</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Brasil">Brasil</option>
                                    <option value="Espana">España</option>
                                    <option value="Paris">París</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="departamento">Departamento</label>
                                <select class="form-control" id="departamento" name="departamento">
                                    <option value="Antioquia">Antioquia</option>
                                    <option value="Cundinamarca">Cundinamarca</option>
                                    <option value="Atlantico">Atlántico</option>
                                    <option value="Magdalena">Magdalena</option>
                                    <option value="Arauca">Aurauca</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                <select class="form-control" id="ciudad" name="ciudad">
                                    <option value="Medellin">Medellín</option>
                                    <option value="Bucaramanga">Bucaramanga</option>
                                    <option value="Barranquilla">Barranquilla</option>
                                    <option value="Itagui">Itagüí</option>
                                    <option value="Manizales">Manizales</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" placeholder="Teléfono" name="telefono">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="terminos" name="terminos">
                      <label class="form-check-label" for="terminos">Términos y condiciones</label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-enviar">Completar Registro</button>
                </form>
            </div>
        </section>
        <footer>
            <div class="container-fluid style-footer">
                <h2>&copy Derechos Reservados</h2>
            </div>
        </footer>
        <?php
        // put your code here
        ?>
        
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
