
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
           
            $campo="caso_id,caso_descripcion";
            $tbles="tblcaso";  
            $caso=$objetose->selectcaso($campo,$tbles);

            $campo="est_codigo,est_nombre";
            $tbles="tblestado";  
            $tblestado=$objetose->selectestado($campo,$tbles);
      


 ?>
                  
                               
                         
<div class="row">
    <div class="col s8 offset-s2">
         <div class="card-panel z-depth-5">
      
    <form  method="POST" action="../../controller/orden_mantenimiento/inserorden.php">
     
              <h4>Registrar orden de mantenimiento</h4>
              <br>
    <div class="contenedor">
        <div class="row">
            <div class="input-field col s4">
                 <input id="ord_man_fecha" type="date" name="ord_man_fecha"class="validate">
                 <label for="fecha">Fecha</label>
              </div>
              
              <div class="input-field col s4">
                 <input id="ord_man_prioridad" type="text" name="ord_man_prioridad"class="validate">
                 <label for="ord_man_prioridad">Prioridad</label>
              </div>

            
            <div class="input-field col s4">
                <select name="tblusuario_usu_id">
                  <option>selecione Usuario</option>
                 <?php  
                  while($row=mysqli_fetch_array($usuario)){ 
                  echo "<option value='".$row['usu_id']."'>".$row['usu_nombre1']." </option>";   
                   }    
                 ?>
                </select>
                </div>
              </div>
              <div class="row"> 
              <div class="input-field col s6">
                <select name="tblcaso_cas_id">  
                  <option>selecione Caso</option>
                 <?php  
                  while($row=mysqli_fetch_array($caso)){ 
                  echo "<option value='".$row['caso_id']."'>".$row['caso_descripcion']." </option>";   
                   }    
                 ?>
                </select>
              </div>

              <div class="input-field col s6">
                <select name="tblestado_est_codigo">
                  <option>selecione Estado</option>
                 <?php  
                  while($row=mysqli_fetch_array($tblestado)){ 
                  echo "<option value='".$row['est_codigo']."'>".$row['est_nombre']." </option>";   
                   }    
                 ?>
                </select>
              </div>
            </div>
                <br>
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