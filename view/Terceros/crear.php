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

   
       include_once'../../model/Model.php';

            $objetose= new ArchivoController();
          
            $campo="tipo_doc_codigo,tipo_doc_nombre";
            $tbles="tbltipo_documento";  
            $documento=$objetose->selectdocumento($campo,$tbles);
 
 ?>
                 
                         
<div class="row">
    <div class="col s8 offset-s2">
         <div class="card-panel z-depth-5">
      
    <form  method="POST" action="../../controller/terceros/inserter.php">
     
              <h4>Registrar Terceros</h4>
              <br>
    <div class="contenedor">
        <div class="row">
            <div class="input-field col s4">
                 <input id="Documento" type="text" name="ter_num_documento"class="validate">
                 <label for="documento">Numero de Documento</label>
              </div>
              
              <div class="input-field col s4">
                 <input id="nombre1" type="text" name="ter_nombre1"class="validate">
                 <label for="primer nombre">Primer nombre</label>
              </div>
              
              <div class="input-field col s4">
                 <input id="nombre2" type="text" name="ter_nombre2"class="validate"><label for="segundo nombre">Segundo nombre</label>
              </div>
              
            </div>
          <div class="row">
            <div class="input-field col s4">
                 <input id="apellido1" type="text" name="ter_apellido1"class="validate"><label for="primer apellido">Primer apellido</label>
              </div>
              
            
           
            <div class="input-field col s4">
                 <input id="apellido2" type="text" name="ter_apellido2"class="validate">
                 <label for="segundo apellido">Segundo apellido</label>
              </div>
               
               
            <div class="input-field col s4">
                 <input id="direccion" type="text" name="ter_direccion"class="validate">
                 <label for="Direccion">Direccion</label>
              </div>
          </div>  
               
           
         <div class="row">   
            <div class="input-field col s4">
                 <input id="telefono" type="number" name="ter_telefono"class="validate">
                 <label for="Telefono">Telefono</label>
              </div>
               
            <div class="input-field col s4">
                 <input id="correo" type="text" name="ter_correo"class="validate">
                 <label for="Correo">Correo</label>
              </div>         
                  
             <div class="input-field col s4">
                <select name="tbltipo_documento_tipo_doc_codigo">
                  <option>Tipo documento</option>
                 <?php  
                  while($row=mysqli_fetch_array($documento)){ 
                  echo "<option value='".$row['tipo_doc_codigo']."'>".$row['tipo_doc_nombre']." </option>"; 
                     
                   }    
                 ?>
                </select>
            
            </div>
            </div>
        </div>
          <div class="row"> 
            <div class="input-field col s12">  
             <button class="btn blue lighten-1" type="submit" name="insert3">Registrar
                    <i class="material-icons right ">input</i>
              </button> 
            </div>
          </div>
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