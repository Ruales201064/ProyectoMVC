<?php
      
      include_once('../archivo/ArchivoController.php');

      $objetose= new ArchivoController();
      
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
      $res2=$objetose->editarinventario($tabl,$camp,$where);

  ?>

