
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


<div class="container" style="margin-top: 2%">      
<div class="row">
    

        <div class="card-panel z-depth-5">
      
        <?php
        
        include_once('../../model/Model.php');
        $resl= new ArchivoController();

      $campos="c.caso_id,c.caso_num_tramo,c.caso_descripcion,c.caso_direccion_dano,c.caso_ancho,
      c.caso_largo,c.caso_profundidad,c.caso_foto_dano,c.caso_prioridad,c.tblusuario_usu_id,
      c.tblestado_est_codigo,c.tbltipo_dano_tipo_dano_id,u.usu_nombre1,e.est_nombre,d.tipo_dano_descripcion";
      $tabla="tblcaso c,tblusuario u,tblestado e,tbltipo_dano d";
      $where="c.tblusuario_usu_id=u.usu_id AND c.tblestado_est_codigo=e.est_codigo
      AND c.tbltipo_dano_tipo_dano_id=d.tipo_dano_id AND c.caso_id=c.caso_id";

      $res=$resl->consultarcaso($campos,$tabla,$where);

  ?>


      
       <h4>Lista de Caso</h4>
<table  class="striped" id="eliminarcaso">
<thead>       
                <tr>
                    <th>Codigo</th>
                    <th>Numero Tramo</th>
                    <th>Descripcion</th>
                    <th>Direccion</th>
                    <th>Ancho</th>
                    <th>Largo</th>
                    <th>Profundidad</th>
                    <th>Prioridad</th>
                    <th>Foto Daño</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                    <th>Tipo Daño</th>
                    <th>Detalle</th>
                    <th>Editar </th>
                    <th>Eliminar</th>
                    
                </tr>

</thead>
<tbody>
 <?php
   while($row=mysqli_fetch_array($res)){
    echo"<tr>";
    echo"<td>".$row['caso_id']."</td>";
    echo"<td>".$row['caso_num_tramo']."</td>";
    echo"<td>".$row['caso_descripcion']."</td>";
    echo"<td>".$row['caso_direccion_dano']."</td>";
    echo"<td>".$row['caso_ancho']."</td>";
    echo"<td>".$row['caso_largo']."</td>";
    echo"<td>".$row['caso_profundidad']."</td>";
    echo"<td>".$row['caso_prioridad']."</td>";
    echo "<td><img width='50'height='50' src=".$row['caso_foto_dano'].">"."</td>";
    //echo "<td><img src='".$row['caso_foto_dano']."' width='50px'></td>";
    echo"<td>".$row['usu_nombre1']."</td>";
    echo"<td>".$row['est_nombre']."</td>";
    echo"<td>".$row['tipo_dano_descripcion']."</td>";
  ?>
  

 <td><a onclick="verdetallecaso('<?php echo $row['caso_id']; ?>')"><button data-target="modal" type='button'class='btn-floating btn-large-small cyan pulse'><i class="material-icons">remove_red_eye</i></button></a></td>
  
  <td><a onclick="editar_caso2('<?php echo $row['caso_id']; ?>')"><button data-target="modal1" type='button'class='btn-floating btn-large-small yellow accent-4 pulse'><i class="material-icons">edit</i></button></a></td>
     
  <td><a onclick="eliminarcaso('<?php echo $row['caso_id']; ?>')"><button type='button'id='btn_elimc'name="btn_elimc"class='btn-floating btn-large-small red pulse'><i class="material-icons">delete</i></button></a></td>



   <?php

        echo"</tr>";
        }
        
    ?>
</tbody>
</table>
</div>
</div>  

<!-- Modal Trigger -->


<div id="modal1" class="modal">
    <div class="modal-content " >
    

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
    </div>
  </div>

  
    <?php
         include_once('../../view/footer.php');
     ?>
     
  </body>
</html>