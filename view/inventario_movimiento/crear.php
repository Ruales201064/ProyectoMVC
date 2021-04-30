
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
          
           $campo="mat_id,mat_nombre";
            $tbles="tblmaterial";  
            $material=$objetose->selecttmat($campo,$tbles);

            $campo="her_id,her_nombre";
            $tbles="tblherramienta";  
            $herramienta=$objetose->selectherra($campo,$tbles);
             
            $campo="maq_id,maq_nombre";
            $tbles="tblmaquinaria";  
            $maquinaria=$objetose->selectmaquinaria($campo,$tbles);
            
            $campo="bod_id,bod_nombre";
            $tbles="tblbodega";  
            $bodega=$objetose->selectbodega($campo,$tbles);

 ?>
                                       
<div class="row">
    <div class="col s8 offset-s2">
         <div class="card-panel z-depth-5">
      
    <form  method="POST" action="../../controller/inventario/insert.php">
     
              <h4>Registrar inventario</h4>
              <br>
    <div class="contenedor">
        <div class="row">
            <div class="input-field col s3">
                 <input id="cantidad"type="number"name="inv_mov_cantidad"class="validate">
                 <label for="cantidad">Existencia</label>
              </div>
              
              <div class="input-field col s3">
                 <input id="valortotal" type="number"name="inv_mov_valor_total"class="validate">
                 <label for="valortotal">Costo</label>
              </div>
              
           <div class="row">
             <div class="input-field col s3">
                <select name="tblmaterial_mat_id">
                  <option>selecione Material</option>
                 <?php  
                  while($row=mysqli_fetch_array($material)){

                  echo "<option value='".$row['mat_id']."'>".$row['mat_nombre']." </option>"; 
                     
                   }    
                 ?>
                </select>
            
            </div>
            
            <div class="input-field col s3">
                <select name="tblherramienta_her_id">
                  <option>selecione Herramienta</option>
                 <?php  
                  while($row=mysqli_fetch_array($herramienta)){ 
                  echo "<option value='".$row['her_id']."'>".$row['her_nombre']." </option>";   
                   }    
                 ?>
                </select>
            </div>
              <div class="input-field col s3">
                <select name="tblmaquinaria_maq_id">
                  <option>selecione Maquinaria</option>
                 <?php  
                  while($row=mysqli_fetch_array($maquinaria)){ 
                  echo "<option value='".$row['maq_id']."'>".$row['maq_nombre']." </option>";   
                   }    
                 ?>
                </select>
              </div>
          
              <div class="input-field col s3">
                <select name="tblbodega_bod_id">
                  <option>selecione Bodega</option>
                 <?php  
                  while($row=mysqli_fetch_array($bodega)){ 
                  echo "<option value='".$row['bod_id']."'>".$row['bod_nombre']." </option>";   
                   }    
                 ?>
                </select>
              </div>
            </div>
                
                <button class="btn blue lighten-1"type="submit"name="insert2">Registrar
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