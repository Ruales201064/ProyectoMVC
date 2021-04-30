
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Materialize - Material Design Admin Template</title>
    <!-- Favicons-->
    <link rel="icon" href="../../web/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="../../web/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="../../web/images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link type="text/css" rel="stylesheet" href="../../web/css/materialize.min.css"  media="screen,projection"/>
    <link href="../../web/css//materialize.css" type="text/css" rel="stylesheet">
    <link href="../../web/css//style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="../../web/css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="../../web/vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href=../../web/vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
    <style>
           body{
             background-image: url(../../web/foto.jpg);
             background-size: 100%;

           }
    </style>
  </head>
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
            
                $campos="tipo_doc_codigo,tipo_doc_nombre";
                $tabla="tbltipo_documento";
                $where="tipo_doc_codigo=$editar_id" ;
    
                //$campos="*";
                //$tablas="tblcliente";
                //$where="cli_id='$editar_id'";
               $respuesta=$objetose->consultardoc($campos,$tabla,$where);
               $fila=mysqli_fetch_array($respuesta);
               
              }








         ?>














        
<div class="row">
    
<div class="col s0 offset-s0 ">
      <div class="card-panel z-depth-5">
      
      <form  method="POST"  id="form" >
     
              <h4>Editar Tipo De Documento</h4>
        <div class="contenedor">

        <div class="row">
                
                <div class="input-field col s12">
                <i class="material-icons prefix">content_paste</i>
                  <input placeholder="Codigo" name="tipo_doc_codigo" type="number" readonly="" value="<?php echo $fila['tipo_doc_codigo']?>">
                  <label for="Codigo">Codigo</label>
                </div>

                <div class="input-field col s12">
                <i class="material-icons prefix">add_location</i>
                  <input placeholder="Nombre" name="tipo_doc_nombre" type="text" value="<?php echo $fila['tipo_doc_nombre']?>" >
                  <label for="Nombre">Tipo documento</label>
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
           editardoc();
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