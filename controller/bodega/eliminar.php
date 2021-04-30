<?php
 
 include_once('../../model/Model.php');

 $objetose = new ArchivoController();


   
        $id=$_GET["bod_id"];
    
        $tabla="tblbodega";
        $where="bod_id='$id'";
        $respuesta5=$objetose->eliminarbodega($tabla,$where);
   

    

?>