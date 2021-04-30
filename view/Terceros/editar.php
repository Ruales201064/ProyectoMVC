<!DOCTYPE html>
<html lang="en">

<?php
                include_once('../../view/head.php');
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
      
        $campo="tipo_doc_codigo,tipo_doc_nombre";
        $tbles="tbltipo_documento";  
        $documento=$objetose->selectdocumento($campo,$tbles);

        
        $id=$_GET['ter_id'];
        
         $campos="t.ter_id,t.ter_num_documento,t.ter_nombre1,t.ter_nombre2,t.ter_apellido1,t.ter_apellido2,t.ter_direccion,t.ter_telefono,t.ter_correo,d.tipo_doc_nombre";


        $tabla="tbltercero t,tbltipo_documento d";

        $where="t.tbltipo_documento_tipo_doc_codigo=d.tipo_doc_codigo AND t.ter_id=$id";

        $result=$objetose->tercedit($campos,$tabla,$where);

        $row=mysqli_fetch_array($result);    
        
        

      ?>
      

      <div class="row">
        <div class="col s12offset-s0 ">
          <div class="card-panel z-depth-5">

            <h4>Editar Tercero</h4>

              
          <div class="contenedor">

            <form method="POST" id="form_tercero">
              <div class="row">
               
                <input name="ter_id" type="hidden" readonly value="<?php echo $row['ter_id']?>">
                
                
                <div class="input-field col s4">
                  <input name="ter_num_documento" type="text" readonly value="<?php echo $row['ter_num_documento']?>"><label for="Documento">Documento</label>
                </div>
                
                <div class="input-field col s4">
                 <input name="ter_nombre1" type="text" value="<?php echo $row['ter_nombre1']?>"><label for="nombre1">Primer Nombre</label> 
               </div>

               <div class="input-field col s4">
                <input name="ter_nombre2" type="text" value="<?php echo $row['ter_nombre2']?>"><label for="nombre2">Segundo Nombre</label>
              </div>
              
              <div class="input-field col s4">
                <input name="ter_apellido1" type="text" value="<?php echo $row['ter_apellido1']?>"><label for="apellido1">Primer Apellido</label>
              </div>

              <div class="input-field col s4">
                <input name="ter_apellido2" type="text" value="<?php echo $row['ter_apellido2']?>"><label for="ter_apellido2">Segundo Apellido</label>
              </div> 
              
              <div class="input-field col s4">
                <input name="ter_direccion" type="text" value="<?php echo $row['ter_direccion']?>"><label for="ter_direccion">Direccion</label>
              </div> 

              <div class="input-field col s4">
                <input name="ter_telefono" type="number" value="<?php echo $row['ter_telefono']?>"><label for="ter_telefono">Telefono</label>
              </div> 

              <div class="input-field col s4">
                <input name="ter_correo" type="text" value="<?php echo $row['ter_correo']?>"><label for="ter_correo">Correo</label>
              </div>
               
              <div class="input-field col s4">
                <select name="tbltipo_documento_tipo_doc_codigo">
            <?php 
               while($docu=mysqli_fetch_array($documento)){
                   
               if($row['tbltipo_documento_tipo_doc_codigo']==$docu['tipo_doc_codigo']){
                $select="select";    
                   
               }else{
    
                   $select="";
               }   
               echo"<option value='".$docu['tipo_doc_codigo']."'>".$docu['tipo_doc_nombre']."</option>";   
              }    
            ?> 
            </select>
            <label>Tipo documento</label> 
                  
            </div>
            <a onclick="editarter('<?php echo $row['ter_id']; ?>')"><button id="btn_editar1" name="btn_editar1" class="btn blue lighten-1"type="submit">Editar</button></a>
</div>
          </form>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

<script type="text/javascript" src="../../web/vendors/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../web/js/funciones.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
       $('#btn_editar1').on('click',function(e){
           e.preventDefault();
           editarter();
       })

      });


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