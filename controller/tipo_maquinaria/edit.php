<?php
      
      include_once('../archivo/ArchivoController.php');

      $objetose= new ArchivoController();
      
      
       
        $tipo_maq_id= $_POST['tipo_maq_id'];
        $tipo_maq_descripcion= $_POST['tipo_maq_descripcion'];

    
        $tabl="tbltipo_maquinaria";
        $camp="tipo_maq_id='$tipo_maq_id',tipo_maq_descripcion='$tipo_maq_descripcion'";    
        $where="tipo_maq_id ='$tipo_maq_id'";
        
       $res2=$objetose->editartipo_m($tabl,$camp,$where);
       
?>