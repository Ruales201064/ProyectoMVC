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


        
<div class="row">
    
<div class="col s6 offset-s3">
      <div class="card-panel z-depth-5">
         <form  method="POST" action="../../controller/proveedor/inserprov.php">
     
      <h4>Registrar Proveedor</h4>
        <div class="contenedor">
            <div class="row">
                <div class="input-field col s4">
                  <input name="pro_nit" type="number" required value="">
                  <label for="codigo">Nit</label>
                </div>
                <div class="input-field col s4">
                  <input  name="pro_razon_social" type="text"required value="" >
                  <label for="razon">Razon Social</label>
                </div>
          
                <div class="input-field col s4">
                  <input  name="pro_nombre" type="text"required value="" >
                  <label for="Nombre">Nombre</label>
                </div>
             </div>
              <div class="row">  
                <div class="input-field col s4">
                  <input  name="pro_direccion"type="text" required value="" >
                  <label for="Direccion">Direccion</label>
                </div>
                
                <div class="input-field col s4">
                  <input name="pro_correo"type="text"required value="" >
                  <label for="Correo">Correo</label>
                </div>
             
              
                <div class="input-field col s4">
                  <input name="pro_telefono" type="text" required value="" >
                  <label for="Telefono">Telefono</label>
                </div>
                
             </div>

      

            <button class="btn blue lighten-1" type="submit" name="insert2">Registrar
                    <i class="material-icons right ">input</i>
                </button>

           </form>
       </div>
    </div>
</div>

      </div>
      
    </div>
    
    <!-- Start Page Loading -->
    <?php
         include_once('../../view/footer.php');
     ?>
  </body>
</html>