
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
          
      $campos="u.usu_id,u.usu_documento,u.usu_nombre1,u.usu_nombre2,u.usu_apellido1,u.usu_telefono,
      u.usu_correo,e.est_nombre,t.tipo_doc_nombre,r.rol_nombre";

      $tabla="tblusuario u,tblestado e,tbltipo_documento t,tblrol r";

      $where="u.tblestado_est_codigo=e.est_codigo AND 
      u.tbltipo_documento_tipo_doc_codigo=t.tipo_doc_codigo AND
      u.tblrol_rol_codigo=r.rol_codigo AND u.usu_id=u.usu_id";
      $result=$resl->consultarusuario($campos,$tabla,$where);
    ?>
      


      
       <h6>LISTA DE USUARIO</h6>

<table  class="striped"  id="eliminar"  >
      
                <tr>
                    <th>Documento</th>
                    <th>primer nombre</th>
                    <th>Segundo nombre</th>
                    <th>Primer apellido</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Ver Detalle</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>



  <?php


   while($row=mysqli_fetch_array($result)){

    echo"<tr>";
    echo"<td>".$row['usu_documento']."</td>";
    echo"<td>".$row['usu_nombre1']."</td>";
    echo"<td>".$row['usu_nombre2']."</td>";
    echo"<td>".$row['usu_apellido1']."</td>";
    echo"<td>".$row['usu_telefono']."</td>";
    echo"<td>".$row['usu_correo']."</td>";
    echo"<td>".$row['rol_nombre']."</td>";   

  ?>
 
 <td><a onclick="verdetalleusu('<?php echo $row['usu_id']; ?>')"><button data-target="modal1" type='button'class='btn-floating btn-large-small cyan pulse'><i class="material-icons">remove_red_eye</i></button></a></td>
  
  <td><a onclick="editar_usu('<?php echo $row['usu_id']; ?>')"><button data-target="modal" type='button'class='btn-floating btn-large-small yellow accent-4 pulse'><i class="material-icons">edit</i></button></a></td>
     
  <td><a onclick="eliminar_datos32('<?php echo $row['usu_id']; ?>')"><button type='button'id='btn_eliminar'name="btn_eliminar"class='btn-floating btn-large-small red pulse'><i class="material-icons">delete</i></button></a></td>

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