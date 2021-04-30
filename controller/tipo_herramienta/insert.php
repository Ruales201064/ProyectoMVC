<?php
      
      include_once('../../model/Model.php');

      $objetose= new ArchivoController();
      if (isset($_POST['insert2'])){

       
        $tipo_her_descripcion= $_POST['tipo_her_descripcion'];
    
        $tabl="tbltipo_herramienta";
        $camp="tipo_her_id,tipo_her_descripcion";    
        $valor=$tipo_her_id='tipo_her_id'.",'".$tipo_her_descripcion."'";
        
       $res2=$objetose->creartipoh($tabl, $camp, $valor);
      }
     
	  ?>