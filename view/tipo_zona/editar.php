
<!DOCTYPE html>
<html lang="en">


  <body>
    
        <?php

                include_once('../../model/Model.php');
                $objetose= new ArchivoController();
            
            
                $tipo_zona_id=$_GET['tipo_zona_id'];

                $campos="tipo_zona_id,tipo_zona_descripcion";
                $tablas="tbltipo_zona";
                $where="tipo_zona_id=$tipo_zona_id";
                
                $respuesta=$objetose->selectedittipoz($campos,$tablas,$where);
                $row=mysqli_fetch_array($respuesta);

         ?>

<div class="row">
<div class="col s8 offset-s3 ">
      <div class="card-panel z-depth-5">
      <form  method="POST"id="form_tipozona" >
              <h4>Editar Tipo zona</h4>
              <br>
        <div class="contenedor">
           <div class="row">
                <div class="input-field col s12">
                  <input placeholder="codigo"name="tipo_zona_id"type="number" readonly value="<?php echo $row['tipo_zona_id']?>">
                  <label for="codigo">Codigo</label>
                </div>
            
                <div class="input-field col s12">
                    <input placeholder="Descripcion"name="tipo_zona_descripcion" type="text" value="<?php echo $row['tipo_zona_descripcion']?>" >
                  <label for="Descripcion">Tipo zona</label>
                </div>
            </div>
                <button id="btn_edita5"name="btn_edita5"class="btn blue lighten-1" type="submit">Editar
            </button> 
        </form>
     </div>
    </div>
</div>


    
    <script type="text/javascript" src="../../web/vendors/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../web/js/funciones.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
       $('#btn_edita5').on('click',function(e){
           e.preventDefault();
           editar_tipozona();
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