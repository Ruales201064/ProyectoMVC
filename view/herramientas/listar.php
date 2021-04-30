
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
     $campos="her_id,her_nombre,tblestado_est_codigo,tbltipo_herramienta_tipo_her_id,est_nombre,tipo_her_descripcion";
     $tabla="tblherramienta,tblestado,tbltipo_herramienta";
     $where=" tblherramienta.tblestado_est_codigo=tblestado.est_codigo AND tblherramienta.tbltipo_herramienta_tipo_her_id=tbltipo_herramienta.tipo_her_id ";
     $res=$resl->consultarherra($campos, $tabla,$where);

    


       
      ?>
      


      
       <h6>LISTA DE HERRAMIENTAS</h6>
<table  class="striped" id="eliminar2">
<thead>       
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>T.Herramienta</th>
                    <th>Detalle</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    
                </tr>

</thead>
<tbody>
 <?php
   while($row=mysqli_fetch_array($res)){
    echo"<tr>";
    echo"<td>".$row['her_id']."</td>";
    echo"<td>".$row['her_nombre']."</td>";
    echo"<td>".$row['est_nombre']."</td>";
    echo"<td>".$row['tipo_her_descripcion']."</td>";
   

        
        

  ?>
  

 <td><a onclick="verdetalleher('<?php echo $row['her_id']; ?>')"><button data-target="modal1" type='button'class='btn-floating btn-large-small cyan pulse'><i class="material-icons">remove_red_eye</i></button></a></td>
  
  <td><a onclick="editar_herr('<?php echo $row['her_id']; ?>')"><button data-target="modal" type='button'class='btn-floating btn-large-small yellow accent-4 pulse'><i class="material-icons">edit</i></button></a></td>
     
  <td><a onclick="eliminar_data('<?php echo $row['her_id']; ?>')"><button type='button'class='btn-floating btn-large-small red pulse'><i class="material-icons">delete</i></button></a></td>



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