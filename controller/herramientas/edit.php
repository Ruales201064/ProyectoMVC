<?php
      
      include_once'../archivo/ArchivoController.php';

      $objetose= new ArchivoController();
      
      
      $her_id=$_POST['her_id'];
      $her_nombre=$_POST['her_nombre'];
      $tblestado_est_codigo=$_POST['tblestado_est_codigo'];
      $tbltipo_herramienta_tipo_her_id=$_POST['tbltipo_herramienta_tipo_her_id'];
       

    
        $tabl="tblherramienta";
        $camp=" her_id=$her_id,her_nombre='$her_nombre',tblestado_est_codigo='$tblestado_est_codigo',tbltipo_herramienta_tipo_her_id='$tbltipo_herramienta_tipo_her_id'";    
        $where="her_id='$her_id'";

       $res2=$objetose->editarherra($tabl, $camp, $where);
       //echo $res2;
       
         
      
       
      
      
    


  ?>

