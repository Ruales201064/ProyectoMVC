
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


$id=$_GET['inv_id']; 

$campos="im.inv_mov_id,i.tblmaterial_mat_id,im.inv_mov_cantidad,
i.inv_costo,i.inv_existencia,im.inv_mov_valor_total,
i.inv_stock_minimo,i.inv_id,i.inv_stock_mazimo,m.mat_nombre,
mv.mov_num_factura,mv.mov_concepto,p.pro_id,
p.pro_nombre,h.her_id,h.her_nombre,mq.maq_id,mq.maq_nombre,
b.bod_nombre,b.bod_id,mv.mov_fecha_movimiento,mv.mov_id,
mv.mov_tipo_movimiento,u.usu_id,u.usu_nombre1";

$tabla="tblinventario_movimiento im,tblinventario i,
tblmaterial m,tblherramienta h,tblmaquinaria mq,tblbodega b,
tblmovimiento mv,tblusuario u,tblproveedor p";

$where="i.inv_id=(SELECT tblinventario_inv_id from tblinventario_movimiento 
where inv_mov_id = $id) and mv.mov_id=(SELECT tblmovimiento_mov_id 
from tblinventario_movimiento where inv_mov_id = $id )

and m.mat_id=(SELECT tblmaterial_mat_id from tblinventario
where inv_id = (SELECT tblinventario_inv_id from tblinventario_movimiento 
where inv_mov_id =$id))

and h.her_id=(SELECT tblherramienta_her_id from tblinventario 
where inv_id=(SELECT tblinventario_inv_id from tblinventario_movimiento
where inv_mov_id=$id))

and mq.maq_id=(SELECT tblmaquinaria_maq_id from tblinventario 
where inv_id=(SELECT tblinventario_inv_id from tblinventario_movimiento
where inv_mov_id=$id))

and b.bod_id=(SELECT tblbodega_bod_id from tblinventario 
where inv_id=(SELECT tblinventario_inv_id from tblinventario_movimiento
where inv_mov_id=$id))

and u.usu_id=(SELECT tblusuario_usu_id from tblmovimiento 
where mov_id=(SELECT tblmovimiento_mov_id from tblinventario_movimiento where inv_mov_id=$id))
and p.pro_id=(select tblproveedor_pro_nit from tblmovimiento
where mov_id=(select tblmovimiento_mov_id from tblinventario_movimiento 
where inv_mov_id=$id))and im.inv_mov_id = $id";

$respuesta=$objetose->selecteditinventario($campos,$tabla,$where);
$row=mysqli_fetch_array($respuesta);

$respuesta=$objetose->selecteditinventario($campos,$tabla,$where);
$row1=mysqli_fetch_array($respuesta);

$respuesta=$objetose->selecteditinventario($campos,$tabla,$where);
$fila2=mysqli_fetch_array($respuesta);   

$respuesta=$objetose->selecteditinventario($campos,$tabla,$where);
$fila3=mysqli_fetch_array($respuesta);   

$respuesta=$objetose->selecteditinventario($campos,$tabla,$where);
$fila4=mysqli_fetch_array($respuesta);

$respuesta=$objetose->selecteditinventario($campos,$tabla,$where);
$fila5=mysqli_fetch_array($respuesta);


$respuesta=$objetose->selecteditinventario($campos,$tabla,$where);
$fila6=mysqli_fetch_array($respuesta);
         


?>
              
<div class="row">
  <div class="col s12 offset-s0 ">
  <div class="card-panel z-depth-10">
      <form method="POST" action="../../controller/inventario/edit.php" >
     
              <h4>Editar inventario</h4>
              
    <div class="contenedor">
        <div class="row">
           <div class="input-field col s3">
                 <input id="codigo"name="inv_mov_id"type="number"class="validate"  readonly value="<?php echo $row['inv_mov_id']?>" >
                 <label for="codigo">Codigo</label>
              </div>

              
              
              <div class="input-field col s3">
                 <input id="codigo"name="inv_mov_valor_total"type="number"class="validate"  value="<?php echo $row['inv_mov_valor_total']?>" >
                 <label for="codigo">Valor total</label>
              </div>

                
            <div class="input-field col s3">
                  <input id="existencia" name="inv_existencia"type="number" value="<?php echo $row['inv_existencia']?>">
                  <label for="existencia">Existencia</label>
            </div>
          </div> 

          <div class="row">
            <div class="input-field col s3">
               <input id="costo"name="inv_costo"type="number"value="<?php echo $row['inv_costo']?>">
               <input id="inventario"name="inv_id" type="hidden" value="<?php echo $row['inv_id']?>">
                <label for="costo">Costo</label> 
            </div>
       
            <div class="input-field col s3">
                  <input id="minimo"name="inv_stock_minimo"type="number"value="<?php echo $row['inv_stock_minimo']?>" >
                  <label for="minimo">Stock_minimo</label>
            </div>
          
            <div class="input-field col s3">
                  <input id="mazimo"name="inv_stock_mazimo" type="number"value="<?php echo $row['inv_stock_mazimo']?>">
                  <label for="mazimo">Stock_maximo</label>
            </div>
          
          <div class="input-field col s3">
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
                        
                      echo"<option value='".$fila2['tblherramienta_her_id']."'>".$fila2['her_nombre']."</option>";

                      while($fila2=mysqli_fetch_array($herramienta)){
                
                                                
                        echo "<option value=".$fila2['her_id'].">".$fila2['her_nombre']."</option>";   
                    }
                    ?> 
                    </select>
                 </div>

                <div class="input-field col s4">
                    <select name="tblmaquinaria_maq_id">
                    <?php 
                        
                     echo"<option value='".$fila3['tblmaquinaria_maq_id']."'>".$fila3['maq_nombre']."</option>";
                      while($fila3=mysqli_fetch_array($maquinaria)){
                
                                                
                        echo"<option value=".$fila3['maq_id'].">".$fila3['maq_nombre']."</option>";
                          
                    }
                    ?> 
                    </select>  
                </div>

                <div class="input-field col s4">
                    <select name="tblbodega_bod_id">
                    <?php 
                        
                     echo"<option value='".$fila4['bod_id']."'>".$fila4['bod_nombre']."</option>";
                      while($fila4=mysqli_fetch_array($bodega)){
                
                                                
                        echo"<option value=".$fila4['bod_id'].">".$fila4['bod_nombre']."</option>";
                          
                    }
                    ?> 
                    </select>  
              </div>
            </div>
            
      <div class="row"> 

      <div class="input-field col s4">
                  <input id="fecha"name="mov_id" type="text" readonly value="<?php echo $row['mov_id']?>">
                  <label for="fecha">Codigo</label>
            </div>
            <div class="input-field col s4">
                  <input id="factura"name="mov_num_factura" type="number"value="<?php echo $row['mov_num_factura']?>">
                  <label for="factura">Factura</label>
            </div>
          
            <div class="input-field col s4">
                  <input id="concepto"name="mov_concepto" type="text"value="<?php echo $row['mov_concepto']?>">
                  <label for="concepto">Concepto</label>
            </div>

            <div class="input-field col s3">
                  <input id="fecha"name="mov_fecha_movimiento" type="date"value="<?php echo $row['mov_fecha_movimiento']?>">
                  <label for="fecha">fecha</label>
            </div>
            
            <div class="input-field col s3">
                  <input id="fecha"name="mov_tipo_movimiento" type="text"value="<?php echo $row['mov_tipo_movimiento']?>">
                  <label for="fecha">Tipo Movirmento</label>
            </div>




            <div class="input-field col s3">
                <select name="tblusuario_usu_id">
                    <?php 
                        
                      echo"<option value='".$fila5['tblusuario_usu_id']."'>".$fila5['usu_nombre1']."</option>";

                      while($fila5=mysqli_fetch_array($usuario)){
                
                                                
                        echo "<option value=".$fila5['usu_id'].">".$fila5['usu_nombre1']."</option>";   
                    }
                    ?> 
                    </select>
                 </div>

                <div class="input-field col s3">
                    <select name="tblproveedor_pro_nit">
                    <?php 
                        
                     echo"<option value='".$fila6['tblproveedor_pro_nit']."'>".$fila6['pro_nombre']."</option>";
                      while($fila6=mysqli_fetch_array($proveedor)){
                
                                                
                        echo"<option value=".$fila6['pro_id'].">".$fila6['pro_nombre']."</option>";
                          
                    }
                    ?> 
                    </select>  
                </div>


          </div>  
             
          <div class="row"> 
         

         


               

               
                    <button class="btn blue lighten-1" type="submit" name="act">Actualizar
                            <i class="material-icons right ">input</i>
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