<?php
 
 include_once'../../model/Model.php';

 $objetose = new ArchivoController();


 
    $ord_man_id=$_GET["ord_man_id"];
    //$borrar="DELETE FROM tblempleado WHERE  Emp_Documento  = '$borrar_id'";
    $tabla="tblorden_mantenimiento";
    $where=" ord_man_id = '$ord_man_id'";
    $respuesta5=$objetose->eliminarorden($tabla,$where);
    

?>