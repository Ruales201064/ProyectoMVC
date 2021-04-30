<?php
      
      include_once('../archivo/ArchivoController.php');

      $objetose= new ArchivoController();
      
      
       
        $tipo_zona_id= $_POST['tipo_zona_id'];
        $tipo_zona_descripcion= $_POST['tipo_zona_descripcion'];

    
        $tabl="tbltipo_zona";
        $camp="tipo_zona_id='$tipo_zona_id',tipo_zona_descripcion='$tipo_zona_descripcion'";    
        $where="tipo_zona_id ='$tipo_zona_id'";
        
       $res2=$objetose->editartipoz($tabl,$camp,$where);
       
?>