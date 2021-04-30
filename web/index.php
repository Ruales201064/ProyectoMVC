<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>COSTO INVENTARIO</title>
    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link href="css//materialize.css" type="text/css" rel="stylesheet">
    <link href="css//style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
    <style>
           body{
             background-image: url(foto.jpg);
             background-size: 100%;

           }
    </style>
  </head>
  <body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg deepskyblue">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper">
                  <a href="index.html"class="brand-logo darken-1">
                    <img src="images/logo/materialize-logo.png" alt="materialize logo">
                    <span class="logo-text hide-on-med-and-down">Inventario</span>
                  </a>
                </h1>
              </li>
            </ul>
        </ul>
        
      </div>
    </header>
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
          <ul id="slide-out" class="side-nav fixed leftside-navigation deepskyblue ">
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">

              <li>
                
          <li>
      <li>

<a class='dropdown-trigger btn'href='#'data-activates='dropdown1'>Configuraciones</a>
<ul id='dropdown1' class=' trigger dropdown-content'>
  
     <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Usuarios<i class="material-icons">account_box</i></a>
           
                <li><a href="../view/Usuario/crear.php"><i class="material-icons">create</i>Crear Usuario</a></li>
                <li><a href="../view/usuario/listar.php"><i class="material-icons">list</i>Consultar Usuario</a></li>
              
            </li>
        </ul>

        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Tipo Zona<i class="material-icons">leak_remove</i></a>
            
                 <li><a href="../controller/archivo/ArchivoController.php?opcion=Registrarz"><i class="material-icons">create</i>Crear tipoz</a></li>
                 <li><a href="../controller/archivo/ArchivoController.php?opcion=listarz"><i class="material-icons">listar</i>Consultar tipoz</a></li>
              
            </li>
        </ul>

        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Tipo Documento<i class="material-icons">assignment_ind</i></a>
            
                 <li><a href="../view/Tipo de documento/form.php"><i class="material-icons">create</i>Crear Docuemento</a></li>
                 <li><a href="../view/Tipo de documento/listar.php"><i class="material-icons">listar</i>Consultar Documento</a></li>
              
            </li>
        </ul>

        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Roles<i class="material-icons">perm_identity</i></a>
            
                <li><a href=../view/Roles/form_Rol.php><i class="material-icons">create</i>Crear Rol</a></li>
                <li><a href="../view/Roles/listar.php"><i class="material-icons">listar</i>Consultar Rol</a></li>
              
          </li>  
        </ul>

        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Terceros<i class="material-icons">person_pin</i></a>
            
                <li><a href="../view/terceros/crear.php"><i class="material-icons">create</i>Crear Tercero</a></li>
                <li><a href="../view/terceros/listar.php"><i class="material-icons">listar</i>Consultar Tercero</a></li>
          
            </li>
        </ul>

        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Estado<i class="material-icons">touch_app</i></a>
            
                 <li><a href="../controller/archivo/ArchivoController.php?opcion=Registrare"><i class="material-icons">create</i>Crear Estado</a></li>
                 <li><a href="../controller/archivo/ArchivoController.php?opcion=listare"><i class="material-icons">listar</i>Consultar Estado</a></li>
              
            </li>
        </ul>

</ul>
        
<a class='dropdown-trigger btn'href='#'data-activates='dropdown2'>INVENTARIOS</a>
<ul id='dropdown2' class='trigger dropdown-content'>

      <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Inventario<i class="material-icons">filter_none</i></a>
                <li><a href="../controller/archivo/ArchivoController.php?opcion=Registrari"><i class="material-icons">create</i>registrar</a></li>
                <li><a href="../controller/archivo/ArchivoController.php?opcion=listari"><i class="material-icons">listar</i>consultar </a></li>
            </li>
        </ul>

        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header">bodega<i class="material-icons">touch_app</i></a>
                 <li><a href="../controller/archivo/ArchivoController.php?opcion=Registrarb"><i class="material-icons">create</i>registrar</a></li>
                 <li><a href="../controller/archivo/ArchivoController.php?opcion=listarb"><i class="material-icons">list</i>consultar</a></li>
            </li>
        </ul>

        <ul class="collapsible collapsible-accordion">
          <li>
               <a class="collapsible-header">Herramientas<i class="material-icons">build</i></a>
                <li><a href="../controller/archivo/ArchivoController.php?opcion=Herramientas"><i class="material-icons">create</i>registrar</a></li>
                <li><a href="../controller/archivo/ArchivoController.php?opcion=listarH"><i class="material-icons">listar</i>consultar </a></li>
            </li>
        </ul>


        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header"> T.De Herramientas<i class="material-icons">receipt</i></a>
            
                <li><a href="../controller/archivo/ArchivoController.php?opcion=Registrarh"><i class="material-icons">create</i>registrar</a></li>
                <li><a href="../controller/archivo/ArchivoController.php?opcion=listarh"><i class="material-icons">listar</i>consultar </a></li>
 
            </li>
        </ul>

        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Material<i class="material-icons">featured_play_list</i></a>
           
                <li><a href="../controller/archivo/ArchivoController.php?opcion=material"><i class="material-icons">create</i>registrar</a></li>
                <li><a href="../controller/archivo/ArchivoController.php?opcion=listarMat"><i class="material-icons">listar</i>consultar</a></li>
            
            </li>
        </ul>
          
        <ul class="collapsible collapsible-accordion">
            <li>
                 <a class="collapsible-header">Tipo Maquinaria<i class="material-icons">rv_hookup</i></a>
                 <li><a href="../controller/archivo/ArchivoController.php?opcion=Registrarm"><i class="material-icons">create</i>registrar</a></li>
                 <li><a href="../controller/archivo/ArchivoController.php?opcion=listarm"><i class="material-icons">listar</i>consultar</a></li>
            </li>
        </ul>

        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Orden de mantenimiento<i class="material-icons">touch_app</i></a>
            
                 <li><a href="../controller/archivo/ArchivoController.php?opcion=Registrarorden"><i class="material-icons">create</i>Crear Orden</a></li>
                 <li><a href="../controller/archivo/ArchivoController.php?opcion=listarorden"><i class="material-icons">listar</i>Consultar Orden</a></li>
              
            </li>
        </ul>

   </ul>    


<a class='dropdown-trigger btn'href='#'data-activates='dropdown3'>COSTOS</a>
<ul id='dropdown3' class=' trigger dropdown-content'>
       
   <ul class="collapsible collapsible-accordion"> 
      <li>
        <a class="collapsible-header ">proveedor<i class="material-icons">contacts</i></a>
        <li><a href="../controller/archivo/ArchivoController.php?opcion=Registrar"><i class="material-icons">create</i>registrar</a></li>
        <li><a href="../controller/archivo/ArchivoController.php?opcion=listar"><i class="material-icons">listar</i>Consultar </a></li>
      </li>
   </ul>

   <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">tipo De Daño<i class="material-icons">contacts</i></a>
         <li><a href="../controller/archivo/ArchivoController.php?opcion=Registrard"><i class="material-icons">create</i>registrar</a></li>
         <li><a href="../controller/archivo/ArchivoController.php?opcion=listard"><i class="material-icons">listar</i>Consultar </a></li>
      </li>
    </ul>

  </ul>       
        

   




 <!--  Scripts-->

<li>

 </li>   
    </ul>
       </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside> 

<div class="container">
            <!--card stats start-->
      <div id="card-stats">
          <div class="row mt-1">
				    <div class="col s2 m2 l">
                  <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <a class="material-icons background-round mt-5 white-text" href="../controller/archivo/ArchivoController.php?opcion=Registrar">business</a>
                        <p>PROVEEDORES</p>
                      </div>
                      <div class="col s5 m5 right-align">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col s2 m2 l">
                  <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <a class="material-icons background-round mt-5 white-text" href="../view/Usuario/crear.php">perm_identity</a>
                        <p>USUARIOS</p>
                      </div>
                      <div class="col s5 m5 right-align">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col s2 m2 l">
                  <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <a class="material-icons background-round mt-5 white-text" href="../view/terceros/crear.php">timeline</a>
                        <p>TERCEROS</p>
                      </div>
                      <div class="col s5 m5 right-align">
                      </div>
                    </div>
                  </div>
                </div>
                
            <!-- //////////////////////////////////////////////////////////////////////////// -->
          </div>

  


<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });
</script>
      
    
 <script type="text/javascript" src="vendors/jquery-3.2.1.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/materializee.min.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="js/plugins.js"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="js/custom-script.js"></script>
<script type="text/javascript">

       document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });

  $('.dropdown-trigger').dropdown();
   </script>

  </body>
</html>