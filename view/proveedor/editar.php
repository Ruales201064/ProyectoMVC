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

if(isset($_GET)){
$editar_id=$_GET['codigo'];

$campos="pro_id,pro_nit,pro_razon_social,pro_nombre,pro_direccion,pro_correo,pro_telefono";
$tablas="tblproveedor";
$where="pro_id=$editar_id" ;

    //$campos="*";
    //$tablas="tblcliente";
    //$where="cli_id='$editar_id'";
$respuesta=$objetose->selectedit($campos,$tablas,$where);
$fila=mysqli_fetch_array($respuesta);
   
  }
            
       
         
    ?>
              
<div class="row">
  <div class="col s10 offset-s1 ">
  <div class="card-panel z-depth-5">
      <form  method="POST" id="form_editar" >
     
              
              
              <h4>Editar Proveedor</h4>
              
              <div class="contenedor">
              <div class="row">
                 <div class="input-field col s12">
                   <input name="pro_id" type="number" readonly="" value="<?php echo $fila['pro_id']?>">
                   <label for="codigo">Codigo</label>
                 </div>
             </div>
 
         <div class="row">
             <div class="input-field col s4">
                   <input name="pro_nit" type="number"  value="<?php echo $fila['pro_nit']?>">
                   <label for="nit">Nit</label>
              </div>
                 
                 <div class="input-field col s4">
                   <input name="pro_razon_social" type="text"  value="<?php echo $fila['pro_razon_social']?>">
                   <label for="razon">Razon Social</label>
                 </div>
              
 
                 <div class="input-field col s4">
                   <input name="pro_nombre" type="text" value="<?php echo $fila['pro_nombre']?>" >
                   <label for="Nombre">Nombre</label>
                 </div>
               </div>
                
              <div class="row">
                 <div class="input-field col s4">
                   <input name="pro_direccion" type="text" value="<?php echo $fila['pro_direccion']?>" >
                   <label for="Direccion">Direccion</label>
                 </div>
                 
                 <div class="input-field col s4">
                   <input name="pro_correo" type="text" value="<?php echo $fila['pro_correo']?>">
                   <label for="Correo">Correo</label>
                 </div>
               
                 
                 <div class="input-field col s4">
                   <input name="pro_telefono" type="text"value="<?php echo $fila['pro_telefono']?>">
                   <label for="Telefono">Telefono</label>
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
           editar_datos();
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




    <!--materialize js-->
    
    
    
  </body>
</html>