<?php
 
 include_once('../../model/Model.php');

 $objetose = new ArchivoController();


 
    $id=$_GET["tipo_mat_id"];
   
    $tabla="tbltipo_material";
    $where="tipo_mat_id='$id'";
    $respuesta5=$objetose->eliminartipomat($tabla,$where);
    

?>