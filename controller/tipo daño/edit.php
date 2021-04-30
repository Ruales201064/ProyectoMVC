<?php
      
      include_once('../archivo/ArchivoController.php');

      $objetose= new ArchivoController();
      
      
       
        $tipo_daño_id= $_POST['tipo_daño_id'];
        $tipo_daño_descripcion= $_POST['tipo_daño_descripcion'];

    
        $tabl="tbltipo_daño";
        $camp="tipo_daño_id='$tipo_daño_id',tipo_daño_descripcion='$tipo_daño_descripcion'";    
        $where="tipo_daño_id='$tipo_daño_id'";
        
       $res2=$objetose->editartipodd($tabl,$camp,$where);
       
?>