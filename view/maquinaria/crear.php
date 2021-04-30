
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

<?php
          include_once('../../model/Model.php');
          $resl= new ArchivoController();
    
          $campos="est_codigo,est_nombre";
          $tabla="tblestado";
         
          $estado=$resl->selectestado($campos,$tabla);


          $campos="tipo_maq_id,tipo_maq_descripcion";
          $tabla="tbltipo_maquinaria";
             
          $tipomaqu=$resl->selectmaquinaria($campos,$tabla);
 ?>  

<div class="row">
    
<div class="col s6 offset-s3">
      <div class="card-panel z-depth-5">
      
      <form  method="POST" action="../../controller/maquinaria/insermaquina.php">
     
              <h4>Registrar Maquinaria</h4>
            
        <div class="contenedor">
              <div class="row">

                <div class="input-field col s6">
                  <input name="maq_nombre" type="text" required value="" >
                  <label for="nombre">Nombre</label>
                  </div>

                 
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
  
            <div class="row">
            <div class="input-field col s12">
                <select name="tbltipo_maquinaria_tipo_maq_id">
                  <option>Tipo Maquinaria</option>
                 <?php  
                  while($row=mysqli_fetch_array($tipomaqu)){ 
                  echo "<option value='".$row['tipo_maq_id']."'>".$row['tipo_maq_descripcion']." </option>"; 
                     
                   }    
                 ?>
                </select>
            
            </div>
            </div>
            </div> 
            <button class="btn blue lighten-1" type="submit" name="insert2">Registrar
                    <i class="material-icons right ">input</i>
                </button> 
            </form>
       
    
     </div>
</div>
</div>
    <?php
         include_once('../../view/footer.php');
     ?>
  </body>
</html>