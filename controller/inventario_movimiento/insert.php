<?php
      
      
      include_once('../../model/Model.php');

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
        $camp="inv_id,inv_existencia,inv_costo,inv_stock_minimo,inv_stock_mazimo,tblmaterial_mat_id,tblherramienta_her_id
        ,tblmaquinaria_maq_id,tblbodega_bod_id";
          
        $valor=$inv_id='inv_id'.",'".$inv_existencia."','".$inv_costo."','".$inv_stock_minimo."','".$inv_stock_mazimo."',
        '".$tblmaterial_mat_id."','".$tblherramienta_her_id."','".$tblmaquinaria_maq_id."','".$tblbodega_bod_id."'";
        

        $res1=$objetose->crearinventario($tabl,$camp,$valor);
       
       
     

  ?>
