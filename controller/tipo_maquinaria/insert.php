<?php
      
      include_once('../../model/Model.php');

      $objetose= new ArchivoController();
      

        //$id= $_POST['tipo_maq_id'];
        $descripcion= $_POST['tipo_maq_descripcion'];
    
        $tabl="tbltipo_maquinaria";
        $camp="tipo_maq_id,tipo_maq_descripcion";    
        $valor=$id='tipo_maq_id'.",'".$descripcion."' ";
        

       $res2=$objetose->creartipo_m($tabl, $camp, $valor);
       //echo $res2;
       
         
      
	  
	  ?>