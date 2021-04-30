<?php
      
      include_once'../../model/Model.php';

      $objetose= new ArchivoController();

        $maq_id= $_POST['maq_id'];
        $maq_nombre= $_POST['maq_nombre'];
        $tblestado_est_codigo= $_POST['tblestado_est_codigo'];
        $tbltipo_maquinaria_tipo_maq_id= $_POST['tbltipo_maquinaria_tipo_maq_id'];

    
        $tabl="tblmaquinaria";
        $camp="maq_nombre,tblestado_est_codigo,tbltipo_maquinaria_tipo_maq_id";    
        $valor="'".$maq_nombre."','".$tblestado_est_codigo."','".$tbltipo_maquinaria_tipo_maq_id."'"; 
        //echo $tabla;
        //echo $campos;
        //echo $valores;
      

       $res2=$objetose->crearmaquinaria($tabl, $camp, $valor);
       //echo $res2;
       
  ?>

