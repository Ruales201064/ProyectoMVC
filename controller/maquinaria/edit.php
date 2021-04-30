<?php
      
      include_once('../archivo/ArchivoController.php');

      $objetose= new ArchivoController();
      
      
       
        $maq_id= $_POST['maq_id'];
        $maq_nombre= $_POST['maq_nombre'];
        $tblestado_est_codigo= $_POST['tblestado_est_codigo'];
        $tbltipo_maquinaria_tipo_maq_id= $_POST['tbltipo_maquinaria_tipo_maq_id'];

    
        $tabl="tblmaquinaria";
        $camp="maq_id=$maq_id,maq_nombre='$maq_nombre',tblestado_est_codigo='$tblestado_est_codigo',tbltipo_maquinaria_tipo_maq_id='$tbltipo_maquinaria_tipo_maq_id'";    
        $where="maq_id=$maq_id";
        
       $res2=$objetose->editar_maq($tabl,$camp,$where);
      
       
?>
