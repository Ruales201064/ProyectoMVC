<?php
 
 include_once'../../model/Model.php';

 $objetose = new ArchivoController();


 
    $borrar_id=$_GET["borrar"];
    //$borrar="DELETE FROM tblempleado WHERE  Emp_Documento  = '$borrar_id'";
    $tabla="tbltipo_documento";
    $where="tipo_doc_codigo='$borrar_id'";
    $respuesta5=$objetose->eliminar_doc($tabla,$where);
    

?>