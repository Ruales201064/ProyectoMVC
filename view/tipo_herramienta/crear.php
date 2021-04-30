<!DOCTYPE html>
<html lang="en">
             
     <?php
             include_once('../../view/head.php');
    ?>
  <body>
    <?php
             include_once('../../view/header.php');
     ?>
  
          <?php
              include_once('../../view/menu.php');
           ?>  
                
             
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>

        
<div class="row">
<div class="col s6 offset-s3">
      <div class="card-panel z-depth-5">
      <form  method="POST" action="../../controller/tipo_herramienta/insert.php">
     
              <h4>Registrar Tipo herramienta</h4>
              <br>
        <div class="contenedor">
        <div class="row">
                <div class="input-field col s11">
                  <input name="tipo_her_descripcion"type="text"required value="" >
                  <label for="Descripcion">Tipo herramienta</label>
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
         include_once('../../view/footer.php');
  ?>


  </body>
</html>