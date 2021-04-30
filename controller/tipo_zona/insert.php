<?php
      
      include_once('../../model/Model.php');

      $objetose= new ArchivoController();
      

      //  $id= $_POST['tipo_zona_id'];
        $descripcion= $_POST['tipo_zona_descripcion'];
    
        $tabl="tbltipo_zona";
        $camp="tipo_zona_id,tipo_zona_descripcion";    
        $valor=$id='tipo_zona_id'.",'".$descripcion."' ";
        

       $res2=$objetose->creartipoz($tabl, $camp, $valor);
       //echo $res2;
       
         
      
	  
	  ?>