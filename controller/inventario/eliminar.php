<?php
 
 include_once('../../model/Model.php');

    $objetose= new ArchivoController();

    $inv_id=$_GET["inv_mov_id"];
    $tabla="tblinventario_movimiento
    join tblinventario
    on tblinventario_movimiento.tblinventario_inv_id=tblinventario.inv_id
    join tblmovimiento 
    on tblinventario_movimiento.tblmovimiento_mov_id=tblmovimiento.mov_id";
    $where="tblinventario_movimiento.inv_mov_id='$inv_id'";
    $respuesta5=$objetose->eliminar_inventario($tabla,$where);

    
    
 
?>