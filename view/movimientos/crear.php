
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
          
            $campo="pro_id,pro_nombre";
            $tbles="tblproveedor";  
            $proveedor=$objetose->selectprov($campo,$tbles);
             
           
      


 ?>
                  
                               
                         
<div class="row">
    <div class="col s6 offset-s2">
         <div class="card-panel z-depth-5">
      
    <form  method="POST" action="../../controller/movimientos/insert.php">
     
              <h4>Registrar Movimiento</h4>
              <br>
    <div class="contenedor">
        
            
            
            <div class="row">
            <div class="input-field col s6">
                 <input id="mov_num_factura" type="number" name="mov_num_factura"class="validate">
                 <label for="factura">Mov Factura</label>
              </div>

              <div class="input-field col s6">
                 <input id="mov_concepto" type="text" name="mov_concepto"class="validate">
                 <label for="concepto">Concepto</label>
              </div>
              
            </div>
            



            <div class="row">
            <div class="input-field col s6">
                 <input id="fecha" type="date" name="mov_fecha_movimiento"class="validate">
                 <label for="fecha">Fecha</label>
              </div>

              <div class="input-field col s6">
                 <input id="Tipo" type="text" name="mov_tipo_movimiento"class="validate">
                 <label for="Tipo">Tipo Movimiento</label>
              </div>
              
            </div>
            
               
            
            <div class="row">
             
            
             <div class="input-field col s6">
                <select name="tblusuario_usu_id">
                  <option>Usuario</option>
                 <?php  
                  while($row=mysqli_fetch_array($usuario)){ 
                  echo "<option value='".$row['usu_id']."'>".$row['usu_nombre1']." </option>"; 
                     
                   }    
                 ?>
                </select>
            
            </div>



            <div class="input-field col s6">
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