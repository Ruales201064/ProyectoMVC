
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
          
      $campos="tblorden_mantenimiento.ord_man_id,tblorden_mantenimiento.ord_man_fecha,tblorden_mantenimiento.ord_man_prioridad,tblorden_mantenimiento.tblusuario_usu_id,tblorden_mantenimiento.tblcaso_cas_id,
      tblorden_mantenimiento.tblestado_est_codigo,tblusuario.usu_nombre1,tblcaso.caso_descripcion,tblestado.est_nombre";

      $tabla="tblorden_mantenimiento,tblusuario,tblcaso,tblestado";

      $where="tblorden_mantenimiento.tblusuario_usu_id=tblusuario.usu_id AND 
      tblorden_mantenimiento.tblcaso_cas_id=tblcaso.caso_id AND
      tblorden_mantenimiento.tblestado_est_codigo=tblestado.est_codigo AND tblorden_mantenimiento.ord_man_id=tblorden_mantenimiento.ord_man_id";
      $result=$resl->consultarorden($campos,$tabla,$where);
    ?>
      


      
       <h6>ORDEN DE MANTENIMIENTO</h6>

<table  class="striped"  id="eliminarorden"  >
      
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Prioridad</th>
                    <th>Usuario</th>
                    <th>Caso</th>
                    <th>Estado</th>
                    <th>Ver Detalle</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>



  <?php


   while($row=mysqli_fetch_array($result)){

    echo"<tr>";
    echo"<td>".$row['ord_man_id']."</td>";
    echo"<td>".$row['ord_man_fecha']."</td>";
    echo"<td>".$row['ord_man_prioridad']."</td>";
    echo"<td>".$row['usu_nombre1']."</td>";
    echo"<td>".$row['caso_descripcion']."</td>";
    echo"<td>".$row['est_nombre']."</td>"; 

  ?>
 
 <td><a onclick="verdetalleorden('<?php echo $row['ord_man_id']; ?>')"><button data-target="modal1" type='button'class='btn-floating btn-large-small cyan pulse'><i class="material-icons">remove_red_eye</i></button></a></td>
  
  <td><a onclick="editar_orden('<?php echo $row['ord_man_id']; ?>')"><button data-target="modal" type='button'class='btn-floating btn-large-small yellow accent-4 pulse'><i class="material-icons">edit</i></button></a></td>
     
  <td><a onclick="eliminarorden('<?php echo $row['ord_man_id']; ?>')"><button type='button'id='btn_eliminar'name="btn_eliminar"class='btn-floating btn-large-small red pulse'><i class="material-icons">delete</i></button></a></td>

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