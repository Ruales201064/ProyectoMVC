<!DOCTYPE html>
<html lang="en">


  <body>
    
        <?php

                include_once('../../model/Model.php');
                $objetose= new ArchivoController();
            
            
                $bod_id=$_GET['bod_id'];

                $campo="tipo_zona_id,tipo_zona_descripcion";
                $tbles="tbltipo_zona";
                $respues=$objetose->selectzona($campo,$tbles);
         

              


                $campos="bod_id,bod_nombre,bod_direccion,tbltipo_zona_tipo_zona_id,tipo_zona_descripcion";
                $tablas="tblbodega, tbltipo_zona";
                $where=" tblbodega.tbltipo_zona_tipo_zona_id=tbltipo_zona.tipo_zona_id AND bod_id=$bod_id";
                
                $respuesta=$objetose->selectedittipoz($campos,$tablas,$where);
                $row=mysqli_fetch_array($respuesta);

         ?>

<div class="row">
<div class="col s8 offset-s3 ">
      <div class="card-panel z-depth-5">
      <form  method="POST"id="form_bodega" >
              <h4>Editar Bodega</h4>
              <br>
        <div class="contenedor">
           <div class="row">
                <div class="input-field col s12">
                  <input placeholder="codigo"name="bod_id"type="number" readonly value="<?php echo $row['bod_id']?>">
                  <label for="codigo">Codigo</label>
                </div>
            
                <div class="input-field col s12">
                    <input placeholder="Nombre"name="bod_nombre" type="text" value="<?php echo $row['bod_nombre']?>" >
                  <label for="nombre">Nombre</label>
                </div>

                 <div class="input-field col s12">
                    <input placeholder=">Direccion"name="bod_direccion" type="text" value="<?php echo $row['bod_direccion']?>" >
                  <label for="direccion">Direccion</label>
                </div>

    <div class="input-field col s12">
                <select name="tbltipo_zona_tipo_zona_id">
                  
                 <?php  
                 echo"<option value='".$row['tbltipo_zona_tipo_zona_id']."'>".$row['tipo_zona_descripcion']."</option>";
                  while($row=mysqli_fetch_array($respues)){ 
                  echo "<option value='".$row['tipo_zona_id']."'>".$row['tipo_zona_descripcion']." </option>"; 
                     
                   }    
                 ?>
                </select>
            
            </div>
            </div>
            </div>
                <button id="btn_editab"name="btn_editab"class="btn blue lighten-1" type="submit">Editar
            </button> 
        </form>
    
    </div>
</div>
</div>


    
    <script type="text/javascript" src="../../web/vendors/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../web/js/funciones.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
       $('#btn_editab').on('click',function(e){
           e.preventDefault();
           editarbod();
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
