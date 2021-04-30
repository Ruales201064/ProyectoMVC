
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

            $campo="usu_id,usu_nombre1";
            $tbles="tblusuario";  
            $usuario=$objetose->selectuser($campo,$tbles);
          
            $campo="pro_id,pro_nombre";
            $tbles="tblproveedor";  
            $proveedor=$objetose->selectprov($campo,$tbles);

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
                        <input id="existencia"type="number"name="inv_existencia"class="validate">
                        <label for="existencia">Existencia</label>
                      </div>
                      
                      <div class="input-field col s3">
                        <input id="costo" type="number"name="inv_costo"class="validate">
                        <label for="costo">Costo</label>
                      </div>
                      
                      <div class="input-field col s3">
                        <input id="inv_stock_minimo"type="number"name="inv_stock_minimo"class="validate">
                        <label for="inv_stock_minimo">Stock minimo</label>
                      </div>
                      
                    <div class="row">
                    <div class="input-field col s3">
                        <input id="inv_stock_mazimo"type="number"name="inv_stock_mazimo"class="validate">
                        <label for="inv_stock_mazimo">Stock maximo</label>
                      </div>
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
                        <select name="tblherramienta_her_id" >
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
                        <select name="tblbodega_bod_id" >
                          <option>selecione Bodega</option>
                        <?php  
                          while($row=mysqli_fetch_array($bodega)){ 
                          echo "<option value='".$row['bod_id']."'>".$row['bod_nombre']." </option>";   
                          }    
                        ?>
                        </select>
                    </div>
                </div>
   
      <tr><td>&nbsp;</td></tr>
        <div style="overflow:auto;height:230px">
             <table class="table"> 							       
                   <theader>                                  	
                        <tr>
                            <th height="10%" bgcolor="deepskyblue"><h5 align="center">Movimiento</h5></th>
                            <td  width="10%" bgcolor="deepskyblue"></td>
                            <td  width="5%" bgcolor="deepskyblue"></td>        
                           
                        </tr>                                      
                  </theader>
            
            
              <tbody id="tbody_fv" >
                    <td>                
                      
      <div class="row">
            <div class="input-field col s4">
                 <input id="mov_num_factura" type="number" name="mov_num_factura"class="validate">
                 <label for="factura">Factura</label>
              </div>

              <div class="input-field col s4">
                 <input id="mov_concepto"type="text" name= "mov_concepto"class="validate">
                 <label for="concepto">Concepto</label>
              </div>
             
              <div class="input-field col s4">
                 <input id="fecha" type="date" name="mov_fecha_movimiento"class="validate">
                 <label for="fecha">Fecha</label>
              </div>
      </div> 

        <div class="row">
              <div class="input-field col s4">
                 <input id="Tipo" type="text" name="mov_tipo_movimiento"class="validate">
                 <label for="Tipo">Tipo Movimiento</label>
              </div>
          
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
                <select name="tblproveedor_pro_nit">
                  <option>Proveedor</option>
                 <?php  
                  while($row=mysqli_fetch_array($proveedor)){ 
                  echo "<option value='".$row['pro_id']."'>".$row['pro_nombre']." </option>"; 
                     
                   }    
                 ?>
                </select>
             </div>
          </div>

             </div>
             </td>
             </tr>
        </tbody>
       </table>
    </div> 
  					  
      <button class="btn blue lighten-1"type="submit"name="insert2">Registrar</button> 
</form>
      <?php
         include_once('../../view/footer.php');
       ?>


</html>