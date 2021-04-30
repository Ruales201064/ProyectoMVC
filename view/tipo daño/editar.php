<!DOCTYPE html>
<html lang="en">


  <body>
    
        <?php

                include_once('../../model/Model.php');
                $objetose= new ArchivoController();
            
            
                $tipo_dano_id=$_GET['tipo_dano_id'];

                $campos="tipo_dano_id,tipo_dano_descripcion";
                $tablas="tbltipo_dano";
                $where="tipo_dano_id=$tipo_dano_id";
                
                $respuesta=$objetose->selectedittipod($campos,$tablas,$where);
                $row=mysqli_fetch_array($respuesta);

         ?>

<div class="row">
<div class="col s8 offset-s3 ">
      <div class="card-panel z-depth-5">
      <form  method="POST"id="editar" >
              <h4>Editar Tipo Daño</h4>
              <br>
        <div class="contenedor">
           <div class="row">
                <div class="input-field col s12">
                  <input placeholder="codigo"name="tipo_dano_id"type="number" readonly value="<?php echo $row['tipo_dano_id']?>">
                  <label for="codigo">Codigo</label>
                </div>
            
                <div class="input-field col s12">
                    <input placeholder="Descripcion"name="tipo_dano_descripcion" type="text" value="<?php echo $row['tipo_dano_descripcion']?>" >
                  <label for="Descripcion">Descripcion</label>
                </div>
            </div>
                <button id="btn_edita6"name="btn_edita6"class="btn blue lighten-1" type="submit">Editar
            </button> 
        </form>
     </div>
    </div>
</div>


    
    <script type="text/javascript" src="../../web/vendors/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../web/js/funciones.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
       $('#btn_edita6').on('click',function(e){
           e.preventDefault();
           editar_tipod();
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
