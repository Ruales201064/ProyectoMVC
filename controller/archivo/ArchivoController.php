<?php
    require_once("../../model/Model.php");
    $objetose= new ArchivoController();

    
   if($_GET['opcion'] == 'Registrar'){
     include_once("../../view/proveedor/crear.php");

   }

   if($_GET['opcion'] == 'listar'){
    include_once("../../view/proveedor/listar.php");

  }


  if($_GET['opcion'] == 'Herramientas'){
    include_once("../../view/herramientas/crear.php");

  }

  if($_GET['opcion'] == 'listarH'){
    include_once("../../view/herramientas/listar.php");

  }


  if($_GET['opcion'] == 'material'){
    include_once("../../view/material/crear.php");

  }

  if($_GET['opcion'] == 'listarMat'){
    include_once("../../view/material/listar.php");

  }


  if($_GET['opcion'] == 'Registrarm'){
    include_once("../../view/tipo_maquinaria/crear.php");

  }

  if($_GET['opcion'] == 'listarm'){
    include_once("../../view/tipo_maquinaria/listar.php");

  }


  if($_GET['opcion'] == 'Registrarh'){
    include_once("../../view/tipo_herramienta/crear.php");

  }

  if($_GET['opcion'] == 'listarh'){
    include_once("../../view/tipo_herramienta/listar.php");

  }


  if($_GET['opcion'] == 'Registrare'){
    include_once("../../view/estado/crear.php");

  }

  if($_GET['opcion'] == 'listare'){
    include_once("../../view/estado/listar.php");

  }

  if($_GET['opcion'] == 'RegistrarMov'){
    include_once("../../view/movimientos/crear.php");

  }

  if($_GET['opcion'] == 'listarMov'){
    include_once("../../view/movimientos/listar.php");

  }




  if($_GET['opcion'] == 'Registrarz'){
    include_once("../../view/tipo_zona/crear.php");

  }

  if($_GET['opcion'] == 'listarz'){
    include_once("../../view/tipo_zona/listar.php");

  }


  
  if($_GET['opcion'] == 'Registrarb'){
    include_once("../../view/bodega/crear.php");

  }

  if($_GET['opcion'] == 'listarb'){
    include_once("../../view/bodega/listar.php");

  }


 
  if($_GET['opcion'] == 'Registrari'){
    include_once("../../view/inventario/crear.php");

  }

  if($_GET['opcion'] == 'listari'){
    include_once("../../view/inventario/listar.php");

  }

  if($_GET['opcion'] == 'Registrard'){
    include_once("../../view/tipo daño/crear.php");
  }

  if($_GET['opcion'] == 'listard'){
    include_once("../../view/tipo daño/listar.php");

  }

  if($_GET['opcion'] == 'Registrarmt'){
    include_once("../../view/tipo material/crear.php");
  }

  if($_GET['opcion'] == 'listarmt'){
    include_once("../../view/tipo material/listar.php");

  }


  if($_GET['opcion'] == 'Registrarmq'){
    include_once("../../view/maquinaria/crear.php");
  }

    if($_GET['opcion'] == 'listarmq'){
    include_once("../../view/maquinaria/listar.php");

  }

  if($_GET['opcion'] == 'Registrarorden'){
    include_once("../../view/orden_mantenimiento/crear.php");
  }

    if($_GET['opcion'] == 'listarorden'){
    include_once("../../view/orden_mantenimiento/listar.php");

  }

  if($_GET['opcion'] == 'Registrarc'){
    include_once("../../view/caso/crear.php");
  }

    if($_GET['opcion'] == 'listarc'){
    include_once("../../view/caso/listar.php");

  }

  if($_GET['opcion'] == 'Registrartermov'){
    include_once("../../view/tercero_movimiento/crear.php");
  }

    if($_GET['opcion'] == 'listarc'){
    include_once("../../view/tercero_movimiento/listar.php");

  }
 

  
   

   

   


  
?>