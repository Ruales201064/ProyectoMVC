<?php
      
      include_once('../archivo/ArchivoController.php');

      $objetose= new ArchivoController();
      
      
       
        $tipo_mat_id= $_POST['tipo_mat_id'];
        $tipo_mat_descripcion= $_POST['tipo_mat_descripcion'];

    
        $tabl="tbltipo_material";
        $camp="tipo_mat_id=$tipo_mat_id ,tipo_mat_descripcion='$tipo_mat_descripcion'";    
        $where="tipo_mat_id='$tipo_mat_id'";
        
       $res2=$objetose->editar_tipomat($tabl,$camp,$where);
       
?>