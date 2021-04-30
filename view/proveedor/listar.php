
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
     $campos="pro_id,pro_nit,pro_razon_social,pro_nombre,pro_direccion,pro_correo,pro_telefono";
     $tabla="tblproveedor";
     $where=" pro_id=pro_id";
     $result=$resl->consultarproveedor($campos, $tabla,$where);

    


       
      ?>
      


      
       <h6>LISTA DE PROVEEDORES</h6>
<table  class="striped" id="eliminar">
<thead>       
                <tr>
                    <th>Codigo</th>
                    <th>Nit</th>
                    <th>Razon</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    
                </tr>

</thead>
<tbody>
                <?php
   while($row=mysqli_fetch_array($result)){
    echo"<tr>";
    echo"<td>".$row['pro_id']."</td>";
    echo"<td>".$row['pro_nit']."</td>";
    echo"<td>".$row['pro_razon_social']."</td>";
    echo"<td>".$row['pro_nombre']."</td>";
    echo"<td>".$row['pro_direccion']."</td>";
    echo"<td>".$row['pro_correo']."</td>";
    echo"<td>".$row['pro_telefono']."</td>";

        
        

  ?>
 
 
 <td><a onclick="editar_prov('<?php echo $row['pro_id']; ?>')"><button   data-target="modal1" type='button'class='btn-floating btn-large-small yellow accent-4 pulse'><i class="material-icons">edit</i></button></a></td>
 <td><a onclick="eliminar_datos1('<?php echo $row['pro_id']; ?>')"><button   data-target="modal2" type='button'class='btn-floating btn-large-small red pulse'><i class="material-icons">delete</i></button></a></td>
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