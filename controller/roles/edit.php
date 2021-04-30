<?php
      
      include_once'../archivo/ArchivoController.php';

      $objetose= new ArchivoController();
      
      
       
       $rol_codigo= $_POST['rol_codigo'];
        $rol_nombre= $_POST['rol_nombre'];
       

    
        $tabl="tblrol";
        $camp=" rol_codigo='$rol_codigo', rol_nombre='$rol_nombre'";    
        $where="rol_codigo = '$rol_codigo'";
        //echo $tabla;
        //echo $campos;
        //echo $valores;

       $res2=$objetose->editarrol($tabl, $camp, $where);
       //echo $res2;
?>