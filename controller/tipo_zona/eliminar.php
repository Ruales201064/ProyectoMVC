<?php
 
 include_once('../../model/Model.php');

 $objetose = new ArchivoController();


 
    $id=$_GET["tipo_zona_id"];
   
    $tabla="tbltipo_zona";
    $where="tipo_zona_id='$id'";
    $respuesta5=$objetose->eliminartipoz($tabla,$where);
    

?>