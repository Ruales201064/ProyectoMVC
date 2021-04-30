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


        
<div class="row">
    
<div class="col s6 offset-s3">
      <div class="card-panel z-depth-5">
      
      <form  method="POST" action="../../controller/tipo de documento/insert_doc.php">
     
              <h4>Registrar Tipo de documento</h4>
        <div class="contenedor">

    
        <div class="row">
                
                <div class="input-field col s6">
                <i class="material-icons prefix">content_paste</i>
                  <input placeholder="Codigo" name="tipo_doc_codigo" type="number" required value="">
                  <label for="Codigo">Codigo</label>
                </div>
                <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                  <input placeholder="Tipo documento" name="tipo_doc_nombre" type="text" required value="" >
                  <label for="Tipo documento">Nombre</label>
                </div>
            </div>

            <button class="btn blue lighten-1" type="submit" name="insert2">Registrar
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