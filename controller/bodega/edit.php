<?php
      
      include_once('../archivo/ArchivoController.php');

      $objetose= new ArchivoController();
      
      
       
        $bod_id= $_POST['bod_id'];
        $bod_nombre= $_POST['bod_nombre'];
        $bod_direccion= $_POST['bod_direccion'];
        $tbltipo_zona_tipo_zona_id= $_POST['tbltipo_zona_tipo_zona_id'];

    
        $tabl="tblbodega";
        $camp="bod_id=$bod_id,bod_nombre='$bod_nombre',bod_direccion='$bod_direccion',tbltipo_zona_tipo_zona_id='$tbltipo_zona_tipo_zona_id'";    
        $where="bod_id=$bod_id";
        
       $res2=$objetose->editarbodega($tabl,$camp,$where);
       
?>