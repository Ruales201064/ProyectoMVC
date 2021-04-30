
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
          
           $campo="tipo_doc_codigo,tipo_doc_nombre";
            $tbles="tbltipo_documento";  
            $documento=$objetose->selectdocumento($campo,$tbles);
          
            $campo="rol_codigo,rol_nombre";
            $tbles="tblrol";  
            $tblrol=$objetose->selectrol($campo,$tbles);
             
            $campo="est_codigo,est_nombre";
            $tbles="tblestado";  
            $tblestado=$objetose->selectestado($campo,$tbles);
      


 ?>
                  
                               
                         
<div class="row">
    <div class="col s8 offset-s2">
         <div class="card-panel z-depth-5">
      
    <form  method="POST" action="../../controller/usuario/inserusuario.php">
     
              <h4>Registrar Usuario</h4>
              <br>
    <div class="contenedor">
        <div class="row">
            <div class="input-field col s3">
                 <input id="Documento" type="text" name="usu_documento"class="validate">
                 <label for="documento">Documento</label>
              </div>
              
              <div class="input-field col s3">
                 <input id="primer nombre" type="text" name="usu_nombre1"class="validate">
                 <label for="primer nombre">primer nombre</label>
              </div>
              
              <div class="input-field col s3">
                 <input id="segundo nombre" type="text" name="usu_nombre2"class="validate">
                 <label for="segundo nombre">Segundo nombre</label>
              </div>
              
            
              
            <div class="input-field col s3">
                 <input id="primer apellido" type="text" name="usu_apellido1"class="validate">
                 <label for="primer apellido">Primer apellido</label>
              </div>
              
            </div>
            
            <div class="row">
            <div class="input-field col s3">
                 <input id="segundo apellido" type="text" name="usu_apellido2"class="validate">
                 <label for="segundo apellido">segundo apellido</label>
              </div>
               
               
            <div class="input-field col s3">
                 <input id="Direccion" type="text" name="usu_direccion"class="validate">
                 <label for="Direccion">Direccion</label>
              </div>
            
               
             
            <div class="input-field col s3">
                 <input id="telefono" type="text" name="usu_telefono"class="validate">
                 <label for="telefono">Telefono</label>
              </div>
               
            <div class="input-field col s3">
                <input id="contrasena" type="password" name="usu_contrasena"class="validate">
                 <label for="contrasena">Contraseña</label>
              </div>
            
            </div>
            
            <div class="row">
             <div class="input-field col s3">
                 <input id="correo" type="text" name="usu_correo"class="validate">
                 <label for="correo">Correo</label>
              </div>
            
             <div class="input-field col s3">
                <select name="tbltipo_documento_tipo_doc_codigo">
                  <option>Tipo documento</option>
                 <?php  
                  while($row=mysqli_fetch_array($documento)){ 
                  echo "<option value='".$row['tipo_doc_codigo']."'>".$row['tipo_doc_nombre']." </option>"; 
                     
                   }    
                 ?>
                </select>
            
            </div>
            
            <div class="input-field col s3">
                <select name="tblrol_rol_codigo">
                  <option>selecione Rol</option>
                 <?php  
                  while($fila=mysqli_fetch_array($tblrol)){ 
                  echo "<option value='".$fila['rol_codigo']."'>".$fila['rol_nombre']." </option>";   
                   }    
                 ?>
                </select>
            </div>
              <div class="input-field col s3">
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