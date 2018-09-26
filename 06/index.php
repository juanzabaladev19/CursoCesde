<!DOCTYPE html>
<!--
Validar multiples checkbox
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
                <label for="">Area de especialización</label>
                <select name="area" id="">
                    <option value="fe">Front End</option>
                    <option value="be">Back End</option>
                    <option value="fs">Full Stack</option>
                </select>
                <label>
                    <input type="checkbox" name="cursos[]" value="PHP">PHP
                </label> <br>
                <label>
                    <input type="checkbox" name="cursos[]" value="javascript">Javascript
                </label> <br>
               <input type="submit" value="Enviar" />
                
            </form>
        </div>

    </body>
</html>
