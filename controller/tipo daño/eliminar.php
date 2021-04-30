<?php
 
 include_once('../../model/Model.php');

 $objetose = new ArchivoController();


 
    $id=$_GET["tipo_dano_id"];
   
    $tabla="tbltipo_dano";
    $where="tipo_dano_id='$id'";
    $respuesta5=$objetose->eliminartipod($tabla,$where);
    

?>