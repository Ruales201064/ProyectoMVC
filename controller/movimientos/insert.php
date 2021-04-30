<?php
      
      include_once'../../model/Model.php';

      $objetose= new ArchivoController();
      
      if (isset($_POST['insert2'])){
       
       
        $mov_num_factura= $_POST['mov_num_factura'];
        $mov_concepto= $_POST['mov_concepto'];
        $mov_fecha_movimiento= $_POST['mov_fecha_movimiento'];
        $mov_tipo_movimiento= $_POST['mov_tipo_movimiento'];
        $tblusuario_usu_id= $_POST['tblusuario_usu_id'];
        $tblproveedor_pro_nit= $_POST['tblproveedor_pro_nit'];
        

    
        $tabl="tblmovimiento";
        $camp=" mov_id,mov_num_factura, mov_concepto, mov_fecha_movimiento,mov_tipo_movimiento,tblusuario_usu_id,tblproveedor_pro_nit";    
        $valor=$mov_id='mov_id'.",'".$mov_num_factura."','".$mov_concepto."','".$mov_fecha_movimiento."','".$mov_tipo_movimiento."','".$tblusuario_usu_id."','".$tblproveedor_pro_nit."'";
        //echo $tabla;
        //echo $campos;
        //echo $valores;
      

       $res2=$objetose->crearmovimiento($tabl, $camp, $valor);
       //echo $res2;
       
         
      }
       
      
      
    


  ?>

