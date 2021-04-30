<!DOCTYPE html>
<html lang="en">

<?php
                 include_once('../../view/head.php');
  ?>
  <body>
  <?php
        include_once('../../view/header.php');
     ?>          
    
   <?php
     include_once('../../view/menu.php');
    ?>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>


        
<div class="row">
    
<div class="col s8 offset-s2">
      <div class="card-panel z-depth-5">
     
      <?php
      
      include_once'../../model/Model.php';
      $resl= new ArchivoController();
      $campos=" rol_codigo,rol_nombre";
      $tabla="tblrol";
      $where=" rol_codigo=rol_codigo";
      $result=$resl->consultarrol($campos, $tabla,$where);

     //$con=mysqli_connect("localhost","root","","costo_iventario");
     //$result=mysqli_query($con,"select * from tblproveedor");


       
      ?>
      


      
       <h4>LISTA DE ROLES</h4>
       <br>
<table  class="striped" id="eliminar2" >
                  
                <tr>
                    <th>Codigo</th>
                    <th>Nombre Rol</th>
                    <th>Editar</th>
                    <th>Elimiar</th>
                    
                    
                </tr>


                <?php
   while($row=mysqli_fetch_array($result)){
    echo"<tr>";
    echo"<td>".$row['rol_codigo']."</td>";
    echo"<td>".$row['rol_nombre']."</td>";

        
        

  ?>
 
 
 <td><a onclick="editar_rol2('<?php echo $row['rol_codigo']; ?>')"><button data-target="modal1" type='button'class='btn-floating btn-large-small yellow accent-4 pulse'><i class="material-icons">edit</i></button></a></td>
 <td><a onclick="eliminar_rol('<?php echo $row['rol_codigo']; ?>')"><button type='button'id='btn_eliminar2' name="btn_eliminar2" class='btn-floating btn-large-small red pulse'><i class="material-icons">delete</i></button></a></td>

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