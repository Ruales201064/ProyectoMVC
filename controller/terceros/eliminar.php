<?php
 
 include_once'../archivo/ArchivoController.php';

 $objetose= new ArchivoController();


	$borrar_id=$_GET["borrar"];
    //$borrar="DELETE FROM tblempleado WHERE  Emp_Documento  = '$borrar_id'";
    $tabla="tbltercero";
    $where=" ter_id  = '$borrar_id'";
    $respuesta5=$objetose->eliminarter($tabla,$where);
 
 

?>