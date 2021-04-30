<?php
      
      include_once'../archivo/ArchivoController.php';

      $objetose= new ArchivoController();
      
      
       
       $tipo_doc_codigo= $_POST['tipo_doc_codigo'];
        $tipo_doc_nombre= $_POST['tipo_doc_nombre'];
       

    
        $tabl="tbltipo_documento";
        $camp=" tipo_doc_codigo='$tipo_doc_codigo', tipo_doc_nombre='$tipo_doc_nombre'";    
        $where="tipo_doc_codigo = '$tipo_doc_codigo'";
        //echo $tabla;
        //echo $campos;
        //echo $valores;

       $res2=$objetose->editardoc($tabl, $camp, $where);
       //echo $res2;
?>