
<!DOCTYPE html>
<html lang="en">

<?php
                include_once('../../view/head.php');
  ?>
  <body>
    <!-- Start Page Loading -->
    
          
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>

<br>  

 <?php

   
       include_once('../../model/Model.php');

            $objetose= new ArchivoController();

            if(isset($_GET)){
             $editar_id=$_GET['codigo'];
          
           $campo="est_codigo,est_nombre";
            $tbles="tblestado";  
            $estado=$objetose->selectestado($campo,$tbles);
            
            
            $campo="tipo_her_id,tipo_her_descripcion";
            $tbles="tbltipo_herramienta";  
            $herramienta=$objetose->selectherra($campo,$tbles);
             
            $campos="her_id,her_nombre,tblestado_est_codigo,tbltipo_herramienta_tipo_her_id,est_nombre,tipo_her_descripcion";
            $tablas="tblherramienta,tblestado,tbltipo_herramienta";  
            $where="tblherramienta.tblestado_est_codigo=tblestado.est_codigo AND tblherramienta.tbltipo_herramienta_tipo_her_id=tbltipo_herramienta.tipo_her_id AND her_id=$editar_id" ;

            $res=$objetose->selectedit($campos,$tablas,$where);
            $fila=mysqli_fetch_array($res);

            $res=$objetose->selectedit($campos,$tablas,$where);
            $fila2=mysqli_fetch_array($res);

            }
      


 ?>
                  
                               
                         
<div class="row">
    <div class="col s10 offset-s2">
         <div class="card-panel z-depth-5">
      
    <form  method="POST"  id="form_editarH">
     
              <h4>Detalle Herramienta</h4>
              <br>
    <div class="contenedor">
        
            
            
            <div class="row">
            <div class="input-field col s6">
                 <input id="nombre" type="text" name="her_id"  readonly value="<?php echo $fila['her_id']?>">
                 <label for="documento">Codigo</label>
              </div>



            <div class="input-field col s6">
                 <input id="nombre" type="text" name="her_nombre" readonly value="<?php echo $fila['her_nombre']?>">
                 <label for="documento">Nombre</label>
              </div>
              
            </div>
            
               
            
            <div class="row">
             
               <div class="input-field col s6">
                 <input id="nombre" type="text" name="est_nombre" readonly value="<?php echo $fila['est_nombre']?>">
                 <label for="documento">Estado</label>
              </div>

               <div class="input-field col s6">
                 <input id="nombre" type="text" name="tipo_her_descripcion"  readonly value="<?php echo $fila['tipo_her_descripcion']?>">
                 <label for="documento">T.Herramienta</label>
                </div>
                
            </div>
        
            
            </div>



           
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
    
    <script type="text/javascript" src="../../web/vendors/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../web/js/funciones.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
       $('#btn_editar29').on('click',function(e){
           e.preventDefault();
           editar_herra();
       })

      });
      
      </script>


    <script type="text/javascript">
        
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