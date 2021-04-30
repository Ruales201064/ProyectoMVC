<?php
      
      include_once'../../model/Model.php';

      $objetose= new ArchivoController();
      
      if (isset($_POST['insert2'])){
       
       
        $her_nombre= $_POST['her_nombre'];
        $tblestado_est_codigo= $_POST['tblestado_est_codigo'];
        $tbltipo_herramienta_tipo_her_id= $_POST['tbltipo_herramienta_tipo_her_id'];
        

    
        $tabl="tblherramienta";
        $camp=" her_id,her_nombre, tblestado_est_codigo, tbltipo_herramienta_tipo_her_id";    
        $valor=$her_id='her_id'.",'".$her_nombre."','".$tblestado_est_codigo."','".$tbltipo_herramienta_tipo_her_id."'";
        //echo $tabla;
        //echo $campos;
        //echo $valores;
      

       $res2=$objetose->crearherramientas($tabl, $camp, $valor);
       //echo $res2;
       
         
      }
       
      
      
    


  ?>

