<?php
      
      include_once('../archivo/ArchivoController.php');

      $objetose= new ArchivoController();
      
      
       
        $tipo_her_id= $_POST['tipo_her_id'];
        $tipo_her_descripcion= $_POST['tipo_her_descripcion'];

    
        $tabl="tbltipo_herramienta";
        $camp="tipo_her_id='$tipo_her_id',tipo_her_descripcion='$tipo_her_descripcion'";    
        $where="tipo_her_id='$tipo_her_id'";
        
       $res2=$objetose->editartipoh($tabl,$camp,$where);
     
?>