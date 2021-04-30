<?php
      
      include_once('../archivo/ArchivoController.php');

      $objetose= new ArchivoController();
      

      if(isset($_POST['act'])){
      $inv_id= $_POST['inv_id'];
      $inv_existencia= $_POST['inv_existencia'];
      $inv_costo= $_POST['inv_costo'];
      $inv_stock_minimo= $_POST['inv_stock_minimo'];
      $inv_stock_mazimo= $_POST['inv_stock_mazimo'];
      $tblmaterial_mat_id= $_POST['tblmaterial_mat_id'];
      $tblherramienta_her_id= $_POST['tblherramienta_her_id'];
      $tblmaquinaria_maq_id= $_POST['tblmaquinaria_maq_id'];
      $tblbodega_bod_id= $_POST['tblbodega_bod_id'];
  
        $tabl="tblinventario";
        $camp="inv_id='$inv_id',inv_existencia='$inv_existencia',inv_costo='$inv_costo',
        inv_stock_minimo='$inv_stock_minimo',inv_stock_mazimo='$inv_stock_mazimo',
        tblmaterial_mat_id='$tblmaterial_mat_id',tblherramienta_her_id='$tblherramienta_her_id',
        tblmaquinaria_maq_id='$tblmaquinaria_maq_id',tblbodega_bod_id='$tblbodega_bod_id'";

      $where="inv_id='$inv_id'";
      $idInventario=$objetose->editarinventario($tabl,$camp,$where);




      $mov_id= $_POST['mov_id'];
      $mov_num_factura= $_POST['mov_num_factura'];
      $mov_concepto= $_POST['mov_concepto'];
      $mov_fecha_movimiento= $_POST['mov_fecha_movimiento'];
      $mov_tipo_movimiento= $_POST['mov_tipo_movimiento'];
      $tblusuario_usu_id= $_POST['tblusuario_usu_id'];
      $tblproveedor_pro_nit= $_POST['tblproveedor_pro_nit'];

  
      $tabl="tblmovimiento";
      $camp="mov_id=$mov_id,mov_num_factura='$mov_num_factura',mov_concepto='$mov_concepto',mov_fecha_movimiento='$mov_fecha_movimiento',mov_tipo_movimiento='$mov_tipo_movimiento',tblusuario_usu_id='$tblusuario_usu_id',tblproveedor_pro_nit='$tblproveedor_pro_nit'";    
      $where="mov_id='$mov_id'";
     $idMovimiento=$objetose->editarMovi($tabl,$camp,$where);



    $inv_mov_id= $_POST['inv_mov_id'];
    $inv_mov_cantidad= $_POST['inv_mov_cantidad'];
    $inv_mov_valor_total= $_POST['inv_mov_valor_total'];
    $idInventario= $_POST['inv_id'];
    $idMovimiento= $_POST['mov_id'];

    $inv_existencia= $_POST['inv_existencia'];
    $inv_costo= $_POST['inv_costo'];
    $montoTotal=($inv_existencia * $inv_costo);

    $tabl="tblinventario_movimiento";
     $camp="inv_mov_id=$inv_mov_id,inv_mov_cantidad='$inv_mov_cantidad',inv_mov_valor_total=$montoTotal
     ,tblinventario_inv_id='$idInventario',tblmovimiento_mov_id='$idMovimiento'";
     $where="inv_mov_id='$inv_mov_id'";

    $res2=$objetose->editarinve_movi($tabl,$camp,$where);


   }






  ?>

