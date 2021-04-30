<?php
 
 include_once('../../model/Model.php');

 $objetose = new ArchivoController();


 
    $id=$_GET["est_codigo"];
    
    $tabla="tblestado";
    $where="est_codigo='$id'";

    $respuesta5=$objetose->eliminarestado($tabla,$where);
    

?>