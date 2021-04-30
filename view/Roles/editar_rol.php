
<!DOCTYPE html>
<html lang="en">

<?php
                include_once('../head.php');
  ?>
  <body>
    <!-- Start Page Loading -->
    
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        
        <?php

            include_once'../../model/Model.php';

            $objetose= new ArchivoController();
            
            if(isset($_GET)){
                $editar_id=$_GET['codigo'];
            
                $campos="rol_codigo,rol_nombre";
                $tablas="tblrol";
                $where="rol_codigo=$editar_id" ;
    
                //$campos="*";
                //$tablas="tblcliente";
                //$where="cli_id='$editar_id'";
               $respuesta=$objetose->selectedit($campos,$tablas,$where);
               $fila=mysqli_fetch_array($respuesta);
               
              }








         ?>


        
<div class="row">
    
<div class="col s8 offset-s1 ">
      <div class="card-panel z-depth-5">
      
      <form  method="POST"  id="form_rol" >
     
              <h4>Editar Rol</h4>
        <div class="contenedor">

        <div class="row">
                
                <div class="input-field col s12">
                <i class="material-icons prefix">content_paste</i>
                  <input placeholder="codigo" name="rol_codigo" type="number" readonly="" value="<?php echo $fila['rol_codigo']?>">
                  <label for="codigo">Codigo</label>
                </div>

                <div class="input-field col s12">
                <i class="material-icons prefix">add_location</i>
                  <input placeholder="nombre" name="rol_nombre" type="text" value="<?php echo $fila['rol_nombre']?>" >
                  <label for="Nombre">Nombre</label>
                </div>

               
            </div>             


            <button id="btn_editar"name="btn_editar"class="btn blue lighten-1" type="submit">Editar
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
    
    <script type="text/javascript" src="../../web/vendors/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../web/js/funciones.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
       $('#btn_editar').on('click',function(e){
           e.preventDefault();
           editar_rol();
       })

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