
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

<br>  

 <?php

   
       include_once('../../model/Model.php');

            $objetose= new ArchivoController();
          
           $campo="est_codigo,est_nombre";
            $tbles="tblestado";  
            $estado=$objetose->selectestado($campo,$tbles);
          
            $campo="tipo_mat_id,tipo_mat_descripcion";
            $tbles="tbltipo_material";  
            $material=$objetose->selecttmat($campo,$tbles);
             
           
      


 ?>
                  
                               
                         
<div class="row">
    <div class="col s6 offset-s2">
         <div class="card-panel z-depth-5">
      
    <form  method="POST" action="../../controller/material/insert.php">
     
              <h4>Registrar Material</h4>
              <br>
    <div class="contenedor">
        
            
            
            <div class="row">
            <div class="input-field col s6">
                 <input id="nombre" type="text" name="mat_nombre"class="validate">
                 <label for="documento">Nombre</label>
              </div>

              <div class="input-field col s6">
                 <input id="fecha" type="date" name="mat_fecha_vencimiento"class="validate">
                 <label for="documento">Fecha</label>
              </div>
              
            </div>
            
               
            
            <div class="row">
             
            
             <div class="input-field col s6">
                <select name="tblestado_est_codigo">
                  <option>Estado</option>
                 <?php  
                  while($row=mysqli_fetch_array($estado)){ 
                  echo "<option value='".$row['est_codigo']."'>".$row['est_nombre']." </option>"; 
                     
                   }    
                 ?>
                </select>
            
            </div>



            <div class="input-field col s6">
                <select name="tbltipo_material_tipo_mat_id">
                  <option>Tipo de material</option>
                 <?php  
                  while($row1=mysqli_fetch_array($material)){ 
                  echo "<option value='".$row1['tipo_mat_id']."'>".$row1['tipo_mat_descripcion']." </option>"; 
                     
                   }    
                 ?>
                </select>
            
            </div>
            </div>
                
                <button class="btn blue lighten-1" type="submit"name="insert2">Registrar
                    <i class="material-icons right ">input</i>
                </button> 
           </form>
      </div>
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