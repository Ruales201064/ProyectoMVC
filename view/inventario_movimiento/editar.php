<!DOCTYPE html>
<html lang="en">

<?php
          include_once('../../view/head.php');
  ?>
  <body>
    <!-- Start Page Loading -->

    <br><br>
        
    <?php

        
        include_once('../../model/Model.php');
        $objetose= new ArchivoController();

        $id=$_GET['inv_id'];
        $campos="inv_id,inv_existencia,inv_costo,inv_stock_minimo,inv_stock_mazimo,tblmaterial_mat_id,tblherramienta_her_id,
        tblmaquinaria_maq_id,tblbodega_bod_id,mat_nombre,her_nombre,maq_nombre,bod_nombre";
  
        $tabla="tblinventario,tblmaterial,tblherramienta,tblmaquinaria,tblbodega";
  
         $where="tblinventario.tblmaterial_mat_id=tblmaterial.mat_id AND 
         tblinventario.tblherramienta_her_id=tblherramienta.her_id AND 
         tblinventario.tblmaquinaria_maq_id=tblmaquinaria.maq_id AND
         tblinventario.tblbodega_bod_id=tblbodega.bod_id AND inv_id=$id";  
         
       $respuesta=$objetose->selecteditinventario($campos,$tabla,$where);
       $row=mysqli_fetch_array($respuesta);


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
        
            
       
        
        

        $respuesta=$objetose->selecteditinventario($campos,$tabla,$where);
        $row1=mysqli_fetch_array($respuesta);

        $respuesta=$objetose->selecteditinventario($campos,$tabla,$where);
        
        $row2=mysqli_fetch_array($respuesta); 

        $respuesta=$objetose->selecteditinventario($campos,$tabla,$where);
        
        $row3=mysqli_fetch_array($respuesta);
        
        $respuesta=$objetose->selecteditinventario($campos,$tabla,$where);
        
        $row4=mysqli_fetch_array($respuesta);   


    ?>
              
<div class="row">
  <div class="col s10 offset-s1 ">
  <div class="card-panel z-depth-5">
      <form method="POST"id="form_inventario" >
     
              <h4>Editar inventario</h4>
              
    <div class="contenedor">
        <div class="row">
        <div class="input-field col s4">
                 <input id="codigo"name="inv_id"type="number"class="validate"value="<?php echo $row['inv_id']?>" >
                 <label for="codigo">Codigo</label>
              </div>
                
            <div class="input-field col s4">
                  <input id="existencia" name="inv_existencia"type="number"readonly value="<?php echo $row['inv_existencia']?>">
                  <label for="existencia">Existencia</label>
            </div>
            
            <div class="input-field col s4">
               <input id="costo"name="inv_costo"type="number"value="<?php echo $row['inv_costo']?>">
                <label for="costo">Costo</label> 
            </div>
        </div>

        <div class="row">
            <div class="input-field col s4">
                  <input id="minimo" name="inv_stock_minimo"type="number"value="<?php echo $row['inv_stock_minimo']?>" >
                  <label for="minimo">Stock_minimo</label>
            </div>
          
            <div class="input-field col s4">
                  <input id="mazimo"  name="inv_stock_mazimo" type="number"value="<?php echo $row['inv_stock_mazimo']?>">
                  <label for="mazimo">Stock_maximo</label>
            </div>
          
          <div class="input-field col s4">
                <select name="tblmaterial_mat_id">
                <?php 
               
               echo"<option value='".$row1['tblmaterial_mat_id']."'>".$row1['mat_nombre']."</option>";
               while($row1=mysqli_fetch_array($material)){
              
                echo "<option value=".$row1['mat_id'].">".$row1['mat_nombre']."</option>";
                  
            }
                                     
            ?> 
            </select>
            </div>
          </div>

            <div class="row"> 
                <div class="input-field col s4">
                <select name="tblherramienta_her_id">
                    <?php 
                        
                      echo"<option value='".$row2['tblherramienta_her_id']."'>".$row2['her_nombre']."</option>";

                      while($row2=mysqli_fetch_array($herramienta)){
                
                                                
                        echo "<option value=".$row2['her_id'].">".$row2['her_nombre']."</option>";   
                    }
                    ?> 
                    </select>
                 </div>

                <div class="input-field col s4">
                    <select name="tblmaquinaria_maq_id">
                    <?php 
                        
                     echo"<option value='".$row3['tblmaquinaria_maq_id']."'>".$row3['maq_nombre']."</option>";
                      while($row3=mysqli_fetch_array($maquinaria)){
                
                                                
                        echo"<option value=".$row3['maq_id'].">".$row3['maq_nombre']."</option>";
                          
                    }
                    ?> 
                    </select>  
                </div>

                <div class="input-field col s4">
                    <select name="tblbodega_bod_id">
                    <?php 
                        
                     echo"<option value='".$row4['tblbodega_bod_id']."'>".$row4['bod_nombre']."</option>";
                      while($row4=mysqli_fetch_array($bodega)){
                
                                                
                        echo"<option value=".$row4['bod_id'].">".$row4['bod_nombre']."</option>";
                          
                    }
                    ?> 
                    </select>  
              </div>
            
            </div>
          </div>       
                <button id="btn_inventario"name="btn_inventario"class="btn blue lighten-1"
                    type="submit">Editar</i>
                 </button> 
            </form>
        </div>
  </div>
  </div>  
  </div> 

    
    <script type="text/javascript" src="../../web/vendors/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../web/js/funciones.js"></script>

    <script type="text/javascript">
        
      $(document).ready(function(){
       $('#btn_inventario').on('click',function(e){
           e.preventDefault();
           editar_inven();
       })

      });
      
       $(document).ready(function(){
       $('select').formSelect();
      });
         
        
      </script>
     

    <!--materialize js-->
    <script type="text/javascript" src="../../web/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materializee.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../../web/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../../web/js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../../web/js/custom-script.js"></script>
  </body>
</html>