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
          <a href="#" data-activates="slide-out"class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>

 <?php
      
      include_once('../../model/Model.php');
      $resl= new ArchivoController();

      $campos="tipo_zona_id,tipo_zona_descripcion";
      $tabla="tbltipo_zona";
  

      $result=$resl->selectipozona($campos,$tabla);

       
      ?>
        
<div class="row">
    
<div class="col s6 offset-s3">
      <div class="card-panel z-depth-5">
      
      <form  method="POST" action="../../controller/bodega/insert.php">
     
              <h4>Registrar Bodega</h4>
        <div class="contenedor">
        <div class="row">
              
                <div class="input-field col s6">
                <input placeholder="Nombre" name="bod_nombre"type="text" required value="" >
                  <label for="nombre">Nombre</label>
                </div>

                <div class="input-field col s6">
                <input placeholder="Direccion" name="bod_direccion"type="text" required value="" >
                  <label for="direccion">Direccion</label>
                </div>

                 <div class="input-field col s12">
                <select name="tbltipo_zona_tipo_zona_id">
                  <option>Tipo Zona</option>
                 <?php  
                  while($row=mysqli_fetch_array($result)){ 
                  echo "<option value='".$row['tipo_zona_id']."'>".$row['tipo_zona_descripcion']." </option>"; 
                     
                   }    
                 ?>
                </select>
            
            </div>
            </div>
              <button class="btn blue lighten-1" type="submit" name="insert2">Registrar
                    <i class="material-icons right">input</i>
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