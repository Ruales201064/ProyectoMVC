<?php
      
      include_once'../../model/Model.php';

      $objetose= new ArchivoController();
      
      if (isset($_POST['insert2'])){
       
       
        $tipo_doc_codigo= $_POST['tipo_doc_codigo'];
        $tipo_doc_nombre= $_POST['tipo_doc_nombre'];
       

    
        $tabl="tbltipo_documento";
        $camp="tipo_doc_codigo , tipo_doc_nombre";    
        $valor=$tipo_doc_codigo.",'".$tipo_doc_nombre."'";
        //echo $tabla;
        //echo $campos;
        //echo $valores;

       $res2=$objetose->creardoc($tabl, $camp, $valor);
       //echo $res2;
       
         
      }
	  
	  ?>