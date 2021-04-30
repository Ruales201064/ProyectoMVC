
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
     $campos="m.maq_id,m.maq_nombre,e.est_nombre,t.tipo_maq_descripcion";
     $tabla="tblmaquinaria m,tblestado e,tbltipo_maquinaria t";
     $where="m.tblestado_est_codigo=e.est_codigo AND m.tbltipo_maquinaria_tipo_maq_id=t.tipo_maq_id AND m.maq_id=m.maq_id";

     $result=$resl->consultarmaquinaria($campos, $tabla,$where);

    


       
?>
      


      
       <h6>LISTA MAQUINARIA</h6>
<table  class="striped" id="select">
<thead>       
                <tr>
                    <th>ID</th>
                    <th>Nombre Maquina</th>
                    <th>Estado</th>
                    <th>Tipo Maquinaria</th>
                    <th colspan="1">Editar </th>
                    <th colspan="1">Eliminar</th>
                </tr>

</thead>
<tbody>
                <?php
   while($row=mysqli_fetch_array($result)){
    echo"<tr>";
    echo"<td>".$row['maq_id']."</td>";
    echo"<td>".$row['maq_nombre']."</td>";
    echo"<td>".$row['est_nombre']."</td>";
    echo"<td>".$row['tipo_maq_descripcion']."</td>";

        
        

  ?>
 
 <td><a onclick="editar_maq('<?php echo $row['maq_id']; ?>')"><button data-target="modal1" type='button'class='btn-floating btn-large-small yellow accent-4 pulse'><i class="material-icons">edit</i></button></a></td>
 <td><a onclick="eliminarmaq('<?php echo $row['maq_id']; ?>')"><button type='button'id='btn_elim6'name="btn_elim6"class='btn-floating btn-large-small red pulse'><i class="material-icons">delete</i></button></a></td>

   <?php

        echo"</tr>";
        }
        
    ?>


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