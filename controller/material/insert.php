<?php
      
      include_once'../../model/Model.php';

      $objetose= new ArchivoController();
      
      if (isset($_POST['insert2'])){
       
       
        $mat_nombre= $_POST['mat_nombre'];
        $mat_fecha_vencimiento= $_POST['mat_fecha_vencimiento'];
        $tblestado_est_codigo= $_POST['tblestado_est_codigo'];
        $tbltipo_material_tipo_mat_id= $_POST['tbltipo_material_tipo_mat_id'];
        

    
        $tabl="tblmaterial";
        $camp=" mat_id,mat_nombre, mat_fecha_vencimiento, tblestado_est_codigo,tbltipo_material_tipo_mat_id";    
        $valor=$mat_id='mat_id'.",'".$mat_nombre."','".$mat_fecha_vencimiento."','".$tblestado_est_codigo."','".$tbltipo_material_tipo_mat_id."'";
        //echo $tabla;
        //echo $campos;
        //echo $valores;
      

       $res2=$objetose->crearmaterial($tabl, $camp, $valor);
       //echo $res2;
       
         
      }
       
      
      
    


  ?>

