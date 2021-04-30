
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
          
            $campo="usu_id,usu_nombre1";
            $tbles="tblusuario";  
            $usuario=$objetose->selectuser($campo,$tbles);
          
            $campo="est_codigo,est_nombre";
            $tbles="tblestado";  
            $estado=$objetose->selectestado($campo,$tbles);
          
            $campo="tipo_dano_id,tipo_dano_descripcion";
            $tbles="tbltipo_dano";  
            $dano=$objetose->selecttipo($campo,$tbles);
?>
                  
                               
                         
<div class="row">
    <div class="col s7 offset-s2">
         <div class="card-panel z-depth-5">
      
    <form  method="POST" action="../../controller/caso/insert.php" enctype="multipart/form-data">
     
              <h4>Registrar Caso</h4>
              <br>
    <div class="contenedor">
        
            
            
            <div class="row">
            <div class="input-field col s4">
                 <input id="numero" type="number" name="caso_num_tramo"class="validate">
                 <label for="numero">Numero Tramo</label>
              </div>
              
              <div class="input-field col s4">
                 <input id="descripcion" type="text" name="caso_descripcion"class="validate">
                 <label for="descripcion">Descripcion</label>
              </div>

              <div class="input-field col s4">
                 <input id="direccion" type="text" name="caso_direccion_dano"class="validate">
                 <label for="direccion">Direccion</label>
              </div>
              </div>
              
            <div class="row">   

            <div class="input-field col s4">
                 <input id="ancho" type="text" name="caso_ancho"class="validate">
                 <label for="ancho">Ancho</label>
              </div>

            <div class="input-field col s4">
                 <input id="largo" type="text" name="caso_largo"class="validate">
                 <label for="largo">Largo</label>
              </div>
              
              <div class="input-field col s4">
                 <input id="profundidad" type="text" name="caso_profundidad"class="validate">
                 <label for="profundidad">Profundidad</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s4">
                 <input id="prioridad" type="text" name="caso_prioridad"class="validate">
                 <label for="prioridad">Prioridad</label>
              </div>

              <div class="form-group col-md-12">
            <label>Foto Daño</label>
            <input type="file" name="caso_foto_dano">
            </div>
            </div>
            
            <div class="row">
             
            <div class="input-field col s4">
                <select name="tblusuario_usu_id">
                  <option>Usuario</option>
                 <?php  
                  while($row=mysqli_fetch_array($usuario)){ 
                  echo "<option value='".$row['usu_id']."'>".$row['usu_nombre1']." </option>"; 
                     
                   }    
                 ?>
                </select>
            
            </div>

             <div class="input-field col s4">
                <select name="tblestado_est_codigo">
                  <option>Estado</option>
                 <?php  
                  while($row=mysqli_fetch_array($estado)){ 
                  echo "<option value='".$row['est_codigo']."'>".$row['est_nombre']." </option>"; 
                     
                   }    
                 ?>
                </select>
            
            </div>



            <div class="input-field col s4">
                <select name="tbltipo_dano_tipo_dano_id">
                  <option>Tipo Daño</option>
                 <?php  
                  while($row=mysqli_fetch_array($dano)){ 
                  echo "<option value='".$row['tipo_dano_id']."'>".$row['tipo_dano_descripcion']." </option>"; 
                     
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

    <?php
         include_once('../../view/footer.php');
     ?>
  </body>
</html>