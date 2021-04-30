<?php
 
 include_once('../../model/Model.php');

 $objetose = new ArchivoController();


 
    $id=$_GET["tipo_her_id"];
    
    $tabla="tbltipo_herramienta";
    $where="tipo_her_id='$id'";
    $respuesta5=$objetose->eliminartipoh($tabla,$where);
    

?>