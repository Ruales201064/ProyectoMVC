<?php
 
 include_once'../../model/Model.php';

 $objetose= new ArchivoController();



 
    $id=$_GET["maq_id"];
    
    $tabla="tblmaquinaria";
    $where="maq_id='$id'";
    $respuesta5=$objetose->eliminarmaq($tabla,$where);
    
     
   
   



    ?>