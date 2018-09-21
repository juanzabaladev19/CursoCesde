<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
   
    <body>
        <form action="registro.php" method="get">
            <label id="label">Nombre</label>
            <h2 id="h2">Hola</h2>
            <input type="text" name="nombre" placeholder="nombre" id="nombre">
            <br><br>
            <script>
                var x = document.getElementById("label");
                x.innerHTML="Comer";
                console.log(x);
            </script>
            <label>Apellido</label>
            <input type="text" name="apellido" placeholder="apellido">
            <br><br>
            <label>Telefono</label>
            <input type="text" name="telefono" placeholder="telefono">
            <input type="submit" value="enviar">
        </form>
    </body>
</html>
