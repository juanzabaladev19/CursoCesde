<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach($usuarios as $usuario){
                echo "<tr><td>{$usuario->id} </td>";
                echo "<td>{$usuario->nombre}</td>";
                echo "<td>{$usuario->apellido} </td></tr>";
            }
          ?>
        </tbody>
     </table>
</div>