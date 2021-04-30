
<!DOCTYPE html>
<html lang="en">


  <body>
    
        <?php

            include_once('../../model/Model.php');
            $objetose= new ArchivoController();
            
            
                 $tipo_her_id=$_GET['tipo_her_id'];
            
                $campos="tipo_her_id,tipo_her_descripcion";
                $tablas="tbltipo_herramienta";
                $where="tipo_her_id=$tipo_her_id";

               $respuesta=$objetose->selectedittipoh($campos,$tablas,$where);
               $row=mysqli_fetch_array($respuesta);

         ?>

<div class="row">
<div class="col s8 offset-s3 ">
      <div class="card-panel z-depth-5">
      <form  method="POST"id="form_tipoherramienta">
              <h4>Editar Tipo Herramienta</h4>
              <br>
        <div class="contenedor">
           <div class="row">
                <div class="input-field col s12">
                  <input placeholder="codigo"name="tipo_her_id"type="number" readonly value="<?php echo $row['tipo_her_id']?>">
                  <label for="codigo">Codigo</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Descripcion"name="tipo_her_descripcion"type="text" value="<?php echo $row['tipo_her_descripcion']?>" >
                  <label for="Descripcion">Tipo herramienta</label>
                </div>
            </div>
                <button id="btn_guardar"name="btn_guardar"class="btn blue lighten-1"type="submit">Editar
            </button> 
        </form>
     </div>
    </div>
</div>


    
    <script type="text/javascript" src="../../web/vendors/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../web/js/funciones.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
       $('#btn_guardar').on('click',function(e){
           e.preventDefault();
           editartipoherra();
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