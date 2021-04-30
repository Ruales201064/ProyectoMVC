<?php
      
      include_once('../../model/Model.php');

      $objetose= new ArchivoController();
      

        $id= $_POST['bod_id'];
        $nombre= $_POST['bod_nombre'];
        $direccion= $_POST['bod_direccion'];
        $tbltipo_zona_tipo_zona_id= $_POST['tbltipo_zona_tipo_zona_id'];
    
        $tabl="tblbodega";
        $camp="bod_nombre,bod_direccion,tbltipo_zona_tipo_zona_id";    
        $valor="'".$nombre."','".$direccion."','".$tbltipo_zona_tipo_zona_id."' ";
        

       $res2=$objetose->crearbodega($tabl, $camp, $valor);
       //echo $res2;

?>