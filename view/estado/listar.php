<!DOCTYPE html>


  


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
    
          $campos="est_codigo,est_nombre";
          $tabla="tblestado";
          $where="est_codigo=est_codigo";
          $result=$resl->consultarestado($campos, $tabla,$where);
           
          ?>
        
          
           <h6>LISTA DE ESTADO</h6>
    <table  class="striped" id="eliminar2" >
                      
                    <tr>
                        <th>Codigo</th>
                        <th>Estado</th>
                        <th colsan="1">Editar</th>
                        <th colsan="1">Elimiar</th>
                        
                    </tr>
    
    
                    <?php
       while($row=mysqli_fetch_array($result)){
        echo"<tr>";
        echo"<td>".$row['est_codigo']."</td>";
        echo"<td>".$row['est_nombre']."</td>";
    
            
            
    
      ?>
     
     
     <td><a onclick="editarestado('<?php echo $row['est_codigo']; ?>')"><button data-target="modal1" type='button'class='btn-floating btn-large-small yellow accent-4 pulse'><i class="material-icons">edit</i></button></a></td>
     <td><a onclick="eliminarestado('<?php echo $row['est_codigo']; ?>')"><button type='button'id='btn_elimi3' name="btn_elimi3" class='btn-floating btn-large-small red pulse'><i class="material-icons">delete</i></button></a></td>
    
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