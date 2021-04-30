<?php
 
 include_once('../../model/Model.php');

 $objetose = new ArchivoController();


 
    $id=$_GET["tipo_maq_id"];
   
    $tabla="tbltipo_maquinaria";
    $where="tipo_maq_id='$id'";
    $respuesta5=$objetose->eliminartipo_m($tabla,$where);
    

?>