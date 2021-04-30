<?php
 
 include_once'../../model/Model.php';

 $objetose= new ArchivoController();



 
    $borrar_id=$_GET["borrar"];
    //$borrar="DELETE FROM tblempleado WHERE  Emp_Documento  = '$borrar_id'";
    $tabla="tblmaterial";
    $where=" mat_id  = '$borrar_id'";
    $respuesta5=$objetose->eliminarmaterial($tabla,$where);
    
     
   
   



    ?>