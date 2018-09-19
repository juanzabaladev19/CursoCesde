<!DOCTYPE html>
<!--
Enviar datos por Post a través de un formulario
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container" style="text-align: center;">
            <form action="respuesta.php" method="post">
                <label for="">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre"> <br>
                <label for="">Apellido</label>
                <input type="text" name="apellido" placeholder="Nombre"> <br><br>
                <input type="submit" value="Enviar" />
            </form>
        </div>

    </body>
</html>
