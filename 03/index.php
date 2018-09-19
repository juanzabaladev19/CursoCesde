<!DOCTYPE html>
<!--
Validar que un campo de texto no llegue vacío
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
