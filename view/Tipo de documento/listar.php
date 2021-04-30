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
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>


        
<div class="row">
    
<div class="col s5 offset-s3">
      <div class="card-panel z-depth-5">
     
      <?php
      
      include_once'../../model/Model.php';
      $resl= new ArchivoController();
      $campos=" tipo_doc_codigo,tipo_doc_nombre";
      $tabla="tbltipo_documento";
      $where=" tipo_doc_codigo=tipo_doc_codigo";
      $result=$resl->consultardoc($campos, $tabla,$where);

     //$con=mysqli_connect("localhost","root","","costo_iventario");
     //$result=mysqli_query($con,"select * from tblproveedor");


       
      ?>
      


      
       <h6>Documentos</h6>
<table   class="striped" id="eliminar2" >
                  
                <tr>
                    <th>Codigo</th>
                    <th>Tipo de documento</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>


                <?php
   while($row=mysqli_fetch_array($result)){
    echo"<tr>";
    echo"<td>".$row['tipo_doc_codigo']."</td>";
    echo"<td>".$row['tipo_doc_nombre']."</td>";

        
        

  ?>
 
 
 <td><a onclick="editardoc2('<?php echo $row['tipo_doc_codigo']; ?>')"><button data-target="modal1" type='button'class='btn-floating btn-large-small yellow accent-4 pulse'><i class="material-icons">edit</i></button></a></td>
 <td><a onclick="eliminardoc('<?php echo $row['tipo_doc_codigo']; ?>')"><button type='button'id='btn_eliminar2' name="btn_eliminar2" class='btn-floating btn-large-small red pulse'><i class="material-icons">delete</i></button></a></td>







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
</html>