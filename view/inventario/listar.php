

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
      </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>


        
<div class="row">
      <div class="col s12 offset-s0">
      <div class="card-panel z-depth-5">
      <?php
      
      include_once('../../model/Model.php');
      $resl= new ArchivoController();
          
      $result=$resl->consultarinv_movi();


      
  
    ?>
      


      
<h6>LISTAR INVENTARIO</h6>
<br>
<table  class="striped" id="btn_elim4">
      
                <tr>
                    <th>Codigo</th>
                    
                    <th>valor total</th>
                  <!--<th>stock_minimo</th>-->
                   <!-- <th>stock_maximo</th>-->
                    <th>Material</th>
                <!--<th>N°_factura</th>-->
                    <th>Concepto</th>
                    <th>Fecha</th>
                    <th>Tipo de movimiento</th>
                    <th>Usuario</th>
                    <th >Ver Detalle</th>
                    <th>Editar</th>
                    <th >Eliminar</th>
                </tr>
  <?php


   while($row=mysqli_fetch_array($result)){

    echo"<tr>";
    echo"<td>".$row['inv_mov_id']."</td>";
   // echo"<td>".$row['inv_mov_cantidad']."</td>";
    echo"<td>".$row['inv_mov_valor_total']."</td>";
    //echo"<td>".$row['inv_stock_minimo']."</td>";
    //echo"<td>".$row['inv_stock_mazimo']."</td>";
    echo"<td>".$row['mat_nombre']."</td>";
   // echo"<td>".$row['mov_num_factura']."</td>";
    echo"<td>".$row['mov_concepto']."</td>";
    echo"<td>".$row['mov_fecha_movimiento']."</td>";
    echo"<td>".$row['mov_tipo_movimiento']."</td>";
    echo"<td>".$row['usu_nombre1']."</td>";
  ?>
 
 <td><a onclick="verdetalle_inventario('<?php echo $row['inv_mov_id']; ?>')"><button data-target="modal1" type='button'class='btn-floating btn-large-small cyan pulse'><i class="material-icons">remove_red_eye</i></button></a></td>
  
  <td><a onclick="editar_inventario('<?php echo $row['inv_mov_id']; ?>')"><button data-target="modal" type='button'class='btn-floating btn-large-small yellow accent-4 pulse'><i class="material-icons">edit</i></button></a></td>
  <td><a onclick="eliminarinventario('<?php echo $row['inv_mov_id']; ?>')"><button type='button'id='btn_elim4'name="btn_elim4"class='btn-floating btn-large-small red pulse'><i class="material-icons">delete</i></button></a></td>
     
  

<!-- Modal Structure -->

  <?php
        echo"</tr>";
          }
        
   ?>
</table>


<!-- Modal Trigger -->
<div id="modal1" class="modal">
    <div class="modal-content " >
    

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close red darken-2waves waves-light btn-small">Cancel</a>
    </div>
</div>


    </div>
    </div>
    
    <?php
         include_once('../../view/footer.php');
     ?>
      
    
  </body>
</html>