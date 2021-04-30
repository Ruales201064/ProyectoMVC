<?php
 
 include_once'../../model/Model.php';

 $objetose= new ArchivoController();

    $caso_id=$_GET["caso_id"];
 
    $tabla="tblcaso";
    $where="caso_id=$caso_id";
    $respuesta5=$objetose->eliminarcaso($tabla,$where);
    
     
?>