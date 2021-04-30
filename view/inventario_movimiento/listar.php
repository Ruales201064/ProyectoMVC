
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
          
      $campos="tblinventario.inv_id,tblinventario.inv_existencia,tblinventario.inv_costo,tblinventario.inv_stock_minimo,
      tblinventario.inv_stock_mazimo,tblinventario.tblmaterial_mat_id,tblinventario.tblherramienta_her_id,
      tblinventario.tblmaquinaria_maq_id,tblinventario.tblbodega_bod_id,tblmaterial.mat_nombre,tblherramienta.her_nombre,tblmaquinaria.maq_nombre,tblbodega.bod_nombre";
      

      $tabla="tblinventario,tblmaterial,tblherramienta,tblmaquinaria,tblbodega";

      $where="tblinventario.tblmaterial_mat_id=tblmaterial.mat_id AND 
      tblinventario.tblherramienta_her_id=tblherramienta.her_id AND 
      tblinventario.tblmaquinaria_maq_id=tblmaquinaria.maq_id AND
      tblinventario.tblbodega_bod_id=tblbodega.bod_id AND
      tblinventario.inv_id=tblinventario.inv_id"; 
     
      $result=$resl->consultarinventario($campos,$tabla,$where);
      
    ?>
      


      
<h6>LISTAR INVENTARIO</h6>
<br>
<table  class="striped" id="elim4">
      
                <tr>
                    <th>Codigo</th>
                    <th>Existencia</th>
                    <th>Costo</th>
                    <th>Stock_minimo</th>
                    <th>Stock_maximo</th>
                    <th>Material</th>
                    <th>Ver Detalle</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
  <?php


   while($row=mysqli_fetch_array($result)){

    echo"<tr>";
    echo"<td>".$row['inv_id']."</td>";
    echo"<td>".$row['inv_existencia']."</td>";
    echo"<td>".$row['inv_costo']."</td>";
    echo"<td>".$row['inv_stock_minimo']."</td>";
    echo"<td>".$row['inv_stock_mazimo']."</td>";
    echo"<td>".$row['mat_nombre']."</td>";
    

  ?>
 
 <td><a onclick="verdetalle_inventario('<?php echo $row['inv_id']; ?>')"><button data-target="modal1" type='button'class='btn-floating btn-large-small cyan pulse'><i class="material-icons">remove_red_eye</i></button></a></td>
  
  <td><a onclick="editar_inventario('<?php echo $row['inv_id']; ?>')"><button data-target="modal" type='button'class='btn-floating btn-large-small yellow accent-4 pulse'><i class="material-icons">edit</i></button></a></td>
     
  <td><a onclick="eliminarinventario('<?php echo $row['inv_id']; ?>')"><button type='button'id='btn_elim4'name="btn_elim4"class='btn-floating btn-large-small red pulse'><i class="material-icons">delete</i></button></a></td>

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