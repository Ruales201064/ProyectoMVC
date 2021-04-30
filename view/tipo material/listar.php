<!DOCTYPE html>
<html lang="en">

  


     <?php
         include_once('../../view/head.php');
     ?>
  
         <?php
              include_once('../../view/header.php');
         ?>
         
        <?php
                include_once('../../view/menu.php');
          ?>
           
          
      </div>
     
        <?php
                include_once('../../view/menu.php');
         ?>
          </ul>
          <a href="#" data-activates="slide-out"class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>


        
<div class="row">
    
<div class="col s8 offset-s2">
      <div class="card-panel z-depth-5">
     
      <?php
      
      include_once('../../model/Model.php');
      $resl= new ArchivoController();

      $campos="tipo_mat_id,tipo_mat_descripcion";
      $tabla="tbltipo_material";
      $where="tipo_mat_id=tipo_mat_id";

      $result=$resl->consultartipomat($campos,$tabla,$where);

       
      ?>
      
       <h6>LISTA DE TIPO MATERIAL</h6>
          <br>
<table   class="striped" id="eliminar2" >
                  
                <tr>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                   
                </tr>


<?php
   while($row=mysqli_fetch_array($result)){
    echo"<tr>";
    echo"<td>".$row['tipo_mat_id']."</td>";
    echo"<td>".$row['tipo_mat_descripcion']."</td>";    

  ?>
 
 
 <td><a onclick="editar_tipomat('<?php echo $row['tipo_mat_id'];?>')"><button data-target="modal1"type='button'class='btn-floating btn-large-small yellow accent-4 pulse'><i class="material-icons">edit</i></button></a></td>
 <td><a onclick="eliminartipomat('<?php echo $row['tipo_mat_id'];?>')"><button type='button'id='btn_elim5'name="btn_elim5"class='btn-floating btn-large-small red pulse'><i class="material-icons">delete</i></button></a></td>
<?php

    echo"</tr>";
}
      
  ?>

<div id="modal1"class="modal">
    <div class="modal-content">
    

   </div>
    <div class="modal-footer">
      <a href="#!"class="modal-close waves-effect red darken-2waves waves-light btn-small">Cancel</a>
    </div>
</div>

  <?php
         include_once('../../view/footer.php');
     ?>
      
    
  </body>
</html>