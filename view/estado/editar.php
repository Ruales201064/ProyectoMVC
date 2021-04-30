
<!DOCTYPE html>



  <body>
    
        <?php

                include_once('../../model/Model.php');
                $objetose= new ArchivoController();
            
            
                $est_codigo=$_GET['est_codigo'];

                $campos="est_codigo,est_nombre";
                $tablas="tblestado";
                $where="est_codigo=$est_codigo";
                
                $respuesta=$objetose->selecteditestado($campos,$tablas,$where);
                $row=mysqli_fetch_array($respuesta);

         ?>

<div class="row">
<div class="col s8 offset-s3 ">
      <div class="card-panel z-depth-5">
      <form  method="POST"id="form_estado" >
              <h4>Editar estado</h4>
        <div class="contenedor">
           <div class="row">
                <div class="input-field col s12">
                  <input placeholder="codigo"name="est_codigo"type="number" readonly value="<?php echo $row['est_codigo']?>">
                  <label for="codigo">Codigo</label>
                </div>
            
                <div class="input-field col s12">
                    <input placeholder="estado"name="est_nombre" type="text" value="<?php echo $row['est_nombre']?>" >
                  <label for="estado">Estado</label>
                </div>
            </div>
                <button id="btn_editar3"name="btn_editar3"class="btn blue lighten-1" type="submit">Editar
            </button> 
        </form>
     </div>
    </div>
</div>


    
    <script type="text/javascript" src="../../web/vendors/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../web/js/funciones.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
       $('#btn_editar3').on('click',function(e){
           e.preventDefault();
           editar_esta();
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