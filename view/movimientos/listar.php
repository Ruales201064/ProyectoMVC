
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
     $campos="mov_id,mov_num_factura,mov_concepto,mov_fecha_movimiento,mov_tipo_movimiento,tblusuario_usu_id,tblproveedor_pro_nit,usu_nombre1,pro_nombre";
     $tabla="tblmovimiento,tblusuario,tblproveedor";
     $where=" tblmovimiento.tblusuario_usu_id=tblusuario.usu_id AND tblmovimiento.tblproveedor_pro_nit=tblproveedor.pro_id";
     $res=$resl->consultarmovi($campos, $tabla,$where);

    


       
      ?>
      


      
       <h6>LISTA DE MOVIMIENTOS</h6>
<table  class="striped" id="eliminar_mov">
<thead>       
                <tr>
                    <th>Codigo</th>
                    <th>Concepto</th>
                    <th>Fecha</th>
                    <th>T.Movimiento</th>
                    <th>Usuario</th>
                    <th>Proveedor</th>
                    <th>Detalle</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    
                </tr>

</thead>
<tbody>
 <?php
   while($row=mysqli_fetch_array($res)){
    echo"<tr>";
    echo"<td>".$row['mov_id']."</td>";
    echo"<td>".$row['mov_concepto']."</td>";
    echo"<td>".$row['mov_fecha_movimiento']."</td>";
    echo"<td>".$row['mov_tipo_movimiento']."</td>";
    echo"<td>".$row['usu_nombre1']."</td>";
    echo"<td>".$row['pro_nombre']."</td>";
   

        
        

  ?>
  <td><a onclick="DetalleMovi('<?php echo $row['mov_id']; ?>')"><button data-target="modal1" type='button'class='btn-floating btn-large-small cyan pulse'><i class="material-icons">remove_red_eye</i></button></a></td>
 <td><a onclick="editarmovimiento('<?php echo $row['mov_id']; ?>')"><button   data-target="modal1" type='button'class='btn-floating btn-large-small yellow accent-4 pulse'><i class="material-icons">edit</i></button></a></td>
 <td><a onclick="eliminarmovimiento('<?php echo $row['mov_id']; ?>')"><button  data-target="modal2" type='button'class='btn-floating btn-large-small red pulse'><i class="material-icons">delete</i></button></a></td>


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