<?php
      
      include_once'../archivo/ArchivoController.php';

      $objetose= new ArchivoController();
      
      
      $mat_id=$_POST['mat_id'];
      $mat_nombre=$_POST['mat_nombre'];
      $mat_fecha_vencimiento=$_POST['mat_fecha_vencimiento'];
      $tblestado_est_codigo=$_POST['tblestado_est_codigo'];
      $tbltipo_material_tipo_mat_id=$_POST['tbltipo_material_tipo_mat_id'];
  
    
        $tabl="tblmaterial";
        $camp=" mat_id=$mat_id,mat_nombre='$mat_nombre',mat_fecha_vencimiento='$mat_fecha_vencimiento',tblestado_est_codigo='$tblestado_est_codigo',tbltipo_material_tipo_mat_id='$tbltipo_material_tipo_mat_id'";    
        $where="mat_id='$mat_id'";

       $res2=$objetose->editarMater($tabl, $camp, $where);
       //echo $res2;
       
         
      
       
      
      
    


  ?>

