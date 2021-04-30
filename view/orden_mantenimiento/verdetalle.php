

<!DOCTYPE html>
<html lang="en">

<?php
                include_once('../../view/head.php');
  ?>
  <body>
    <!-- Start Page Loading -->

    <br><br>
        
    <?php

       
          
        include_once'../../model/Model.php';
        $objetose= new ArchivoController();
      
        $campo="tipo_doc_codigo,tipo_doc_nombre";
        $tbles="tbltipo_documento";  
        $documento=$objetose->selectdocumento($campo,$tbles);
          
        $campo="rol_codigo,rol_nombre";
        $tbles="tblrol";  
        $tblrol=$objetose->selectrol($campo,$tbles);
             
        $campo="est_codigo,est_nombre";
        $tbles="tblestado";  
        $tblestado=$objetose->selectestado($campo,$tbles);
          
        
        $usu_id=$_GET['usu_id'];

        $campos="u.usu_id,u.usu_documento,u.usu_nombre1,u.usu_nombre2,u.usu_apellido1,u.usu_telefono,
        u.usu_correo,e.est_nombre,t.tipo_doc_nombre,r.rol_nombre";
  
        $tabla="tblusuario u,tblestado e,tbltipo_documento t,tblrol r";
  
        $where="u.tblestado_est_codigo=e.est_codigo AND 
        u.tbltipo_documento_tipo_doc_codigo=t.tipo_doc_codigo AND
        u.tblrol_rol_codigo=r.rol_codigo AND u.usu_id=$usu_id";

        $respuesta=$objetose->selectedita($campos,$tabla,$where);
        $row=mysqli_fetch_array($respuesta);    
              
    ?>
      
               
<div class="row">
  <div class="col s10 offset-s1 ">
  <div class="card-panel z-depth-5">
      <form  method="POST" id="form_usuario" >
              <h4>Ver detalle usuario</h4>
              
    <div class="contenedor">
        <div class="row">
              <div class="input-field col s3">
                  <input name="usu_id" type="number" readonly value="<?php echo $row['usu_id']?>"><label for="id">Codigo</label>
            </div>  
                
            <div class="input-field col s3">
                  <input name="usu_documento" type="text" readonly value="<?php echo $row['usu_documento']?>"><label for="documento">Documento</label>
            </div>
            
            <div class="input-field col s3">
               <input name="usu_nombre1" type="text"  readonly value="<?php echo $row['usu_nombre1']?>"> <label for="nombre">Primer nombre</label> 
            </div>
            
            <div class="input-field col s3">
                  <input name="usu_nombre2" type="text" readonly value="<?php echo $row['usu_nombre2']?>" >
                  <label for="nombre2">Segundo nombre </label>
            </div>
          </div>
            
           <div class="row">
            <div class="input-field col s4">
                  <input name="usu_apellido1" type="text" readonly value="<?php echo $row['usu_apellido1']?>">
                  <label for="usu_apellido1">primer apellido</label>
            </div>

              <div class="input-field col s4">
                  <input name="usu_telefono" type="number" readonly value="<?php echo $row['usu_telefono']?>">
                  <label for="usu_telefono">Telefono</label>
               </div> 
               
               <div class="input-field col s4">
                  <input name="usu_correo" type="text"  value="<?php echo $row['usu_correo']?>">
                  <label for="usu_correo">Correo</label>
               </div>
              
          <div class="row">
             <div class="input-field col s4">
                  <input name="est_nombre" type="text" value="<?php echo $row['est_nombre']?>">
                  <label for="usu_correo">Correo</label>
               </div>
               
               <div class="input-field col s4">
                  <input name="tipo_doc_nombre" type="text" value="<?php echo $row['tipo_doc_nombre']?>">
                  <label for="documento">Tipo documento</label>
               </div>
               
               <div class="input-field col s4">
                  <input name="rol_nombre" type="text" value="<?php echo $row['rol_nombre']?>">
                  <label for="Rol">Rol</label>
               </div>
            </div>       
          </form>
        </div>
      </div>
    </div>
   </div>
</div>
    
    <script type="text/javascript" src="../../web/vendors/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../web/js/funciones.js"></script>

    <script type="text/javascript">
        
      $(document).ready(function(){
       $('#btn_editar').on('click',function(e){
           e.preventDefault();
           verdetalle_usu();
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