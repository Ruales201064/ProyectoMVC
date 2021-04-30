<?php
      
      include_once'../archivo/ArchivoController.php';

      $objetose= new ArchivoController();
      
        $mov_id= $_POST['mov_id'];
        $mov_num_factura= $_POST['mov_num_factura'];
        $mov_concepto= $_POST['mov_concepto'];
        $mov_fecha_movimiento= $_POST['mov_fecha_movimiento'];
        $mov_tipo_movimiento= $_POST['mov_tipo_movimiento'];
        $tblusuario_usu_id= $_POST['tblusuario_usu_id'];
        $tblproveedor_pro_nit= $_POST['tblproveedor_pro_nit'];
  
    
        $tabl="tblmovimiento";
        $camp=" mov_id=$mov_id,mov_num_factura='$mov_num_factura',mov_concepto='$mov_concepto',mov_fecha_movimiento='$mov_fecha_movimiento',mov_tipo_movimiento='$mov_tipo_movimiento',tblusuario_usu_id='$tblusuario_usu_id',tblproveedor_pro_nit='$tblproveedor_pro_nit'";    
        $where="mov_id='$mov_id'";

       $res2=$objetose->editarMovi($tabl, $camp, $where);
       //echo $res2;
       
         
      
       
      
      
    


  ?>

