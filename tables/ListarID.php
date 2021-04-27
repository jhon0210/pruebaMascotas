<div  class="card-body" style="background:white;">
    <table class="table table-condensed table-bordered small">
      <thead>
      <tr style="background:#0F0F23;color:white;">
        <th>ID</th>
        <th>Raza</th>
        <th>Estado</th>
        <th>Categoria</th>
      </tr>
      </thead>
      <?php
          $identify=$_POST['ident'];
          $conexion=mysqli_connect("localhost","root","","mascotas");
          $sql="select * from lismascotas where idmascota='$identify'" ;
          $resultado=mysqli_query($conexion,$sql);
          while ($Registros=mysqli_fetch_array($resultado)) {
             ?>

             <tr>
                 <td><?php echo $Registros['idmascota'] ?></td>
                 <td><?php echo $Registros['raza'] ?></td>
                 <td><?php echo $Registros['categoria'] ?></td>
                 <td><?php echo $Registros['estado'] ?></td>

             </tr>

      <?php
      }?>
    </table>
 </div>
