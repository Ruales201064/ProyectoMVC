
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
    
<div class="col s5 offset-s3">
      <div class="card-panel z-depth-5">
      
      <form  method="POST" action="../../controller/tipo daño/inserdano.php">
     
              <h4>Registrar tipo de daño</h4>
        <div class="contenedor">

    
        <div class="row">
                
               <!--  <div class="input-field col s6">
                <i class="material-icons prefix">content_paste</i>
                  <input placeholder="ID" name="tipo_daño_id" type="number" required value="">
                  <label for="codigo">ID</label>
                </div> -->
                <div class="input-field col s11">
                <i class="material-icons prefix">account_circle</i>
                  <input placeholder="Descipción" name="tipo_dano_descripcion" type="text" required value="" >
                  <label for="razon">Descripción</label>
                </div>
            </div>

            </div>

            <button class="btn blue lighten-1" type="submit" name="insertd">Registrar
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
    
    <!-- Start Page Loading -->
    <?php
         include_once('../../view/footer.php');
     ?>
  </body>
</html>