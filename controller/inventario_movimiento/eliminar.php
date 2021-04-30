<?php
 
 include_once('../../model/Model.php');

    $objetose = new ArchivoController();
    $inv_id=$_GET["inv_id"];
    $tabla="tblinventario";
    $where="inv_id ='$inv_id'";
    $respuesta5=$objetose->eliminar_inventario($tabla,$where);
    

?>