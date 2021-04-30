<!DOCTYPE html>
<html lang="en">

<?php
                include_once('../../view/head.php');
  ?>
  <body>
        
<?php

          include_once('../../model/Model.php');
          $resl= new ArchivoController();

          $maq_id=$_GET["maq_id"];

          $campos="m.maq_id,m.maq_nombre,m.tblestado_est_codigo,m.tbltipo_maquinaria_tipo_maq_id,e.est_nombre,t.tipo_maq_descripcion";
          $tabla="tblmaquinaria m,tblestado e,tbltipo_maquinaria t";
          $where="m.tblestado_est_codigo=e.est_codigo AND m.tbltipo_maquinaria_tipo_maq_id=t.tipo_maq_id  AND maq_id=$maq_id";
    
          $campo="est_codigo,est_nombre";
          $tbles="tblestado";
          $estado=$resl->selectestado($campo,$tbles);


          $campo="tipo_maq_id,tipo_maq_descripcion";
          $tbles="tbltipo_maquinaria";
          $tipomaqu=$resl->selectmaquinaria($campo,$tbles);
    
          
          $result=$resl->selecteditmaquinaria($campos,$tabla,$where);
          $row=mysqli_fetch_array($result);

          $result=$resl->selecteditmaquinaria($campos,$tabla,$where);
          $fila2=mysqli_fetch_array($result);

?>

<div class="row">
  <div class="col m12 offset-s1 ">
  <div class="card-panel z-depth-5">
       <form  method="POST" id="editar_maq2">
             
              <h4>Editar Maquina</h4>
              
             <div class="contenedor">
             <div class="row">
                <div class="input-field col s6">
                  <input name="maq_id" type="number" readonly="" value="<?php echo $row['maq_id']?>">
                  <label for="codigo">Codigo</label>
                </div>

            <div class="input-field col s6">
                  <input name="maq_nombre" type="text"  value="<?php echo $row['maq_nombre']?>">
                  <label for="nombre">Nombre</label>
             </div>

             <div class="input-field col s6">
             <select name="tblestado_est_codigo">
              
                 <?php
                echo"<option value='".$row['tblestado_est_codigo']."'>".$row['est_nombre']."</option>";
                while($row=mysqli_fetch_array($estado)){
          
                                          
             echo "<option value=".$row['est_codigo'].">".$row['est_nombre']."</option>";
                   
             }
                                      
                ?>
                    </select>
            
            </div>
             

            <div class="input-field col s6">
             <select name="tbltipo_maquinaria_tipo_maq_id">
             

                 <?php
                echo"<option value='".$fila2['tbltipo_maquinaria_tipo_maq_id']."'>".$fila2['tipo_maq_descripcion']."</option>";
                while($fila2=mysqli_fetch_array($tipomaqu)){
          
                                          
             echo "<option value=".$fila2['tipo_maq_id'].">".$fila2['tipo_maq_descripcion']."</option>";
                   
             }
                                      
                ?>
                    </select>
            
            </div>
            </div>

         </div>
         <button id="btn_editarmaq"name="btn_editarmaq"class="btn blue lighten-1" type="submit">Editar
            </button>
         </form>
     </div>
     </div>
</div>

   
    <script type="text/javascript" src="../../web/vendors/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../web/js/funciones.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
       $('#btn_editarmaq').on('click',function(e){
           e.preventDefault();
           editar_maqui();
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




    <!--materialize js-->
    
    
    
  </body>
</html>