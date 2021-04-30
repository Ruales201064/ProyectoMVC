<?php
      
      
      include_once('../../model/Model.php');

      $objetose= new ArchivoController();
        
     //-------------------------------FUNCIONA--------------------//

        $inv_existencia= $_POST['inv_existencia'];
        $inv_costo= $_POST['inv_costo'];
        $inv_stock_minimo= $_POST['inv_stock_minimo'];
        $inv_stock_mazimo= $_POST['inv_stock_mazimo'];
        $tblmaterial_mat_id= $_POST['tblmaterial_mat_id'];
        $tblherramienta_her_id= $_POST['tblherramienta_her_id'];
        $tblmaquinaria_maq_id= $_POST['tblmaquinaria_maq_id'];
        $tblbodega_bod_id= $_POST['tblbodega_bod_id'];
        
        $tabl="tblinventario";
        $camp="inv_id,inv_existencia,inv_costo,inv_stock_minimo,inv_stock_mazimo,tblmaterial_mat_id,tblherramienta_her_id
        ,tblmaquinaria_maq_id,tblbodega_bod_id";
          
        $valor=$inv_id='inv_id'.",'".$inv_existencia."','".$inv_costo."','".$inv_stock_minimo."','".$inv_stock_mazimo."',
        '".$tblmaterial_mat_id."','".$tblherramienta_her_id."','".$tblmaquinaria_maq_id."','".$tblbodega_bod_id."'";
      
        $idInventario=$objetose->crearinventario($tabl,$camp,$valor);
       
        //-------------------------------FUNCIONA--------------------//


      //-------------------------------FUNCIONA--------------------//

        $mov_num_factura= $_POST['mov_num_factura'];
        $mov_concepto= $_POST['mov_concepto'];
        $mov_fecha_movimiento= $_POST['mov_fecha_movimiento'];
        $mov_tipo_movimiento= $_POST['mov_tipo_movimiento'];
        $tblusuario_usu_id= $_POST['tblusuario_usu_id'];
        $tblproveedor_pro_nit= $_POST['tblproveedor_pro_nit'];
        
        $tabl="tblmovimiento";
        $camp="mov_id,mov_num_factura,mov_concepto,mov_fecha_movimiento,mov_tipo_movimiento,tblusuario_usu_id,tblproveedor_pro_nit";    
        $valor=$mov_id='mov_id'.",'".$mov_num_factura."','".$mov_concepto."','".$mov_fecha_movimiento."','".$mov_tipo_movimiento."','".$tblusuario_usu_id."','".$tblproveedor_pro_nit."'";
        $idMovimiento=$objetose->crearmovimiento($tabl,$camp,$valor);
      
      //-------------------------------FUNCIONA--------------------//  

      $inv_mov_id= $_POST['inv_mov_id'];
      $inv_existencia= $_POST['inv_existencia'];
      $inv_costo= $_POST['inv_costo'];
      $montoTotal=($inv_existencia * $inv_costo);

      $tabl="tblinventario_movimiento";
      $camp="inv_mov_id,inv_mov_cantidad,inv_mov_valor_total,tblinventario_inv_id,tblmovimiento_mov_id";    
      $valor=$inv_mov_id='inv_mov_id'.",'".$inv_existencia."','".$montoTotal."','".$idInventario."','".$idMovimiento."'";

      $detalle=$objetose->creardetalle($tabl,$camp,$valor);
         

  ?>
