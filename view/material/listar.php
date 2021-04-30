
<!DOCTYPE html>
<html lang="en">

  
 <?php
                include_once('../../view/head.php');
  ?>
  <body>
    <!-- Start Page Loading -->
    <?php
         include_once('../../view/header.php');
     ?>
         
        <?php
                include_once('../../view/menu.php');
          ?>
            
               
            
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>


        
<div class="row">
    
<div class="col s11 offset-s1">
      <div class="card-panel z-depth-5">
     
      <?php
      
      include_once'../../model/Model.php';
      $resl= new ArchivoController();
     $campos="mat_id,mat_nombre,mat_fecha_vencimiento,tblestado_est_codigo,tbltipo_material_tipo_mat_id,est_nombre,tipo_mat_descripcion";
     $tabla="tblmaterial,tblestado,tbltipo_material";
     $where=" tblmaterial.tblestado_est_codigo=tblestado.est_codigo AND tblmaterial.tbltipo_material_tipo_mat_id=tbltipo_material.tipo_mat_id";
     $res=$resl->consultarmate($campos, $tabla,$where);

    


       
      ?>
      


      
       <h6>LISTA DE MATERIALES</h6>
<table  class="striped" id="eliminar3">
<thead>       
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>T.Material</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    
                </tr>

</thead>
<tbody>
 <?php
   while($row=mysqli_fetch_array($res)){
    echo"<tr>";
    echo"<td>".$row['mat_id']."</td>";
    echo"<td>".$row['mat_nombre']."</td>";
    echo"<td>".$row['mat_fecha_vencimiento']."</td>";
    echo"<td>".$row['est_nombre']."</td>";
    echo"<td>".$row['tipo_mat_descripcion']."</td>";
   

        
        

  ?>
 
 <td><a onclick="editar_mat('<?php echo $row['mat_id']; ?>')"><button   data-target="modal1" type='button'class='btn-floating btn-large-small yellow accent-4 pulse'><i class="material-icons">edit</i></button></a></td>
 <td><a onclick="eliminar_data1('<?php echo $row['mat_id']; ?>')"><button  data-target="modal2" type='button'class='btn-floating btn-large-small red pulse'><i class="material-icons">delete</i></button></a></td>


   <?php

        echo"</tr>";
        }
        
    ?>
</tbody>
</table>

<!-- Modal Trigger -->


<div id="modal1" class="modal">
    <div class="modal-content " >
    

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
    </div>
  </div>
        
        <section id="content">
          <!--start container-->
          <div class="container">
            <!--card stats start-->
     
          </div>
          <!--end container-->
        </section>
       
      </div>
      
    </div>
    
  
    <?php
         include_once('../../view/footer.php');
     ?>
     
  </body>
</html>