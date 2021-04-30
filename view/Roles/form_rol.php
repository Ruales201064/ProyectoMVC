<!DOCTYPE html>
<html lang="en">

<?php
                include_once('../head.php');
  ?>
  <body>
    <!-- Start Page Loading -->
    <?php
         include_once('../header.php');
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
      
      <form  method="POST" action="../../controller/roles/insert_rol.php">
     
              <h4>Registrar Rol</h4>
        <div class="contenedor">
        <div class="row">
            <div class="input-field col s11">
                  <input name="rol_nombre" type="text" required value="" >
                  <label for="Nombre Rol">Nombre</label>
                </div>
               <div class="input-field col s6">
                   
              </div>
              </div>
              <button class="btn blue lighten-1" type="submit" name="insert2">Registrar
                </button> 
          </form>
     </div>
</div>
</div>        
    
    <?php
         include_once('../footer.php');
     ?>
  </body>
</html>